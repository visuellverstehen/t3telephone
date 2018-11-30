<?php
namespace VV\T3telephone\LinkHandling;

use TYPO3\CMS\Core\LinkHandling\LinkHandlingInterface;

class TelLinkHandler implements LinkHandlingInterface
{
    /**
     * Returns the sanatinzed link to an tel as a string.
     *
     * @param array $parameters
     * @return string
     */
    public function asString(array $parameters): string
    {
        $telephoneNumber = preg_replace('/(?:[^\d\+]+)/', '', $parameters['url']);

        return 'tel:' . $telephoneNumber;
    }

    /**
     * Returns the telephone number without the url prefix prefix
     * in the 'tel' property of the array.
     *
     * @param array $data
     * @return array
     */
    public function resolveHandlerData(array $data): array
    {
        return [
            'url' => preg_replace('/(tel:)/', '', $data['url'])
        ];
    }
}
