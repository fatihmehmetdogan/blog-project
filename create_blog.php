<?php
// create_blog.php <name>
require_once "bootstrap.php";

$newUserName2 = $argv[1];
$newUserName3 = $argv[2];
$newUserName4 = $argv[3];
$newUserName5 = $argv[4];

$Blog = new blog();

$Blog->setBlogTitle($newUserName2);
$Blog->setBlogContent($newUserName3);
$Blog->setBlogImage($newUserName4);
$Blog->setBlogOrder($newUserName5);


$entityManager->persist($Blog);
$entityManager->flush();

echo "Created Blog with ID " . $Blog->getId() . "\n";