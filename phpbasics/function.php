<?php

function add(){
	$a=10;
	$b=15;
	echo $a+$b;
}
add();

function addition($e,$r,$t=0){

	return $e+$r+$t; //return?
}

$y=addition(1,2);
echo "<br>this is parameterised function<br>";
echo $y;

// calling a function inside a function is known as recursion.

//Array - index array,associative array and multidimentionsal array.
$x=[1,2,3,4,5,6,7,8,9];
$z=[];

echo "<pre>"; // for make an array vertical.
//print_r($x);  it provide array values and their particular addresses.
//var_dump($x);
print_r($x);
echo "</pre>";

echo $x[4];
"<br>";
echo $x[count($x)-1]; //by count() and sizeof() method we can get the total number of elements inside an array.
$f=['Ripudaman','rahul','shikha'];
unset($f[2]); //removing the value from an array.
print_r($f);

echo str_replace("rahul","raj", $f);

//function problems

function solveme($g,$h){
	return $g+$h;
}

$handle= fopen("php://stdin","r");//fopen is a predefined function for file open
$L= fgets($handle); // fgets read one line from the open file.
$p= fgets($handle);
$sum = solveme((int)$L,(int)$p);
echo ($sum);
fclose($handle); //fclose closes the opened file .

$file = fopen("ntd.txt", "r+");
rewind($file);
fwrite($file, 'hello world, this is php function');
fflush($file);

fclose($file);

//addition of simple array.
function simplearraysum(){
    $ar=[1,2,3,4,5,6];
    $sum=0;
    for ($i=0; $i <count($ar)+1 ; $i++) {
    	$sum= $sum+$ar[$i];
    }

    echo $sum;
}
simplearraysum();