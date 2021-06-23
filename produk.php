<?php
// include_once "../master/index.php";

require_once "autoload.php";
require_once $BASE_URL . "/models/Inventaris.php";
require_once $BASE_URL . "/models/Kategori.php";
require_once $BASE_URL . "/models/Brand.php";
require_once $BASE_URL . "/models/Store.php";
require_once $BASE_URL . "/models/Vendor.php";
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Random Stuff</title>
        <link rel="stylesheet" href="bootstrap/css2/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/css2/bootstrap-grid.css">
        <link rel="stylesheet" href="bootstrap/css2/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap/css2/templatemo.css">
        <link rel="stylesheet" href="bootstrap/css2/custom.css">
        <link rel="stylesheet" href="bootstrap/css2/fontawesome.min.css">
        <!-- <link href='//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css' rel='stylesheet'/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"> -->
    </head>
    <body>
        <div class="wrapper">
        <?php include "header.php" ?>

           <div class="container py-5 mt-5">
             <div class="row">
              <div class="col-lg-3">
                <!-- <h1 class="h2 pb-4">Categories</h1> -->
                <?php
                include "sidebar.php";
                ?>
              </div>

              <div class="col-lg-9">
                    <div class="row">
                        <?php
                        foreach($inventaris->withAll() as $data){
                      ?>
                    <div class="col-md-4">
                        <div class="card mb-4 product-wap rounded-0" style="border-radius: 15px !important;">
                            <div class="card rounded-0" style="border-radius: 15px !important;">
                                <img class="card-img rounded-0 img-fluid-2" style="border-radius: 15px !important;" src="images/<?= $data['foto_prod'] ?>">
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center" style="border-radius: 15px !important;">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white mt-2" href="detail.php?id=<?php echo $data['id_inventaris'] ?>"><i class="far fa-eye"></i></a></li>
                                    </ul>
                                </div>
                              </div>
                              <div class="card-body">
                                <a href="shop-single.html" class="h3 text-decoration-none"><?= $data['nama_prod'] ?></a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li><p class="fw-lighter">Stok: <?= $data['stok'] ?></p></li>
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <p class="text-center mb-0 fw-bold">Rp<?= number_format($data['harga'],2,",",".") ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                  }
                ?>
              </div>
            </div>
           </div>
        </div>

        <?php include "footer.php" ?>
        <script src="bootstrap/js/jquery-1.11.0.min.js"></script>
        <script src="bootstrap/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="bootstrap/js/templatemo.js"></script>
        <script src="bootstrap/js/custom.js"></script>
        <script src="https://kit.fontawesome.com/b99c03f2e4.js" crossorigin="anonymous"></script>
        
    </body>
</html>