<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <title>Register Page</title>
</head>
<body>
    
</body>
</html>

<form action="" method="post">
<div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" name="name" style="width: 500px;">
  </div>
  <div class="mb-3">
    <label  class="form-label">Contact </label>
    <input type="text" class="form-control" name="contact" style="width: 500px;">
  </div>
  <div class="mb-3">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" name="email" style="width: 500px;">
  </div>

  <label  class="form-label">Gender</label>

  <div class="form-check form-check-inline">
  <input type="radio" name="gender" value="male" id="male" />
              <label for="male">Male</label>
              <input type="radio" name="gender" value="female" id="female" />
              <label for="female">Female</label>
</div>





  <div class="mb-3">
    <label  class="form-label">City</label>
    <input type="text" class="form-control" name="city" style="width: 500px;">
  </div>
  <div class="mb-3">
    <label  class="form-label">State</label>
    <input type="text" class="form-control" name="state" style="width: 500px;">
  </div>

  <button type="submit" class="btn btn-primary" name="reg">Register</button> 
</form>

<!-- <?php 

if(isset($_REQUEST['reg']))
{
  header("location:view/login.php");

}
?> -->