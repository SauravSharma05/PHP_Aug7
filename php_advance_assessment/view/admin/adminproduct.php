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
            <td><img src="../<?php echo $value->image ?>" alt="No Product Image Found" height="70" width="70px"></td>
            
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