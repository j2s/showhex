<?php
print("hello\n");
print("error log=".ini_get("error_log")."\n");

$s= "abcd\t\nE";
print showbin($s);

function showbin($s) {
  $t='';
  for ($i=0; $i < strlen($s); $i++){
    $o = ord($s[$i]);
    if ($o > 127 || $o < 32) {
      $t.='@'.bin2hex($s[$i]);
    } else {
      $t.=$s[$i];
    }
  }
  return $t;
}
