<?php 
    $number=0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Day2 practice</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <?php for($i=0;$i<3;$i++){ ?>
        <div class="row number-row">
            <?php for($j=0;$j<3;$j++){ $number++; ?>
            <div class="col-sm-4 number-<?php 
                if($j == 0){
                    echo "left";
                }
                if($j == 1){
                    echo "center";
                }
                if($j == 2){
                    echo "right";
                }
            ?>">
                <h1 class="text-center"><?php echo $number ?></h1>
            </div>
            
            <?php } ?>
            
        </div>
        <?php } ?>


    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>