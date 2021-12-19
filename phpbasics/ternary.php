<?php
$e=20;
$b=29;
$c=35;
//echo ($a>$b)? "$a is greater":"$b is the greatest" ;

//echo ($a> $b && $b> $c)?"$c is greater":(($a>$b && $a>$c)?"$b":"$c"); //ternary operator with three variables.

date_default_timezone_set("Asia/Kolkata"); //Current time

echo date("Y-m-d h:i:s");

$a=date("h");  //
if ($a>1 && $a<12) {
	echo "<br>Good Morning";
} elseif ($a>=12 && $a<=16) {
	echo "<br>Good Afternoon";
} elseif($a>16 && $a<=20) {
	echo "<br>Good Evening";
} else
     echo "<br>Good Night";



