<?php
require_once "bootstrap.php";
$newUserName2 = $argv[1];
$newUserName3 = $argv[2];
$newUserName4 = $argv[3];
$newUserName5 = $argv[4];

$User = new User();

$User->setUserName($newUserName2);
$User->setUserPassword($newUserName3);
$User->setUserEmail($newUserName4);
$User->setUserTime($newUserName5);


$entityManager->persist($User);
$entityManager->flush();

echo "Created User with ID " . $User->getId() . "\n";