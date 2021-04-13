<?php
// update_product.php <id> <new-name>
require_once "bootstrap.php";
/* @var $entityManager Doctrine\ORM\EntityManager */

$id = $argv[0];
$newName = $argv[1];

$blog = $entityManager->find('blog', $id);

if ($blog === null) {
    echo "Product $id does not exist.\n";
    exit(1);
}

$blog->setBlogTitle($newName);

$entityManager->flush();