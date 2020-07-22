<?php

return global_demo03();

function global_demo03()
{

    $output = "Hi, " . implode(', ', $names);

    return $output;
}

