<?php
// list_products.php
require_once "bootstrap.php";

$productRepository = $entityManager->getRepository('users');
$products = $productRepository->findAll();

foreach ($products as $product) {
    echo sprintf("-%s\n", $product->getName());
}