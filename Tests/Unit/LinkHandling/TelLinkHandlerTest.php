<?php
declare(strict_types = 1);
namespace VV\T3telephone\Tests\Unit\LinkHandling;

use TYPO3\TestingFramework\Core\Unit\UnitTestCase;
use VV\T3telephone\LinkHandling\TelLinkHandler;

class TelLinkHandlerTest extends UnitTestCase
{
    /**
     * Data to resolve strings to arrays and vice versa, external, mail, page
     *
     * @return array
     */
    public function resolveParametersForNonFilesDataProvider(): array
    {
        return [
            'telephone number with protocol' => [
                [
                    'url' => 'tel:012345678'
                ],
                [
                    'url' => '012345678'
                ],
                'tel:012345678'
            ],
            'telephone number with protocol and spaces' => [
                [
                    'url' => 'tel:+49 123 45 56 78'
                ],
                [
                    'url' => '+49 123 45 56 78'
                ],
                'tel:+49123455678'
            ],
            'invalid telephone number' => [
                [
                    'url' => 'tel:+43-hello-world'
                ],
                [
                    'url' => '+43-hello-world'
                ],
                'tel:+43'
            ],
            'telephone number with weird characters' => [
                [
                    'url' => 'tel:+43/123!45&56%78'
                ],
                [
                    'url' => '+43/123!45&56%78'
                ],
                'tel:+43123455678'
            ],
        ];
    }

    /**
     * @test
     *
     * @param array $input
     * @param array  $expected
     *
     * @dataProvider resolveParametersForNonFilesDataProvider
     */
    public function resolveReturnsSplitParameters($input, $expected)
    {
        $subject = new TelLinkHandler();
        $this->assertEquals($expected, $subject->resolveHandlerData($input));
    }

    /**
     * @test
     *
     * @param string $input
     * @param array  $parameters
     * @param string $expected
     *
     * @dataProvider resolveParametersForNonFilesDataProvider
     */
    public function splitParametersToUnifiedIdentifier($input, $parameters, $expected)
    {
        $subject = new TelLinkHandler();
        $this->assertEquals($expected, $subject->asString($parameters));
    }
}
