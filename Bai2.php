<?php
$array = [];
for ($i=0; $i <=10 ; $i++) { 
     $array[$i] =  mt_rand(-(2^30), 2^30 - 1);
}
var_dump($array);
$totalArray= array();
for($x=0; $x<=10; $x++){  
    for($j=0; $j<=10;$j++){
        if($x != $j){
             $total=$array[$x]+$array[$j];
             array_push($totalArray,$total);
        }     
    }  
}
echo "</br>";
echo max($totalArray);
?>