<?php

$BASE = __DIR__ . '/../..';
require_once $BASE . '/app/Legacies/Lib/Helper.php';
require_once $BASE . '/app/Legacies/Lib/Demo03Example01Lib.php';

return repeat('Str');

function uniDecode($str)
{
    return urldecode(iconv("UTF8", $_POST['charset'],
        preg_replace_callback("/%u[0-9A-Za-z]{4}/", 'toUtf8', $str)));
}

function toUtf8($ar)
{
    $c = '';
    foreach ($ar as $val) {
        $val = intval(substr($val, 2), 16);
        if ($val < 0x7F) {        // 0000-007F
            $c .= chr($val);
        } elseif ($val < 0x800) { // 0080-0800
            $c .= chr(0xC0 | ($val / 64));
            $c .= chr(0x80 | ($val % 64));
        } else {                // 0800-FFFF
            $c .= chr(0xE0 | (($val / 64) / 64));
            $c .= chr(0x80 | (($val / 64) % 64));
            $c .= chr(0x80 | ($val % 64));
        }
    }

    return $c;
}


function getTheDate($aD)
{
    return substr($aD, 0, strpos($aD, " "));
}

function getTheTime($aD)
{
    return substr($aD, strpos($aD, " ") + 1, strpos($aD, ".") - strpos($aD, " ") - 1);
}

function returnOtType($stat)
{
    return iconv("BIG5", $_POST['charset'], ($stat == "normal" ? "一般" : "假日"));
}

function returnOtRest($ot_va, $ot_ra)
{
    global $IdVa;
    if ($ot_ra == "rest") {
        return uniDecode($IdVa[$ot_va]);
    } else {
        return iconv("BIG5", $_POST['charset'], "加班費");
    }
}

function returnStatus($stat)
{
    if ($stat == "S") {
        return iconv("BIG5", $_POST['charset'], "待簽核");
    } else if ($stat == "R") {
        return iconv("BIG5", $_POST['charset'], "遭退件");
    }
    return $stat;
}

if (function_exists('repeat') == false) {
    function repeat($str) {
        return $str . $str;
    }
}
