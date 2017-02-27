<?php
/*
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

function printStatic()
{
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
}
*/

class PersonWriter{

    function writeName( Person $p ) {
        print $p->getName() . "\n";
    }

    function writeAge( Person $p ) {
        print $p->getAge() . "\n";
    }
}

class Person{
    private $writer;

    public function __construct( PersonWriter $writer ) {
        $this->writer = $writer;
    }

    function __call($methodName, $args){
        if ( method_exists( $this->writer, $methodName ) ) {
                $this->writer->$methodName( $this );
        }
    }

    function getName() { return "Vasya"; }
    function getAge() { return 44; }
}

$person = new Person( new PersonWriter() );
$person->writeName();