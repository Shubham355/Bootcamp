<?php 
include 'templates/header.php';
include 'backend/getproducts.php';
$productid = $_GET['id'];
$product = getsingleproduct($productid);
$id = $_SESSION['id'];
//print_r($product);
?>
<div class="container text-center">
    <h1><?=$product['name'];?></h1>
    <img src="<?=$product['img'];?>" alt="">
    <h1>Price - Rs. <?=$product['price'];?></h1>
    <p><?=$product['description'];?></p>

    <?php if(isset($_SESSION['username'])){ ?>
    <button onclick="addtocart('<?=$id?>','<?=$product['id']?>')" class="btn btn-success">Add to cart</button>
    <?php } ?>

</div>

<?php include 'templates/footer.php'; ?>