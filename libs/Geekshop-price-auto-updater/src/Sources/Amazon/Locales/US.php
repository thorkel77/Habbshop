<?php

namespace GeekshopPriceAutoUpdater\Sources\Amazon\Locales;

class US extends BaseLocale
{
    public function getEndPoint()
    {
        return "http://webservices.amazon.com/onca/xml";
    }

    public function getRequestSignatureString()
    {
        return "GET\nwebservices.amazon.com\n/onca/xml\n";
    }
}
