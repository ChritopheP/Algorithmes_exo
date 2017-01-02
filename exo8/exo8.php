<?php
echo " choisir le nbm lignes";
$n=readline();
while (!is_numeric($n)){
  echo "choisir le nombre de lignes";
  $n=readline();
}
$n=intval($n);
echo "choisir caractère";
$x=readline()[0];

for ($i=0; $i < $n ; $i++) {
  for ($s=0; $s < $n-$i ; $s++) echo " ";
echo $x." ";

for ($j=1; $j <= $i; $j++) {
echo $x." ";
}
echo "\n";
  }
