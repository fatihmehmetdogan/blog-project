<?php
require_once "bootstrap.php";
/* @var $entityManager Doctrine\ORM\EntityManager */

$BlogId = $argv[1];
$blog = $entityManager->find('blog', $BlogId);

if ($blog === null) {
    echo "No product found.\n";
    exit(1);
}



echo sprintf("-%s\n", $blog->getBlogTitle());