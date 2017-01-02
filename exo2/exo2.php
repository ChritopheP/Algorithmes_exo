<?php

$tableau = [1,2,3,4];
$echange = 0;
$trie = false;

while ($trie==false) {
       $trie=true;

for($i=0; $i<count ($tableau)-1 ; $i++)
{

if ($tableau[$i] < $tableau[$i+1]) {

$echange = $tableau[$i];
$tableau[$i] = $tableau [$i+1];
$tableau [$i+1] = $echange;
$trie = false;
    }
  }
}
 print_r ($tableau);
