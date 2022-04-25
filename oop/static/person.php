<?php
class Person {
    private static $count = 0;
    private $name;
    function __construct($name) {
        $this->name = $name;
        self::$count++;
    }
    function enter() {
        echo "<h1>Enter ".$this->name." ".self::$count."</h1>";
    }
    static function getCount() {
        return self::$count;
    }
}
$p1 = new Person('egoing');
$p1->enter();
$p2 = new Person('leezche');
$p2->enter();
$p3 = new Person('duru');
$p3->enter();
$p4 = new Person('taiho');
$p4->enter();
echo Person::getCount();
?>
