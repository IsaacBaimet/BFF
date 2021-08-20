<?php
print_r($_POST);

function add($number1, $number2){
$total+$number1+$number2;

echo"The total is ".$total;

}
add(5,6)
$firstnumber=$_POST["num1"];
$secondnumber=$_POST["num2"];

add($firstnumber, $secondnumber);

function multiply($num1,$num2){

    $total=$num1*$num2;
    echo$total;
}

multiply(5,5)
$firstnumber=$_POST["num1"];
$secondnumber=$_POST["num2"];

multiply($firstnumber, $secondnumber);

$sql_select="SELECT record_id,firstnumber,secondnumber FROM Addition";
$result=$conn->query($sql_select);

?>php

