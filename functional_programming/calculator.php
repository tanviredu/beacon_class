<?php 

    class Calculator{

        public function add($number1,$number2){
            return $number1+$number2;
        }
        public function subtract($number1,$number2){
            return $number1-$number2;
        }
        public function multiply($number1,$number2){
            return $number1*$number2;
        }
        public function devide($number1,$number2){
            return $number1/$number2;
        }
        public function sinf($number){
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

    $cal = new Calculator();
    echo $cal->add(1,2);
    echo "</br>";
    echo $cal->subtract(1,2);
    echo "</br>";
    echo $cal->multiply(1,2);
    echo "</br>";
    echo $cal->devide(1,2);
    echo "</br>";
    echo $cal->sinf(1.2);
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