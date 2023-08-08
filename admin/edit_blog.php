<?php
include("connection.php");
session_start();

$id = $_GET['id'];

if(isset($_POST['submit'])){
$blog_title = mysqli_real_escape_string($con, $_POST['blog_title']);
$blog_author = mysqli_real_escape_string($con, $_POST['blog_author']);
$blog_image = mysqli_real_escape_string($con, $_POST['blog_image']); 
$blog_date = mysqli_real_escape_string($con, $_POST['blog_date']);
$blog_description = mysqli_real_escape_string($con, $_POST['blog_description']);    


$sql=$con->query("UPDATE `blog` SET `blog_title`='$blog_title',`blog_author`='$blog_author',`blog_image`='$blog_image',`blog_date`='$blog_date',`blog_description`='$blog_description' WHERE id=$id");



if($sql) {
    header("Location: admin_blogs.php?Data Updated");
}
else {
    echo "Failed: " . mysqli_error($con);
}
}

// Check if the user is logged in
if (!isset($_SESSION['admin_username'])) {
  // User is not logged in, redirect to login page
    header('Location: index.php?msg=Login First?.');
    exit;
}
?>

<?php
    include("connection.php");
   $sql = "SELECT * FROM `blog` WHERE id = $id LIMIT 1";
   $result = mysqli_query($con, $sql);
   $row = mysqli_fetch_assoc($result);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AC - Blog - Edit Blog</title>
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

<div class="container-fluid" style="margin-top: -44.8%; margin-bottom: 3%;">
  <div class="row">
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"><i class="fa-solid fa-file-zipper"></i> <b>Edit Blog</b></h1>
      </div>
      <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                      <div class="card mb-5">
                              <div class="card-header">
                              <i class="fa-solid fa-file-circle-plus"></i>
                                Add a Blog.
                              </div>
                          <div class="card-body">
                            <form action="" method="post">
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputText" type="text" value="<?php echo $row['id']?>" readonly/>
                                                <label for="inputText">Blog Id:</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputText" name="blog_title" type="text" value="<?php echo $row['blog_title']?>" required/>
                                                <label for="inputText">Blog Title:</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputText" name="blog_author" type="text" value="<?php echo $row['blog_author']?>" required/>
                                                <label for="inputText">Blog Author:</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                              <input class="form-control" id="inputText" name="blog_image" type="text" value="<?php echo $row['blog_image']?>"/>
                                              <label for="inputText">Blog Image:</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputText" name="blog_date" type="text" value="<?php echo $row['blog_date']?>" required/>
                                                <label for="inputText">Blog Date:</label>
                                            </div>

                                            <div class="form-floating mb-3">
                                            <textarea name="blog_description" class="form-control" style="height:100%;" required><?php echo $row['blog_description']?></textarea>
                                                <label for="inputText">Blog Description:</label>
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
    </main>
  </div>
</div>


<!-- All Content ends Here -->


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<script src="Js/sidebars.js"></script>
</body>
</html>