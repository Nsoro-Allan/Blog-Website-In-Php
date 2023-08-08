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



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>AC - Blog - Home</title>
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

</style>

<div class="container-fluid-xxl p-0">
    
<?php
include("header.php");
?>

<!-- Card Container Starts here -->
<div class="container">

    <div class="row">
      <div class="col-md-12">

<!-- blog Starts here -->
<?php
include("connection.php");
$sql = "SELECT * FROM blog";
$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $blog_title = $row['blog_title'];
    $blog_author = $row['blog_author'];
    $blog_image = $row['blog_image'];
    $blog_date = $row['blog_date'];
    $blog_description = $row['blog_description'];
    
    echo'
    <div class="card mt-5 mb-2">
    <div class="card-header">
    <div class="d-none">' . $id . '.</div>
      <h5 class="card-title" style="font-size:1.8rem;"><b>' . $blog_title . '</b></h5>
    </div>
    <div class="card-body">
      <div class="form-group">

        <label for="" style="font-weight:700; margin-bottom:-4%;">Published by: &nbsp;<i class="fa fa-user"></i> <b style="font-weight:600;">' . $blog_author . '</b>
        &nbsp;&nbsp;Published on: &nbsp;<i class="fa fa-calendar"></i> <b style="font-weight:600;">' . $blog_date . ' 
        </label><br><hr>    

        <img src="img/' . $blog_image . '" class="ratio ratio-16x9" style="width:800px; height:500px; border-radius:22px;"><br><br>

        <p style="font-weight:400;">' . $blog_description . '<p>

        
      </div>

      <hr>

      <div class="socal-media">
      <a href="mailto:allancorp250@gmail.com" style="margin:1%; color:black; font-size:1.3rem;"><i class="fa-brands fa-google"></i></a>

      <a href="https://www.facebook.com/nsoro.allan.1/" style="margin:1%; color:black; font-size:1.3rem;"><i class="fa-brands fa-facebook"></i></a>

      <a href="https://www.instagram.com/allancorp250/" style="margin:1%; color:black; font-size:1.3rem;"><i class="fa-brands fa-square-instagram"></i></a>

      <a href="https://www.linkedin.com/in/nsoro-allan-95192a283/" style="margin:1%; color:black; font-size:1.3rem;"><i class="fa-brands fa-linkedin"></i></a>

      <a href="https://github.com/allancorp23" style="margin:1%; color:black; font-size:1.3rem;"><i class="fa-brands fa-github"></i></a>
      </div>
      

    </div>
  </div>
    ';

  
  }

?>
<!-- blog Ends here -->

      </div>
    </div>
</div>

<!-- Card Container Ends here -->

</div>

<?php
include("footer.php");
?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

</body>
</html>



