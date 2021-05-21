<?php
$nhapN= $_GET["nhap_n"];
echo $nhapN;
$oldarray=array();
for($x=0; $x< 3*$nhapN; $x++){
    array_push( $oldarray,mt_rand(0, 100));
}
var_dump($oldarray);
echo "</br>";
$newarray= array();
for($n =0; $n<$nhapN; $n++){
    for($i=$n; $i<count($oldarray); $i+=$nhapN){  
        array_push($newarray,$oldarray[$i]);
    }
}
var_dump($newarray);
?>