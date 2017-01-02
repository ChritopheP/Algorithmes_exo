<?php
$n=10;

//$n=intval($n);

$x="a";

for ($i=0; $i < $n ; $i++) {
  for ($s=0; $s < $n-$i ; $s++) echo " ";
echo $x." ";

for ($j=1; $j <= $i; $j++) {
echo $x." ";
}
echo "\n";
  }
