<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home_prac</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    
</body>
</html>

<?php

session_start();


require_once('header_prac.php');



echo "<pre>";
// print_r($_SESSION["productsc"]);
// print_r($_SESSION["productsc"][]);
echo "</pre>";
?>

<?php





if(isset($_REQUEST["add"]))
{
    echo "<pre>";
    // print_r($_REQUEST);
    
    
    // echo "inside if";
    
    $_SESSION["cartdata"][] = ["price"=>$_REQUEST['price']];
}
echo "<pre>";
// print_r($_SESSION['cartdata']);
echo "</pre>";


?>

<h1>Home page</h1>

<section>
<?php

$productsc = $_SESSION["productsc"];
foreach($productsc as $product)
{
    // print_r($product);
 ?>
 <center>
    <form action="" method="post">

        <div class="card mt-4 mb-4" style="width: 18rem;">
            <img src="<?php echo $product['image'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <input type="hidden" name="price" value="<?php echo $product['price']?>">
                <h4 class="card-text"><?php echo $product['price']?></h4>
                <button class="btn btn-success " name="add">Add to cart</button>
            </div>
        </div>
        
    </form>
</center>
<?php } ?>    
</section>


<?php
require_once('footer_prac.php');
?>