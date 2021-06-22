<?php
$orderItem = @count($_SESSION['cart']);
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary1 fixed-top">
                <div class="container">
                  <a class="navbar-brand" href="index.php"><img src="image/Random Logo.png" id="logo"></a>
                  <!-- <input type="text" placeholder="Search" id="search"> -->
                  <?php
                        if(isset($_SESSION['email_cust'])){
                          ?>
                  <a class="nav-link ms-6" aria-current="page" href="cart.php"><img src="image/shopping-cart 1.svg" class="navIcon"><span class="badge bg-light text-dark"><?= $orderItem ?></span></a>
                  <?php
                        }
                          ?>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="produk.php">Product</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="shipping.php">Order</a>
                      </li>
                      <li class="nav-item dropdown">
                        <?php
                        if(isset($_SESSION['email_cust'])){
                          ?>
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <img src="image/user 1.svg" class="navIcon">
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <li class="dropdown-item"><?= $_SESSION['username'] ?></li>
                          <li><a class="dropdown-item" href="logout-cust.php">Logout</a></li>
                        </ul>
                        <?php
                        }else{
                          ?>
                          <a class="nav-link h5 text-light" href="login.php">Login</a>
                          <?php
                        }
                        ?>

                      </li>
                    </ul>
                  </div>
                </div>
            </nav>