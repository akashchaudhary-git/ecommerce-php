<?php
function pr($arg)
{
    echo '<pre>';
    print_r($arg);
}
function prx($arg)
{
    echo '<pre>';
    print_r($arg);
    die();
}
function get_safe_value($con, $str)
{
    if ($str != '')
        return mysqli_escape_string($con, $str);
}
