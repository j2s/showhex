<?php 
print("Show un-printable characters in a string\n");

if (count($argv) == 1) {
    $fp = fopen($argv[0],'r'); // will generate an error on failure
} else {
    $fp=STDIN;
}

if ($fp === FALSE) {
    exit();
}

$s="abcd\t\nE";
print showbin($s);

//$stdin = fopen('php://stdin', 'r');
while (($line = fgets($fp)) !== false) {
   print showbin($line);
}

exit();

/////////////////////////////////////////////

function showbin($s) {
  $t='';
  for ($i=0; $i < strlen($s); $i++){
    $o = ord($s[$i]);
    if ($o > 127 || $o < 32) {
      $t.='@('.bin2hex($s[$i]).')';
    } else {
      $t.=$s[$i];
    }
  }
  return $t;
}

