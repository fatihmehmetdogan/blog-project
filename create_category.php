<?php
// create_blog.php <name>
require_once "bootstrap.php";


$newCategory = $argv[1];
$newCategory2 = $argv[2];
$newCategory3 = $argv[3];

$Category = new category();

$Category->setCategoryTitle($newCategory);
$Category->setCategoryImage($newCategory2);
$Category->setCategoryOrder($newCategory3);


$entityManager->persist($Category);
$entityManager->flush();

echo "Created category with ID " . $Category->getId() . "\n";