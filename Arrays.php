<?php

$fruits=array("apple","Banana","oranges");
echo"<pre>";
print_r($fruits);
echo "</pre>";

$fruits2=["pears","grapes","watermelon","Strawberries"];
print_r($fruits2);

$fruits_length=count($fruits);

for($i=0; $i <$fruits_length; $i++) {

    echo"I am eating an".$fruits[$i] . "<br>" ;
}

//Iterating thru the indexed array

for($i=0; $i < $fruits_length ; $i++){

    echo"I am eating " .$fruits[$i] . '<br>' ;

}

//Associative arrays

$students=array("Roy" => "34", "Jane" => "10", "Peter"=>"45");

echo"<pre>";
print_r($students2);
echo"</pre>";

$students2=["John"=>"30", "Consola"=>"24"];
print_r($students2);

$students2["Abigail"]="28";
print_r($students2);
echo"<br>";

//Iterate through associative array

foreach ($students2 as $fname => $age){
    echo "My name is ".$fname." and I am ".$age." years old" '<br>';
}

$people=array(
        array("Ankit", "Ram", "Shaym"),
        array("Unnao_1","Trichy_4", "Rose_5")
);
echo "<pre>";
print_r($people);
echo"</pre>";

//echo $people[1[0]

$data=[
    "Game of Thrones"=>["Jaime", "Caitlyn", "Cersei"],
    "Black Mirror"=>["Nanette", "Selma", "Karin"]
];

echo"<pre>";
print_r($data);
echo"<pre>";
//iterate thru multidimensional array

foreach($data as $series =>$actors) {
    echo "The first key is ".$key. "<br>";
    foreach($value as $key1=>$value1){
        echo "The key is ".$key1. "the value is " .$value1. "<br>";
    }
}