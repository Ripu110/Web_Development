<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
   //Arthmetic operator
   //+,-,/,%,*,**(for power)
   // pow(base, exp) used for exponential function.
   //typcasting
  // increment & Decrement operator
   echo $a = 1;
   echo $a++;
   echo $a++;
   echo $a;
   echo $a = $a--;
   echo $a = $a -1;

   //logical operator

   //&&;
   //||;
    //!;

    echo $a = "ripu";
    echo $b = "singh";
    echo $a." ".$b;
    //Conditional operator
   /* $e = 6
    if ($e>2) {
    	echo "string";// code...
    }
    */
    /* $d = 8
    if ($d > 5 &&  $h > 8) {
    	echo "this is first program";// code...
    };
    */
    if ($d % 2 == 0) {
    	echo "string";// code...
    };
//elseif  9th oct 2021
$y= 10;
$u= 15;
$i= 20;
$p= 5;

if ($y > $u && $y > $i && $y > $p)
{
    echo "Y is the greatest";
} elseif ($u > $y && $u > $i && $u > $p)
 {
    echo "U is the greatest";
}
  elseif ($i > $y && $i > $u && $i > $p)
 {
    echo "I is the greatest";
 }
    else
 {
    echo "p is the greatest";
}
switch (variable) {
   case 'value':
      // code... this is alternative of ifelse statement.
      break;
   default:
      // code...
      break;
}
?>


</body>
</html>