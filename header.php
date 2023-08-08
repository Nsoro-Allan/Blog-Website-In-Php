<!-- Header Start -->
<div class="container-fluid-xxl px-0">
    <div class="row gx-0">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark w-100 p-3">
                <a href="./" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 text-light text-capitalize" style="font-size: 1.4rem;"><i>AC - Blog</i></h1>
                </a>
                <button type="button" class="btn btn-dark navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <a href="./home.php" class="nav-item nav-link"><h1 class="m-0 text-light text-capitalize ms-5" style="font-size: 1.7rem;">&nbsp;<img src="./img/icon.png" style="width:20%;"> <i>AC - Blog</i></h1></a>

                    <div class="navbar-nav mr-auto py-0 ms-5" style="font-size: 1.1rem;">

                    <?php
                    include("space.php");
                    ?>
                        <a href="./home.php" class="nav-item nav-link ms-5 active"><i class="fas fa-home-alt"></i> Home</a>

                        <a href="./about.php" class="nav-item nav-link ms-5 active text-ligt"><i class="fa-solid fa-address-card"></i> About us</a>

                        <a href="./contact_us.php" class="nav-item nav-link ms-5 active text-ligt"><i class="fas fa-phone"></i> Contact us</a>


                        <style>
                          .active:hover{
                            box-shadow:1px 1px 1px 2px #fff;
                            border-radius: 1px 10px 1px 10px;
                          }
                        </style>
                        <!-- login section starts -->
                        <?php
if (isset($_SESSION['username'])) {
    echo'
  <div class="dropdown mt-2 ms-5">
  <a href="#" style="text-decoration: none; font-weight: bold;" class="dropdown-toggle text-light text-capitalize" data-bs-toggle="dropdown"><i class="fas fa-user-alt"></i>  ' . $_SESSION['username'] . '</a>
  <div class="dropdown-menu">

   <!-- <li><a class="dropdown-item bg-light text-dark" href="./manage_account.php?user_id=<?php echo $row["user_id"]?>"><i class="fa-solid fa-gear"></i> Manage Account</a></li> -->

    <li><a class="dropdown-item bg-light text-dark" href="./logout.php"><i class="fa-solid fa-right-to-bracket"></i> Logout</a></li>
  </div>
</div>
    ';


} else {
    echo '<a href="./login.php" class="nav-item nav-link active float-left text-light">Login</a>';
}
?>

                        <!-- login section ends -->

                    </div>
                </div>
            </nav>
        </div>
    </div>
 </div>
 <!-- Header End -->