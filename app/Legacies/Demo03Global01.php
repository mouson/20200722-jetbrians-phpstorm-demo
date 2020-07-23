<?php

return global_demo01();

function global_demo01()
{
    /**
     * @ref https://www.php.net/manual/en/security.globals.php
     * 在做這波修改的時期，必須要考慮相容 PHP5
     * 因此沒使用 ?? or ?: 這個更簡短的用法
     * $name = $_POST['name'] ?? '';
     */
    $name = isset($_POST['name']) ? $_POST['name'] : '';

    $output = "Hi, {$name}";

    return $output;
}

