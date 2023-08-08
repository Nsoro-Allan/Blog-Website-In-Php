<?php
include("connection.php");
include("total_count.php");
session_start();

// Check if the user is logged in
if (!isset($_SESSION['admin_username'])) {
  // User is not logged in, redirect to login page
    header('Location: index.php?msg=Login First?.');
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AC - Blog - Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <!-- <link rel="stylesheet" href="css/sidebars.css"> -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

</head>
<body>
<?php
include("admin_sidebar.php");
?>

<!-- All Content Starts Here -->

<div class="container-fluid" style="margin-top: -44.6%; margin-bottom: 3%;">
  <div class="row">
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fas fa-tachometer"></i> <b>Dashboard</b></h1>
      </div>

    <div class="container">
  <div class="row">
    <div class="col-xl-3 col-md-6 ms-5">
      <div class="card bg-dark text-white mb-4 mx-3" style="width:105%; border-radius:8px;">
        <div class="card-body text-center"><i class="fa-solid fa-users" style="font-size:2.5rem;"></i><br><br> <a href="./user_accounts.php" class="nav-link text-light" style="text-decoration:none;">Total Users: <br><?php echo $total_accounts;?></a>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 ms-5">
      <div class="card bg-dark text-white mb-4 mx-3" style="width:105%; border-radius:8px;">
        <div class="card-body text-center"><i class="fa-solid fa-file-zipper" style="font-size:2.5rem;"></i><br><br> <a href="./admin_blogs.php" class="nav-link text-light" style="text-decoration:none;">Total Blogs: <br><?php echo $total_blogs;?></a>
        </div>
      </div>
    </div>

    <div class="col-xl-3 col-md-6 ms-5">
      <div class="card bg-dark text-white mb-4 mx-3" style="width:105%; border-radius:8px;">
        <div class="card-body text-center"><i class="fa-solid fa-phone" style="font-size:2.5rem;"></i><br><br> <a href="./user_contacts.php" class="nav-link text-light" style="text-decoration:none;">Total Contacts: <br><?php echo $total_contacts;?></a>
        </div>
      </div>
    </div>
  </div>
</div>

    </main>
  </div>
</div>


<!-- All Content ends Here -->
 

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<script src="Js/sidebars.js"></script>
</body>
</html>