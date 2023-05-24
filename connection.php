<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</head>
<body>
<?php
    //Creating Connection With Database
    // $server = "localhost";
    // $username = "root";
    // $password = "";
    // $database = "project1";

    // $con = mysqli_connect($server,$username,$password,$database);

    // if($con === false)
    // {
    //     die('Connection cannot be established'. mysqli_connect_error());
    // }

    // else
    // {
    //     echo "Connection Established Successfully";
    // }
    include('config.php');
    

?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">User ID</th>
      <th scope="col">Photo</th>
      <th scope="col">Username</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Gender</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $qry = "SELECT * FROM users";

        //execute query
        if($result = mysqli_query($con,$qry))
        {
            while($row = mysqli_fetch_assoc($result))
            {
    ?>
                <tr>
                    <td><?php echo $row['user_id']; ?></td>
                    
                    <td> <img src="<?php echo $row['photo']; ?>" alt="user's phpto" style="height:100px; width:85px;"></td>
                    
                    <td><?php echo $row['username']; ?></td>
                    
                    <td><?php echo $row['firstname']; ?></td>
                    
                    <td><?php echo $row['lastname']; ?></td>
                    
                    <td><?php echo $row['phone']; ?></td>
                    
                    <td><?php echo $row['email']; ?></td>
                    
                    <td><?php 
                        if($row['gender'] = 1){
                            echo 'Male';
                        }
                        else {
                            echo 'Female';
                        }     ?>
                    </td>

                    <td><?php 
                        if($row['status'] = 1){
                            echo 'Active';
                        }
                        else {
                            echo 'Not Active';
                        }     ?>
                    </td>
                    <td>
														<button type="button" class="btn btn-info">Edit</button>
														<button type="button" class="btn btn-danger">Delete</button>
										</td>


    <?php
            }
        }
    ?>
    </tr>
  </tbody>
</table>

<form action="insert_data.php" method="POST" enctype="multipart/form-data">
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">username</label>
        <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="username" placeholder="Enter Username">
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Firstname</label>
        <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="firstname" placeholder="Enter Firstname">
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Lastname</label>
        <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="lastname" placeholder="Enter Lastname">
    </div>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Phone</label>
        <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="phone" placeholder="Enter Phone No">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email">
    </div>
  </div>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="gridRadios1" value="1" checked>
          <label class="form-check-label" for="gridRadios1">
            Male
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gender" id="gridRadios2" value="0">
          <label class="form-check-label" for="gridRadios2">
            Female
          </label>
        </div>
        <div class="mb-3">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
      </div>
      </div>
    </div>
  </fieldset>
  <div class="form-group row">
    <div class="col-sm-10">
        <input type="submit" class="btn btn-primary" name="submit" value="Submit">
    </div>
  </div>
</form>
</body>
</html>