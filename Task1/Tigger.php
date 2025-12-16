<?php
class Tigger {

    private static $instance = null;
    private $roarCounter = 0;

       public static function getInstance(): Tigger{
            if(self :: $instance == null)
                self :: $instance = new Tigger();
            else
                echo "Object created before";

        return  self :: $instance;
        }


       private function __construct() {
               echo "Building character..." . PHP_EOL;
       }

       public function roar() {
               echo "Grrr!" . PHP_EOL;
               $this->roarCounter++;
       }

       public function getCounter(): int{
        return $this -> roarCounter;

       }
}

?>