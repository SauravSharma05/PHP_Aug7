<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only"></span></a>
      <a class="nav-item nav-link" href="register">Register</a>
      <a class="nav-item nav-link" href="login">Login</a>
      <a class="nav-item nav-link" href="cartpage">Cart Page</a>

    </div>
  </div>
</nav>
<br><br>
<h1>PRODUCTS list</h1>

<br><br>        
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      
    </tr>
  </thead>
          <tbody>
          
          <?php
          if(isset($products))
          {


          foreach($products as $value)
          { ?>
          <tr>
            <td><?php echo $value->name ?></td>
            <td><?php echo $value->price ?></td>
            <td><?php echo $value->description ?></td>
            <td><img src="<?php echo $value->image ?>" alt="No Product Image Found" height="70" width="70px"></td>
            <form method="post">

                <td><button type="submit" class="btn btn-primary" name="addc" value="<?php echo $value->price ?>">Add to cart</button> </td>
            </form>
          </tr>
          <?php } 
                    }
                    else 
                    {
                      echo "<tr>
                      <th style='text-align:center;' colspan=8>No Data Found</th>
                      </tr>";
                    }
 ?>
        </tbody>
    </table>
</body>
</html>


