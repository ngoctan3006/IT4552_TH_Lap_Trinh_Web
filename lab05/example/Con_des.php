<?php

class BaseClass {
    protected $name = "BaseClass";

    function __construct()
    {
        print("In " . $this->name . " constructor\n");
    }

    function __destruct()
    {
        print("Destroying " . $this->name . "\n");
    }
}

class SubClass extends BaseClass {
    function __construct()
    {
        $this->name = "SubClass";
        parent::__construct();
    }

    function __destruct()
    {
        parent::__destruct();
    }
}

$obj1 = new SubClass(); 
// In SubClass constructor
// Destroying SubClass
$pbj2 = new BaseClass();
// In SubClass constructor
// In BaseClass constructor
// Destroying BaseClass
// Destroying SubClass