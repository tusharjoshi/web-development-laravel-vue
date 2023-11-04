<?php


include ("../app/file3.php");

echo \Company\MyProject\sayHello();

$person1 = new \Company\MyProject\Person();
echo $person1->getName();

use \Company\MyProject\Person;
$person2 = new Person();
echo $person2->getName();