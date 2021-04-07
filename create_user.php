<?php
// create_product.php <name>
require_once "bootstrap.php";

$newUserName = $argv[1];

$User = new user();
$User->setUserId($newUserName);
$User->setUserName($newUserName);
$User->setUserPassword($newUserName);
$User->setUserEmail($newUserName);
$User->setUserTime($newUserName);


$entityManager->persist($User);
$entityManager->flush();

echo "Created User with ID " . $User->getId() . "\n";