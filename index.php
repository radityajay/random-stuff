<?php
    require_once "autoload.php";
    require_once $BASE_URL . "/models/Inventaris.php";
    require_once $BASE_URL . "/models/Store.php";

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
    </head>
    <body>
        <div class="wrapper">
            <?php include "header.php" ?>

            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image/banner-01.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="image/banner-02.png" class="d-block w-100" alt="...">
                    </div>
                    <!-- <div class="carousel-item">
                        <img src="images/banner-03.png" class="d-block w-100" alt="...">
                    </div> -->
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
          </div>
          <section class="container mt-5">
              <h3 class="text-align-center">Top 20 Product</h3>
              <div class="row pt-3 pb-5">
                <!--Start Controls-->
                <div class="col-1 align-self-center">
                    <a href="#multi-item-example" role="button" data-bs-slide="prev">
                        <!-- <i class="text-dark fas fa-chevron-left"></i> -->
                        <span class="sr-only">Previous</span>
                    </a>
                </div>
                <!--End Controls-->
                <!--Start Carousel Wrapper-->
                <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                    <!--Start Slides-->
                    <div class="carousel-inner product-links-wap" role="listbox">

                        <!--First slide-->
                        
                        <div class="carousel-item active">
                            <div class="row">
                                <?php
                                $number = 1;
                                foreach ($inventaris->topProd() as $data) {
                                ?>
                                <div class="col-md-3">
                                    <div class="card mb-4 product-wap rounded-0" style="border-radius: 15px !important;">
                                        <div class="card rounded-0" style="border-radius: 15px !important;">
                                            <img class="card-img rounded-0 img-fluid-2" style="border-radius: 15px !important;" src="images/<?= $data['foto_prod'] ?>">
                                            <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center" style="border-radius: 15px !important;">
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <h4 style="font-size: 1em" class="badge bg-dark float-end"><?= $number++ ?></h4><br>
                                            <a href="" class="h3 text-decoration-none"><?= $data['nama_prod'] ?></a>
                                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                                <li class="pt-2">
                                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                                </li>
                                            </ul>
                                            <p class="text-center mb-0 fw-bold">Rp<?= number_format($data['harga'],2,",",".") ?></p>
                                            <br><p class="text-left mb-0 ">Dengan Penjualan :<?= $data['jumlahni'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                                <!-- <div class="col-3">
                                    <a href="#">
                                        <img class="card-img img-fluid" src="images/product_single_02.jpg" alt="Product Image 2">
                                    </a>2
                                </div>
                                <div class="col-3">
                                    <a href="#">
                                        <img class="card-img img-fluid" src="images/product_single_03.jpg" alt="Product Image 3">
                                    </a>3
                                </div>
                                <div class="col-3">
                                  <a href="#">
                                      <img class="card-img img-fluid" src="images/product_single_03.jpg" alt="Product Image 4">
                                  </a>4
                              </div> -->
                            </div>
                        </div>
                        
                        <!--/.First slide-->
                    <!--/.fifth slide-->
                    </div>
                    <!--End Slides-->
                </div>
                <!--End Carousel Wrapper-->
                <!--Start Controls-->
                <div class="col-1 align-self-center">
                    <a href="#multi-item-example" role="button" data-bs-slide="next">
                        <!-- <i class="text-dark fas fa-chevron-right"></i> -->
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!--End Controls-->
            </div>
            </section>

            <section class="container mt-5">
              <h3 class="text-align-center">Top 5 Store</h3>
              <div class="row pt-3 pb-5">
                <!--Start Controls-->
                <div class="col-1 align-self-center">
                    <a href="#multi-item-example" role="button" data-bs-slide="prev">
                        <!-- <i class="text-dark fas fa-chevron-left"></i> -->
                        <span class="sr-only">Previous</span>
                    </a>
                </div>
                <!--End Controls-->
                <!--Start Carousel Wrapper-->
                <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                    <!--Start Slides-->
                    <div class="carousel-inner product-links-wap" role="listbox">

                        <!--First slide-->
                        
                        <div class="carousel-item active">
                            <div class="row ms-5">
                                <?php
                                $number = 1;
                                foreach ($inventaris->topStore() as $data) {
                                ?>
                                <div class="col-3 ms-auto me-auto">
                                    <div class="card mb-4 product-wap rounded-0" style="border-radius: 15px !important;">
                                        <div class="card rounded-0" style="border-radius: 15px !important;">
                                        </div>
                                        <div class="card-body">
                                            <h4 style="font-size: 0.8em" class="badge bg-dark float-end"><?= $number++ ?></h4><br>
                                            <a href="detail-home.php?id=<?php echo $data['id_inventaris'] ?>" class="h3 text-decoration-none"><?= $data['nama_store'] ?></a>
                                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                                <!-- <li class="pt-2">
                                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                                </li> -->
                                            </ul>
                                            <br><p class="text-left mb-0 ">Dengan Penjualan :<?= $data['jumlah'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                                <!-- <div class="col-3">
                                    <a href="#">
                                        <img class="card-img img-fluid" src="images/product_single_02.jpg" alt="Product Image 2">
                                    </a>2
                                </div>
                                <div class="col-3">
                                    <a href="#">
                                        <img class="card-img img-fluid" src="images/product_single_03.jpg" alt="Product Image 3">
                                    </a>3
                                </div>
                                <div class="col-3">
                                  <a href="#">
                                      <img class="card-img img-fluid" src="images/product_single_03.jpg" alt="Product Image 4">
                                  </a>4
                              </div> -->
                            </div>
                        </div>
                        
                        <!--/.First slide-->
                    <!--/.fifth slide-->
                    </div>
                    <!--End Slides-->
                </div>
                <!--End Carousel Wrapper-->
                <!--Start Controls-->
                <div class="col-1 align-self-center">
                    <a href="#multi-item-example" role="button" data-bs-slide="next">
                        <!-- <i class="text-dark fas fa-chevron-right"></i> -->
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!--End Controls-->
            </div>
            </section>
            <section class="container mt-5">
              <h3 class="text-align-center">Top 3 Kategori</h3>
              <div class="row pt-3 pb-5">
                <!--Start Controls-->
                <div class="col-1 align-self-center">
                    <a href="#multi-item-example" role="button" data-bs-slide="prev">
                        <!-- <i class="text-dark fas fa-chevron-left"></i> -->
                        <span class="sr-only">Previous</span>
                    </a>
                </div>
                <!--End Controls-->
                <!--Start Carousel Wrapper-->
                <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                    <!--Start Slides-->
                    <div class="carousel-inner product-links-wap" role="listbox">

                        <!--First slide-->
                        
                        <div class="carousel-item active">
                            <div class="row ms-5">
                                <?php
                                $number = 1;
                                foreach ($inventaris->topKategori() as $data) {
                                ?>
                                <div class="col-4">
                                    <div class="card mb-4 product-wap rounded-0" style="border-radius: 15px !important;">
                                        <div class="card rounded-0" style="border-radius: 15px !important;">
                                        </div>
                                        <div class="card-body">
                                            <h4 style="font-size: 0.8em" class="badge bg-dark float-end"><?= $number++ ?></h4><br>
                                            <a href="detail-home.php?id=<?php echo $data['id_inventaris'] ?>" class="h3 text-decoration-none"><?= $data['nama_kategori'] ?></a>
                                            <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                                <!-- <li class="pt-2">
                                                    <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                                    <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                                    <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                                    <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                                    <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                                </li> -->
                                            </ul>
                                            <br><p class="text-left mb-0 ">Dengan Penjualan :<?= $data['jumlahtot'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                                <!-- <div class="col-3">
                                    <a href="#">
                                        <img class="card-img img-fluid" src="images/product_single_02.jpg" alt="Product Image 2">
                                    </a>2
                                </div>
                                <div class="col-3">
                                    <a href="#">
                                        <img class="card-img img-fluid" src="images/product_single_03.jpg" alt="Product Image 3">
                                    </a>3
                                </div>
                                <div class="col-3">
                                  <a href="#">
                                      <img class="card-img img-fluid" src="images/product_single_03.jpg" alt="Product Image 4">
                                  </a>4
                              </div> -->
                            </div>
                        </div>
                        
                        <!--/.First slide-->
                    <!--/.fifth slide-->
                    </div>
                    <!--End Slides-->
                </div>
                <!--End Carousel Wrapper-->
                <!--Start Controls-->
                <div class="col-1 align-self-center">
                    <a href="#multi-item-example" role="button" data-bs-slide="next">
                        <!-- <i class="text-dark fas fa-chevron-right"></i> -->
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!--End Controls-->
            </div>
            </section>
            <?php include "footer.php"; ?>

            <script src="bootstrap/js/jquery-1.11.0.min.js"></script>
            <script src="bootstrap/js/jquery-migrate-1.2.1.min.js"></script>
            <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="bootstrap/js/templatemo.js"></script>
            <script src="bootstrap/js/custom.js"></script>
            <script src="https://kit.fontawesome.com/b99c03f2e4.js" crossorigin="anonymous"></script>
        </div>
    </body>
</html>