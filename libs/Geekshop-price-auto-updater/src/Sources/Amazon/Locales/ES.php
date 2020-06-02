<?php

namespace GeekshopPriceAutoUpdater\Sources\Amazon\Locales;

class ES extends BaseLocale
{
    public function getEndPoint()
    {
        return "http://webservices.amazon.es/onca/xml";
    }

    public function getRequestSignatureString()
    {
        return "GET\nwebservices.amazon.es\n/onca/xml\n";
    }
}
