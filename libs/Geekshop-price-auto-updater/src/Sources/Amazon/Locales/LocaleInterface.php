<?php

namespace GeekshopPriceAutoUpdater\Sources\Amazon\Locales;

interface LocaleInterface
{
    public function getEndPoint();

    public function getRequestSignatureString();
}
