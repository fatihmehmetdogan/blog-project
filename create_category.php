<?php
// create_blog.php <name>
require_once "bootstrap.php";


$newUserName2 = $argv[1];
$newUserName3 = $argv[2];
$newUserName4 = $argv[3];

$Blog = new category();

$Blog->setCategoryTitle($newUserName2);
$Blog->setCategoryImage($newUserName3);
$Blog->setCategoryOrder($newUserName4);


$entityManager->persist($Blog);
$entityManager->flush();

echo "Created category with ID " . $Blog->getId() . "\n";