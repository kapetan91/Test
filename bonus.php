<?php 

function countSmileys($arr) {

$smileys = [":)",";)",":-)",";-)",";~)",":~)",":D",";D",":-D",":~D",";-D",";~D"];
$count = 0;

for ($i = 0; $i < count($arr); $i++){
  for ($j = 0; $j < count($smileys); $j++){
    if ($arr[$i] === $smileys[$j]){
      $count++;
    }
  }
}
return $count;
}

echo countSmileys([':D', ':-D', ':{', ':)', ':dd', ':}', ':-)', ';D', ':/']);

//ovde ce vratiti 5, :D, :-D, :), :-) i ;D
?>