<?php
$key = array(23,16,81,14,99);
$value = array("Jim","Fred","Mary","Susan","Bart");
$x=0;
$i = 0;
$highest = 0;
$y = 0;
$keyMax = sizeof($key);
$valueMax = sizeof($value);
for( $x; $x < $keyMax; $x++){
	echo $key[$x] . ":";
	echo $value[$x] . "\n";
}

for( $x; $x < $keyMax; $x++){
	$y = $key[$x];
	
	echo $key[$x];
	
	if ( $y < $highest){
		$highest = $y;
		$i = $x;
	}
}

echo "highest key is: " . $highest . " and its value is:" . $value[$i] . "\n";
	

?>