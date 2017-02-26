<?php

trait TestTrait{
    public static $traitStatic = "Test from trait";
}

class TestStatic{
    public static $static1 = "Start";
    public static $num = 0;

    use TestTrait;

    public static function setHello(){
        self::$static1 = "Hello static";
    }

    public static function increment(){
        self::$num++;
    }
}


print TestStatic::$static1 . "<br>"; //Start <br>
TestStatic::setHello();
print TestStatic::$static1 . "<br>"; //Hello static <br>
TestStatic::$static1 = "End";
print TestStatic::$static1 . "<br>"; //End <br>
print TestStatic::$traitStatic . "<br>"; // Test from trait
print TestStatic::$num;     //0
TestStatic::increment();
TestStatic::increment();
TestStatic::increment();
print TestStatic::$num;     //3
