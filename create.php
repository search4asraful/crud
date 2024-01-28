<?php
  include 'config.php';

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // SQL Query

    $sql = "INSERT INTO users (name, phone, email) values ('$name', '$phone', '$email')";

    $result = mysqli_query($connect, $sql);

    if($result){
      header('location:index.php');
    }else{
      die(mysqli_error($connect));
    }
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Crud Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <div class="container col-md-12 mt-5">
      <div class="col-md-3"></div>
      <div class="card mx-auto col-md-6">
          <div class="card-header">
            <h3>Create user</h3>
            <a href="index.php" class="btn btn-success float-end" style="margin-top: -40px;">Go list</a>
          </div>
          <div class="card-body">
          <form action="#" method="POST">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Enter full name" required>
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="tel" name="phone" class="form-control" id="phone" placeholder="Enter phone number" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter email address" required>
          </div>
          <button type="submit" name="submit" class="btn btn-success">Create</button>
        </form>
          </div>
        </div>
      <div class="col-md-3"></div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>