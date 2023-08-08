<?php
session_start();
include("connection.php");

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $tel=$_POST['tel'];

    $result=$con->query("insert into users values('','$username','$password','$email','$gender','$tel')");

    if($result){
        $_SESSION['username'] = $username;
        header("location:home.php");
    }

    else{
        echo"
<center><div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\" style=\"width:100%; margin-bottom:-1%;\">
<p class=\"text-dark\" style=\"font-size:1.2rem; font-style:italic;\">Failed to create an account.</p>
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
    <title>AC - Blog - User Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
</head>
<body class="bg-dark">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 mt-2">
                            <div class="card shadow-lg border-0 rounded-lg">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-1"><a href="./" style="color:black; font-size: 2rem; text-decoration: none; font-weight:610;">[AC - Blog]<br> User - Signup</a>
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputText" name="username" type="text" placeholder="Username:" required />
                                            <label for="">Username:</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" name="password" type="password" placeholder="Password:" required />
                                            <label for="">Password:</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" name="email" type="email" placeholder="Email:" required />
                                            <label for="">Email:</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <select name="gender" class="form-control w-100 p-3">
                                                <option>Select your gender:</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>

                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputTel" name="tel" type="tel" placeholder="Tel:" required />
                                            <label for="">Tel:</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit" class="btn w-100 p-2 text-light btn btn-dark" name="submit">Signup</button><br>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-2 mb-0">
                                            <span class="w-100">Already have an account?&nbsp;<a href="./index.php" class="text-dark">Login.</a></span>
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