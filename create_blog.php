<?php
// create_product.php <name>
require_once "bootstrap.php";

$newUserName = $argv[0];
$newUserName2 = $argv[1];
$newUserName3 = $argv[2];
$newUserName4 = $argv[3];
$newUserName5 = $argv[4];

$Blog = new blog();
$Blog->setBlogId($newUserName);
$Blog->setBlogTitle($newUserName2);
$Blog->setBlogContent($newUserName3);
$Blog->setBlogImage($newUserName4);
$Blog->setBlogOrder($newUserName5);


$entityManager->persist($Blog);
$entityManager->flush();

echo "Created User with ID " . $Blog->getId() . "\n";