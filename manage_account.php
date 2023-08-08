<?php
include("connection.php");
session_start();


// Check if the user is logged in
if (!isset($_SESSION['username'])) {
  // User is not logged in, redirect to login page
    header('Location: index.php?msg=Login First?.');
    exit;
}
?>

<?php
if(isset($_POST['submit'])){
    $username = $_GET['username'];

    $username = $_POST['username'];
    $password = $_POST['password'];


$sql = "UPDATE `users` SET `username`='$username',`password`='$password' WHERE user_id='$user_id'";

$result = mysqli_query($con, $sql);

if($result) {
    echo
    '<script>alert("You have successfully changed Your user account info!!!")</script>
    ';
}
else {
    echo "Failed: " . mysqli_error($con);
}
}
?>

<?php
include("connection.php");
$username = $_GET['username'];
$sql = "SELECT * FROM `users` WHERE user_id='$user_id'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AC - Blog - Manage Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="css/sidebars.css"> -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

</head>
<body>

<?php
include("./header.php");
?>

<!-- All Content Starts Here -->

<div class="container-fluid" style="margin-left:-5%;">
  <div class="row">
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="mt-3 mb-3 ms-3">
        <h1 class="h2"><i class="fa-solid fa-gear"></i> <b>Manage Account</b></h1>
      </div>

      <!-- account setting content starts here -->

      <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <div class="card mb-3">
                            <div class="card-header">
                            <i class="fa-solid fa-gear"></i>
                                View your user account info
                            </div>
                            <div class="card-body">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" value="<?php echo $row['username']?>" readonly>
                                                <label>Current User Username</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" type="text" value="<?php echo $row['password']?>" readonly>
                                                <label>Current User Password</label>
                                            </div>             
                            </div>
                        </div>

                      <div class="card mb-5">
                              <div class="card-header">
                              <i class="fa-solid fa-gear"></i>
                                Change your user account info
                              </div>
                          <div class="card-body">
                            <form action="" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputText" name="username" type="text" required/>
                                                <label for="inputText">New User Username</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputText" name="password" type="password" required/>
                                                <label for="inputText">New User Password</label>
                                            </div>

                                            <div class="d-flex align-items-center justify-content-between mt-1 mb-0">
                                            <button type="submit" class="btn btn-dark" name="submit"><i class="fa-solid fa-edit"></i> Update</button>
                                            <a href="dashboard.php" class="btn btn-dark"><i class="fa-solid fa-cancel"></i> Cancel</a>
                                            </div>
                            </form>                
                            </div>
                      </div>

                    </div>
                </main>
    </div>

      <!-- account setting content ends here -->

    </main>
  </div>
</div>


<!-- All Content ends Here -->


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<script src="Js/sidebars.js"></script>
</body>
</html>