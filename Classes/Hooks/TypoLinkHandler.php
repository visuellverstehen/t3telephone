<?php

namespace VV\T3telephone\Hooks;

use TYPO3\CMS\Core\SingletonInterface;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\Service\TypoLinkCodecService;

class TypoLinkHandler implements SingletonInterface
{
    /**
     * @param string $linkText
     * @param array $configuration
     * @param string $linkHandlerKeyword
     * @param string $linkHandlerValue
     * @param string $mixedLinkParameter
     * @param $cObj ContentObjectRenderer
     *
     * @return array
     */
    public function main(string $linkText, array $configuration, string $linkHandlerKeyword, string $linkHandlerValue, string $mixedLinkParameter, ContentObjectRenderer $cObj): array
    {
        $linkParameterParts = GeneralUtility::makeInstance(TypoLinkCodecService::class)->decode($mixedLinkParameter);

        return [
            'href' => $linkHandlerKeyword . ':' . $linkHandlerValue,
            'target' => $linkParameterParts['target'],
            'class' => $linkParameterParts['class'],
            'title' => $linkParameterParts['title'],
        ];
    }
}
