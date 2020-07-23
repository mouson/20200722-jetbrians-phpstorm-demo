<?php

return global_demo03();

function global_demo03()
{
    /**
     * @ref https://www.php.net/manual/en/security.globals.php
     * @ref https://www.php.net/manual/en/types.comparisons.php
     *
     * 在做這波修改的時期，必須要考慮相容 PHP5
     * 因此沒使用 ?? or ?: 這個更簡短的用法
     * $name = $_POST['name'] ?? '';
     */
    $names = isset($_POST['names']) ? $_POST['names'] : [];

    $output = "Hi, " . implode(', ', $names);

    return $output;
}

