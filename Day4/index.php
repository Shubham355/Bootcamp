<?php 
    include 'backend/getproducts.php';
    $products = getallproducts();
    $product = getsingleproduct(10);
    print_r($product);

?>