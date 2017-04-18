<?php
# phpinfo();
echo 'Hello World\'s';

print("<h2>Hello World</h2>");

print "hello world<br /> ";


$var = 200.109;
$vara = false;

$myVarA = "string $var value <br />";
$myVarB = 'string '. $var .' value <br />';

echo $myVarA;
echo $myVarB;






$myArray = array("string",100,"hello","world");
// print_r($myArray);
echo '<br />'.$myArray[2]. ' '.$myArray[3];

$myPerson = array("firstname",25,"lastname","toronto");
echo '<br />'.$myPerson[0]. ' '.$myPerson[2];
sort($myPerson);
print_r($myPerson);

 ?>
