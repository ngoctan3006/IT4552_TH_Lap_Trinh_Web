<?php

class Counter {
    private static $count = 0;
    const VERSION = 2.0;

    function __construct()
    {
        self::$count++;
    }

    function __destruct()
    {
        self::$count--;
    }

    static function getCount()
    {
        return self::$count;
    }
}

$c1 = new Counter();
print($c1->getCount() . "\n");

$c2 = new Counter();
print(Counter::getCount() . "\n");

$c2 = null;

print($c1->getCount() . "\n");
print("Version used: " . Counter::VERSION . "\n");