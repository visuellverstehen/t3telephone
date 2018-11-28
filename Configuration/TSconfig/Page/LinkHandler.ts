TCEMAIN.linkHandler {
    tel {
        handler = VV\T3telephone\Recordlist\LinkHandler\TelLinkHandler
        label = LLL:EXT:t3telephone/Resources/Private/Language/locallang_browse_links.xlf:tel
        scanAfter = page
        addParams = onclick="jumpToUrl('?act=tel&linkAttributes[title]=Call number&linkAttributes[class]=phone&linkAttributes[params]=');return false;"
    }
}
