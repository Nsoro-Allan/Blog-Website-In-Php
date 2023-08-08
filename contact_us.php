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


<div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center mt-2 mb-2">
                        <div class="col-lg-9 mt-3">
                            <div class="card shadow-lg border-0 rounded-lg mt-2">
                                <div class="card-header">
                                    <h3 class="font-weight-light my-1"><a href="./" style="color:black; font-size: 2.3rem; text-decoration: none; font-weight:630;"><i class="fa-solid fa-phone"></i> Contact Us</a>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputText" name="username" type="text" placeholder="username" required />
                                            <label for="">Username:</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputTel" name="tel" type="tel" placeholder="Tel" required />
                                            <label for="">Tel:</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputText" name="subject" type="text" placeholder="Subject" required />
                                            <label for="">Subject:</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <textarea name="message" class="form-control h-100" placeholder="Message"></textarea>
                                            <label for="">Message:</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit" class="btn w-20 p-2 text-light btn btn-dark" style="font-size:1rem;" name="submit"><i class="fa-solid fa-phone"></i> Contact Us</button><br>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-2 mb-0">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

</div>

<?php
include("footer.php");
?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
<script src="js/main.js"></script>
</body>
</html>