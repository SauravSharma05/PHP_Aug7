<?php
session_start();                
if(isset($_POST['product'])) {
    $products = isset($_SESSION['products']) ? $_SESSION['products'] : array();         //making array using session for taking input from form 
    $products[] = $_POST['product'];
    $_SESSION['products'] = $products;
}

if(isset($_POST['quantity'])) {
    $products = isset($_SESSION['products']) ? $_SESSION['products'] : array();         //storing values of form in products array
    $products[] = $_POST['quantity'];
    $_SESSION['products'] = $products;
}

if(isset($_POST['price'])) {
    $products = isset($_SESSION['products']) ? $_SESSION['products'] : array();
    $products[] = $_POST['price'];
    $_SESSION['products'] = $products;
}

?>

<html>
    <body style="background-color: black; color: white;" >


        <h2>WELCOME TO FRUIT STORE</h2>
        <form name="input" action="index.php" method="post">
        <button name="m" style="background-color: blue; color: white;">Manager</button><button name="c" style="background-color: red; color: white;">Customer</button><br><br>
        
        <?php
        if(isset($_REQUEST['m']))                       //choosing option for manager or customer
        {       
            echo "<br>FRUIT MARKET MANAGER<br><br>";        
            echo "<button name='a'style='background-color: blue; color: white;'>Add</button><button name='v' style='background-color: blue; color: white;'>View</button><button name='u' style='    background-color: blue; color: white;'>Update</button><br><br>";

        }           

        

        else if(isset($_REQUEST['a']))          //taking input in manager section
        {
                
                    echo "<lable>Enter Fruit name : </lable><input type='text' name='product' /><br>";
                    echo "<lable>Enter Qty in kg : </lable><input type='text' name='quantity' /><br>";
                    echo "<lable>Enter Price : </lable><input type='text' name='price' /><br>";
                    echo "<input type='submit' value='Add' /><br><br>";
                    
        }

        else if(isset($_REQUEST['v']))              //viewing the fruit item details
                {   
                    echo "<br>Name : <br>Quantity (kg) : <br>Price : <br>";
                    foreach($_SESSION['products'] as $value)
                    {
                        echo "<pre>";
                        echo $value;
                    }

        }

        else if(isset($_REQUEST['c']))                  //viewing details for customer section
        {
            echo "<h2>PRODUCT DETAILS</h2><br><br>Name : <br>Quantity (kg) : <br>Price : <br>";

            foreach($_SESSION['products'] as $value)
                    {   
                        echo "<pre>";
                        echo $value;
                    }
        }

        else if(isset($_REQUEST['u']))          //updating items in array
        {
            echo "updated...! removed last item";
           array_splice($_SESSION['products'], count($_SESSION['products']) - 3, 3);
            foreach($_SESSION['products'] as $value)
            {   
                echo "<pre>";
                echo $value;
            }
        }

        
       


            
        ?>


        </form> 
    </body>
</html>