<?php
    include("connection.php");
    session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
// User is not logged in, redirect to login page
  header('Location: index.php?msg=Login First?.');
  exit;
}

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $tel=$_POST['tel'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];

    $result=$con->query("insert into contacts values('','$username','$tel','$subject','$message')");

    if($result){
        echo"
        <center><div class=\"alert alert-dark alert-dismissible fade show\" role=\"alert\" style=\"width:100%; margin-bottom:-1%;\">
        <p class=\"text-dark\" style=\"font-size:1.2rem; font-style:italic;\">Messsage Sent Successfully...</p>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div></center>
                  ";
    }

    else{
        echo"
        <center><div class=\"alert alert-dark alert-dismissible fade show\" role=\"alert\" style=\"width:100%; margin-bottom:-1%;\">
        <p class=\"text-dark\" style=\"font-size:1.2rem; font-style:italic;\">Failed to send message...</p>
        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div></center>
                  ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>AC - Blog - Contact Us</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!-- Fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body> 

<div class="container-fluid-xxl p-0">
    
<?php
include("header.php");
?>

 <!-- the about section starts here -->
 <style>
    @media (min-width: 992px) {
  .rounded-lg-3 { border-radius: .3rem; }
}
 </style>
 <div class="container col-xxl-8 px-4">
    <div class="row flex-lg-row-reverse align-items-center g-5 pt-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="img/1.jpg" class="d-block mx-lg-auto img-fluid" width="440" height="500" loading="lazy" style="border-radius:8px;">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">About Us</h1>
        <p class="lead">We are multi-user platform where users can get some project codes or add some of their project codes which means that it is open to every user who has signed up t just login and gain access to their accounts and be able t copy or add their repository codes.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a href="./home.php" class="btn btn-dark p-2 me-md-2">View repositories</a>
          <a href="./add_repository.php" class="btn btn-dark p-2 me-md-2">Add repository</a>
        </div>
      </div>
    </div>
  </div>
 <!-- the about section ends here -->

 

<?php
include("footer.php");
?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>