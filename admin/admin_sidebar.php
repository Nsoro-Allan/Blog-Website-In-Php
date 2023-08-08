<div class="d-flex flex-column p-3 text-bg-dark position-sticky" style="width: 220px; height: 100vh;">
  <a href="./dashboard.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
    <span class="fs-4" style="font-weight:bold; font-size: 2rem;">&nbsp;&nbsp; <i class="fa-solid fa-file-zipper"></i>&nbsp; <i>AC - Blog</i></span>
  </a>
  <hr>
  <ul class="nav nav-pills flex-column mb-auto">
    <li>
      <a href="./dashboard.php" class="nav-link text-white mt-3">
        <i class="fas fa-tachometer"></i>&nbsp;&nbsp;
        Dashboard
      </a>
    </li>
    <li>
      <a href="./user_accounts.php" class="nav-link text-white mt-4">
        <i class="fa-solid fa-users"></i>&nbsp;&nbsp;
        User Accounts
      </a>
    </li>
    <li>
      <a href="./user_contacts.php" class="nav-link text-white mt-4">
        <i class="fa-solid fa-phone"></i>&nbsp;&nbsp;
        User Contacts
      </a>
    </li>
    <li>
      <a href="./admin_blogs.php" class="nav-link text-white mt-4">
        <i class="fa-solid fa-file-zipper"></i>&nbsp;&nbsp;
        My Blogs
      </a>
    </li>
    <li>
      <a href="./add_blog.php" class="nav-link text-white mt-4">
        <i class="fa-solid fa-file-circle-plus"></i>&nbsp;&nbsp;
        Add a Blog
      </a>
    </li>
    <li>
      <a href="./account_settings.php" class="nav-link text-white mt-4">
        <i class="fa-solid fa-gear"></i>&nbsp;&nbsp;
        Account Settings
      </a>
    </li>
    <style>
     .nav-link:hover {
        box-shadow: 1px 1px 1px 2px #fff;
        border-radius: 1px 10px 1px 10px;
      }
    </style>
  </ul>
  <hr>&nbsp;
  <?php
  if (isset($_SESSION['admin_username'])) {
    echo'
    <div class="dropdown mt-1">
      <a href="./" style="text-decoration: none; font-weight: bold;" class="dropdown-toggle text-light text-capitalize" data-bs-toggle="dropdown">
        <strong><i><img src="img/user_img_64.png" width="32" height="32" class="rounded-circle me-2">'. $_SESSION['admin_username']. '</i></strong>
      </a>
      <div class="dropdown-menu">
        <li><a class="dropdown-item bg-light text-dark" href="./admin_logout.php"><i class="fa-solid fa-right-to-bracket"></i> Logout</a></li>
      </div>
    </div>
    ';
  }
 ?>
</div>