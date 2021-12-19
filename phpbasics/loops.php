//20th oct 2021
<?php
/*
$ar = 1;

while($ar<10){
     echo $ar;// while loop for printing incrementing numbers
      $ar++;
}

$n = 1;

 while ($n<=40) {
 	if ($n%2==0) {
 		echo $n;
	echo "<br>"; // while loop for printing even numbers
 	}
 	 $n++;
}
// do-while
$n = 1;
do{
	echo $n;
	 $n++;
}while($n<10);

//for loop
for ($i=1; $i <10 ; $i++) {
	echo "<br>";
	echo $i;//for loop printing 1 to 10 code...
}
//21st oct 2021
$b = [1,4,5,6,7,8,9,10,3,2,4,6,17,13,12,11,15,14,16,18,19,20];

for ($i=0; $i < count($b)-1; $i++) {

	if ($b[$i]%2==0) {
		// code...
	echo "<br>";
 	echo $b[$i];// code...
  }
}
*/
/*$b= [1,2,34,56,76,3,5,6,7,8,9,12,13,14,15,15,16,17,18,19,20];

foreach ($b as $key => $value) {
	if ($value%2==0) {
		// code...
	}
	//echo "$key <br>";
	echo "$value <br>";// code...
}
*/
$a=[1,2,3,4,4,5,5,6,6,7,7,7,7,7]; //how to find duplicate values in an array?
//find last value of an array?
$b=[];
$c=[];
/*foreach ($a as $key => $value) {
	if ($value%2==0) {
	$b[]=$value;	// loop for even and odd values code...
	} else {
	$c[]=$value;// code...
	}
	// code...
}

print_r($b);
*/
//22nd oct 2021
foreach ($a as $key => $value) {
	//print_r($a);// code...
	if (in_array($value, $c))//in_array()
	 {
		$b[]=$value;// code...
	} else {
		$c[]=$value;// code...
	}
	//echo "<br><pre>";
	//print_r($b);
}


print_r($b);

$h=[1,2,3,4,5,6,7];
$g=0; $k=0;
foreach ($h as $key => $value) {
	$g=$value-1;
	$k++;// loop for last value in an array code...
}
echo "<br>";
print_r($g);
echo "<br>";
print_r($k);

$j=[1,2,3,4,45,6];
$l=[3,4,5,6,7,8];
$x=[];
$p=[];
$m=[];
foreach ($j as $key => $value) {
	$j=$value-1;//multiplication of two arrays
	$x=$key+3;// code...
	$p=$value*3;
foreach ($l as $key => $value) {
	// code...
}


}
echo "<br>";
print_r($x);
echo"<br>";
print_r($p);

?>