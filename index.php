<?php
session_start();
include("connection.php");

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];

    $result=$con->query("select * from users where username='$username' AND password='$password'");
    if($result->fetch_assoc()){
        $_SESSION['username'] = $username;
        header("location:home.php");
    }

    else{
        echo"
<center><div class=\"alert alert-dark alert-dismissible fade show\" role=\"alert\" style=\"width:100%; margin-bottom:-1%;\">
<p class=\"text-dark\" style=\"font-size:1.2rem; font-style:italic;\">You Have Entered! Invalid Username or Password.</p>
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AC - Blog - User Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
</head>
<body class="bg-dark">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center mt-5">
                        <div class="col-lg-5 mt-3">
                            <div class="card shadow-lg border-0 rounded-lg mt-4">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-1"><a href="./" style="color:black; font-size: 2rem; text-decoration: none; font-weight:630;">[AC - Blog]<br> User - Login</a>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputText" name="username" type="text" placeholder="username" required />
                                            <label for="">Username:</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" name="password" type="password" placeholder="password" required />
                                            <label for="">Password:</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit" class="btn w-100 p-2 text-light btn btn-dark" name="submit">Login</button><br>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-2 mb-0">
                                            <span class="w-100">Don't have an account?&nbsp;<a href="./signup.php" class="text-dark">Create an account.</a></span>
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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>