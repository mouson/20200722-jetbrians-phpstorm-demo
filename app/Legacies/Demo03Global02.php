<?php
if (function_exists('global_demo02') == false) {
    function global_demo02()
    {
        /**
         * @ref https://www.php.net/manual/en/security.globals.php
         * @ref https://www.php.net/manual/en/types.comparisons.php
         *
         * 在做這波修改的時期，必須要考慮相容 PHP5
         * 因此沒使用 ?? or ?: 這個更簡短的用法
         * $name = $_POST['name'] ?? '';
         */
        $name = isset($_POST['name']) ? $_POST['name'] : null;

        if (isset($name)) {
            $output = "Hi, {$name}";
        } else {
            $output = "No One Exist";
        }

        return $output;
    }
}

return global_demo02();

