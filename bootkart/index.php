<?php include 'templates/header.php'; ?>
<?php include 'backend/getproducts.php'; ?>
<?php
        
        //print_r($products);
    
        if(isset($_SESSION['username'])){
            $username = $_SESSION['username'];
            $id = $_SESSION['id'];
        }else{
            $username = 'user';
        }
        if(isset($_GET['category'])){
            $category = $_GET['category'];
            $products = getproductsbycategory($category);
        }else{
            $category = 'Our Products';
            $products = getallproducts();
        }

    ?>

<div class="jumbotron">
    <h1 class="display-4">Hello,
        <?=$username;?>!</h1>
    <p class="lead">Find the best products online right now!</p>
    <hr class="my-4">

    <?php if(!isset($_SESSION['username'])){ ?>
    <p>Sign up, to start ordering now!</p>
    <p class="lead">
        <a class="btn btn-primary btn-lg" href="signup.php" role="button">Sign up</a>
    </p>

    <?php } ?>

</div>

<h1 class="text-center">
    <?=$category?>
</h1>
<div class="container">
    <div class="row">
        <?php foreach($products as $product){ ?>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem; margin-top:20px;">
                <img class="card-img-top" src="<?=$product['img']?>" alt="Sorry, picture can't load">
                <div class="card-body">
                    <h5 class="card-title">
                        <?=$product['name']?> - Rs.
                        <?=$product['price']?>
                    </h5>
                    <p class="card-text">
                        <?=$product['description']?>
                    </p>
                    <a href="details.php?id=<?=$product['id']?>" class="btn btn-primary">View Product</a>

                    <?php if(isset($_SESSION['username'])){ ?>
                    <a onclick="addtocart('<?=$id?>','<?=$product['id']?>')" class="btn btn-success">Add To Cart</a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<?php include 'templates/footer.php'; ?>