<?php
if (function_exists('global_demo02') == false) {
    function global_demo02()
    {


        if (isset($name)) {
            $output = "Hi, {$name}";
        } else {
            $output = "No One Exist";
        }

        return $output;
    }
}

return global_demo02();

