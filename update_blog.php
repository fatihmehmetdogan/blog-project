<?php
// update_product.php <id> <new-name>
require_once "bootstrap.php";
/* @var $entityManager Doctrine\ORM\EntityManager */

$id = $argv[1];
$newName2 = $argv[2];
$newName3 = $argv[3];


$blog = $entityManager->find('blog', $id);

if ($blog === null) {
    echo "Product $id does not exist.\n";
    exit(1);
}

$blog->setBlogTitle($newName2);
$blog->setBlogContent($newName3);


$entityManager->flush();