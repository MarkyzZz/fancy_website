<?php 

require 'functions/bootstrap.php';

$sizes = $query->selectAll('sizes');
$product_types = $query->selectAll('product_types');

include 'views/women.view.php';