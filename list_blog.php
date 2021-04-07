<?php
// list_products.php
require_once "bootstrap.php";

$productRepository = $entityManager->getRepository('blog');
$products = $productRepository->findAll();

foreach ($products as $blog) {
    echo sprintf("-%s\n", $blog->getName());
}