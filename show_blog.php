<?php
require_once "bootstrap.php";

/* @var $entityManager Doctrine\ORM\EntityManager */

$id = $argv[1];
$blog = $entityManager->find("blog", $id);



echo sprintf("-%s\n", $blog->getBlogImage());

echo sprintf("-%s\n", $blog->getBlogTitle());
echo sprintf("-%s\n", $blog->getBlogContent());

