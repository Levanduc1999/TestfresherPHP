<?php
$array = [];
for ($i=0; $i <=3 ; $i++) { 
     $array[$i] =  mt_rand(-(2^30), 2^30 - 1);
}

var_dump($array);
echo "</br>";
$arrayRange=array();
for($x=0; $x<=3; $x++){
    $vtarray= $array[$x];
    for($j=$x+1; $j<=3; $j++){
        $range= abs($array[$j]-$array[$x]);    
        array_push($arrayRange, $range);  
    }  
}
var_dump(min($arrayRange));
echo "</br>";
for ($i=0; $i <=3 ; $i++) {
    $serchNumber= min($arrayRange)+ $array[$i]; 
    if (in_array($serchNumber, $array))
    {
        $arrayNew=array();
        array_push($arrayNew,$array[$i]);
        array_push($arrayNew,$serchNumber);
        var_dump($arrayNew);
    }
}
?>