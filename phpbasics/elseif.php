<?php
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
?>