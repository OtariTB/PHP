<?php
    function f1(){
        echo "<h2>Hello PHP !</h2>";
        echo "<h2>Hello Laravel !</h2>";
    }
    function f2(){
        return "<h2>Hello PHP !</h2>";
        echo "<h2>Hello Laravel !</h2>";
    }

    function f3($a,$b,$c=2){
        echo $a+$b+$c;
    }
    
    f3(4,5,7);
    f2();
    f1();
?>

