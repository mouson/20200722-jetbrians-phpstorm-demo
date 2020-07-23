<?php

if (function_exists('repeat') == false) {
    function repeat($str)
    {
        return $str . $str . $str;
    }
}
