<?php 

    class Calculator{

        function __construct($number1,$number2){
            $this->number1 = $number1;
            $this->number2 = $number2;
            //$this->number3 = $number3;
        }

        public function add(){
            return $this->number1+$this->number2;
        }
        public function subtract(){
            return $this->number1-$this->number2;
        }
        public function multiply(){
            return $this->number1*$this->number2;
        }
        public function devide(){
            return $this->number1/$this->number2;
        }
        public function sinf($number=1.2){
            return sin($number);

        }
        public function cosf($number){
            return cos($number);
        }
        public function tanf($number){
            return tan($number);
        }
        public function logf($number){
            return log($number);
        }
        public function sqrtroot($number){
            return sqrt($number);
        }

    }

    $cal = new Calculator(1,2);
    echo $cal->add();
    echo "</br>";
    echo $cal->subtract();
    echo "</br>";
    echo $cal->multiply();
    echo "</br>";
    echo $cal->devide();
    echo "</br>";
    echo $cal->sinf();
    echo "</br>";
    echo $cal->cosf(1.2);
    echo "</br>";
    echo $cal->tanf(1.2);
    echo "</br>";
    echo $cal->logf(1.2);
    echo "</br>";
    echo $cal->sqrtroot(1.2);
    echo "</br>";
?>