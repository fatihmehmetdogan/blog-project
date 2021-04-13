<?php
// create_blog.php <name>
require_once "bootstrap.php";

$newBlog = $argv[1];
$newBlog2 = $argv[2];
$newBlog3 = $argv[3];
$newBlog4 = $argv[4];

$Blog = new blog();

$Blog->setBlogTitle($newBlog);
$Blog->setBlogContent($newBlog2);
$Blog->setBlogImage($newBlog3);
$Blog->setBlogOrder($newBlog4);


$entityManager->persist($Blog);
$entityManager->flush();

echo "Created Blog with ID " . $Blog->getId() . "\n";