<?php
    use PHPUnit\Framework\TestCase;

    class CalculatorWithFixtureTest extends TestCase {
        protected $calc;

        // Template Function
        public  static function setupBeforeClass(){
        }

        // Template Function
        public function setup(){
            $this->calc = new Calculator();
        }

        // Template Function
        public function assertPreConditions(){

        }

        // Template Function
        public function assertPostConditions() {

        }

        // Template Function
        public function teardown(){
        }

        // Template Function
        public  static function teardownAfterClass(){

        }

        public function testIsDivisionCorrect(){            
            $result = $this->calc->divide(0,1);
            $expected = 0;
            $this->assertSame($expected,$result);       
        }        

    }