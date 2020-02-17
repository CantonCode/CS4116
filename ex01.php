<?php
$lower = 1;
$upper = 5;



echo "For Loop: \n";
for($x = $lower ;$x <= $upper; $x++){
	echo "Number: $x \n";
	
}

echo "\nWhile Loop \n";

$x= $lower;

while($x <=$upper){
	echo "Number: $x \n";
	$x++;
}

echo "\nDo Loop\n";

$x= $lower;
do{
	echo "Number: $x \n";
	$x++;
}while ( $x <= $upper);

//Plus 2

echo "For Loop +2: \n";
for($x = $lower ;$x <= $upper; $x = $x + 2){
	echo "Number: $x \n";
	
}

echo "\nWhile Loop +2  \n";

$x= $lower;

while($x <=$upper){
	echo "Number: $x \n";
	$x = $x + 2;
}

echo "\nDo Loop +2\n";

$x= $lower;
do{
	echo "Number: $x \n";
	$x = $x + 2;
}while ( $x <= $upper);

//Reverse

echo "For Loop Reverse: \n";
for($x = $upper ;$x >= $lower; $x = $x - 3){
	echo "Number: $x \n";
	
}

echo "\nWhile Loop Reverse \n";

$x= $upper;

while($x >=$lower){
	echo "Number: $x \n";
	$x = $x - 3;
}

echo "\nDo Loop Reverse\n";

$x= $upper;
do{
	echo "Number: $x \n";
	$x = $x -3;
}while ( $x >= $lower);

?>