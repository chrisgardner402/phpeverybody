<?php
$li = ['a', 'b', 'c', 'd', 'e', 'z'];
array_splice($li, 1, 1, 'B');
var_dump($li);
?>