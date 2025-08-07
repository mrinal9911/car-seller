<?php

if (!function_exists('indianNumberFormat')) {
    function indianNumberFormat($amount)
    {
        $parts = explode('.', number_format($amount, 2, '.', ''));
        $integerPart = $parts[0];
        $decimalPart = $parts[1];

        $lastThree = substr($integerPart, -3);
        $restUnits = substr($integerPart, 0, -3);

        if ($restUnits != '') {
            $lastThree = ',' . $lastThree;
        }

        $restUnits = preg_replace("/\B(?=(\d{2})+(?!\d))/", ",", $restUnits);

        return $restUnits . $lastThree;
    }
}
