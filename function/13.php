<?php
$test = 1;
function get_arguments(){
    global $test;
    $test = 2;
    echo $test.'<br />';
}
get_arguments();
echo $test.'<br />';
?>