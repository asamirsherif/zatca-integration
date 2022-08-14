<?php

if (!function_exists('zatca')) {
    function zatca(): Asamirsherif\Zatca\Zatca
    {
        return app('zatca');
    }
}

if (!function_exists('qrCodeOptions')) {
    function qrCodeOptions(): Asamirsherif\Zatca\Utilis\QrCodeOptions
    {
        return app('qrcode.options');
    }
}
