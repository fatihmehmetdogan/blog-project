<?php
// list_products.php
require_once "bootstrap.php";

/* @var $entityManager Doctrine\ORM\EntityManager */
$BlogRepository = $entityManager->getRepository('blog');
$blogs = $BlogRepository->findAll();

foreach ($blogs as $blog) {
    echo sprintf("-%s\n", $blog->getId());
    echo sprintf("-%s\n", $blog->getBlogTitle());
    echo sprintf("-%s\n", $blog->getBlogContent());
    echo sprintf("-%s\n", $blog->getBlogImage());
}