<?php
echo('Welke Operator wil je toepassen? (+,-,%)' . PHP_EOL);
$opr = readline('');
if($opr == '+' || $opr == '-' || $opr == '%'){
    echo('Wat is je eerste getal?' . PHP_EOL);
    $num1 = readline('');
    if(is_numeric($num1)){
        echo('Wat is je tweede getal?' . PHP_EOL);
        $num2 = readline('');
        if(is_numeric($num2)){
            if($opr == '+'){
            echo('Uw resultaat is: ' . ($num1 + $num2));
            }
            else if($opr == '-'){
            echo('Uw resultaat is: ' . ($num1 - $num2));
            }
            else if($opr == '%'){
            echo('Uw resultaat is: ' . ($num1 % $num2));
            }
        }
        else{
            echo($num2 . ' is geen getal.');
        }
    }
    else{
        echo($num1 . ' is geen getal.');
    }
}
else{
    echo($opr . ' is geen geldige operation.');
}




