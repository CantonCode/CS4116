<?php
$key = array(23,16,81,14,99);
$value = array("Jim","Fred","Mary","Susan","Bart");
$x=0;
$y;
$i = 0;
$highest = 0;
$keyMax = sizeof($key);
$valueMax = sizeof($value);

for( $x; $x < $keyMax; $x++){
	
	if ( $key[$x] > $highest){
		$highest = $key[$x];
		$i = $x;
	}
}

echo "highest key is: " . $highest . " and its value is:" . $value[$i] . "\n";
?>