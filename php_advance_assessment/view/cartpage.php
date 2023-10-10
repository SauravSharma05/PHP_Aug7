<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>ITEMS PRICE<h3> <br>
</body>
</html>


<?php 

if(isset($cartdata))
          {


          foreach($cartdata as $value)
          { ?>
          <tr>
            <td><?php echo $value->price ?></td><br>
          
          </tr>
          <?php
        } }