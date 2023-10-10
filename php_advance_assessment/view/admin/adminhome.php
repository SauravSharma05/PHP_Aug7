 <?php
// echo "<pre>";
// print_r($fetch);    

?> 



              <table class="table table-dark" style="border: 1px solid black;">
  <thead>
      <tr>
          <th scope="col">Name</th>
          <th scope="col">Contact</th>
          <th scope="col">Email</th>
          <th scope="col">gender</th>
          <th scope="col">city</th>
          <th scope="col">state</th>
          <th scope="col">id</th>
          <th scope="col">roleas</th>
    </tr>
  </thead>
          <tbody>
          
          <?php
          if(isset($fetch))
          {


          foreach($fetch as $value)
          { ?>
          <tr>
              <td><?php echo $value->name ?></td>
              <td><?php echo $value->contact ?></td>
              <td><?php echo $value->email ?></td>
              <td><?php echo $value->gender ?></td>
              <td><?php echo $value->city ?></td>
              <td><?php echo $value->state ?></td>
              <td><?php echo $value->id ?></td>
              <td><?php echo $value->role_as ?></td>
            <td>
              <form action="" method="post">

                <button class="btn-primary btn-sm" name="update_btn" value="<?php echo $value->id; ?>">Update</button>
              </form>
              <form action="" method="post">
                <button type="submit" name="delete_btn" value="<?php echo $value->id ?>" class="mt-2 btn-danger btn-sm">Delete</button>
            </td>
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
<br>
<button name="addproduct" type="submit">ADD PRODUCT</button>


</form>

 