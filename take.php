<?php

$num1 = $_POST['num1'];
$num2= $_POST['num2'];
$option = $_POST['option'];

if ($option == 'addition'){
   echo $num1 + $num2;
}
else if ($option == 'substraction'){
    echo $num1 - $num2;
 }
 else if ($option == 'division'){   
    echo $num1 / $num2;
 }
 else if ($option == 'multiolication'){
    echo $num1 * $num2;
 }
?>