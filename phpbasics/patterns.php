//25th oct 2021

<?php
/*
echo "<br>";
$a=5;
for ($i=0; $i <5; $i++) {
	for ($j=0; $j <$a; $j++) {
		echo "*";// code...
	}// code...
	 for ($k=0; $k <$i; $k++) {
		echo "*";// code...
	}
	echo "<br>";
}*/
echo "<br>";
$n=5;
for ($i=1; $i <$n ; $i++) {
	for ($j=1; $j <=(2*$n)-1 ; $j++) {
		if ($j>=$n-($i-1) && $j<=$n + ($i-1)) {
			echo "*";// code...
		} else {
			echo "&nbsp;&nbsp";//  for blank space
		}
		// code...
	}// code...
	echo "<br>";
}
echo "<br>";
$n=5;
for ($i=$n; $i >=1 ; $i--) {
	for ($j=1; $j <=(2*$n)-1 ; $j++) {
		if ($j>=$n-($i-1) && $j<=$n + ($i-1)) {
			echo "*";// code...
		} else {
			echo "&nbsp;&nbsp";// for blank space
		}
		// code...
	}// code...
	echo "<br>";
}
?>







