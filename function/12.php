<?php
$test = 1;
function get_arguments($arg){
    $test = 2;
    echo $test.'<br />';
}
get_arguments(1);
echo $test.'<br />';
?>