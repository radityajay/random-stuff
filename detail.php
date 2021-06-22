<?php
    require_once "autoload.php";
    require_once $BASE_URL . "/models/Inventaris.php";

    if(is_numeric($_GET['id'])){
        $id = $_GET['id'];
        $data = $inventaris->whereInven('id_inventaris',$id);
        if(count($data) == 0){
            header('location: index.php');
        }
    }
    else{
        header('location: index.php');
    }
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

            <!-- <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="w-100 pt-1 mb-5 text-right">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="get" class="modal-content modal-body border-0 p-0">
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                            <button type="submit" class="input-group-text bg-success text-light">
                                <i class="fa fa-fw fa-search text-white"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div> -->

            <section class="mt-5">
                <div class="container pb-5">
                    <div class="row">
                        <div class="col-lg-5 mt-5">
                            <div class="card mb-3">
                                <img class="card-img img-fluid" src="images/<?= $data['foto_prod'] ?>" alt="Card image cap" id="product-detail">
                            </div>
                            
                        </div>
                        <!-- col end -->
                        <div class="col-lg-7 mt-5">
                            <div class="card">
                                <div class="card-body">
                                    
                                    <h1 class="h2"><?= $data['nama_prod'] ?></h1>
                                    <p class="h3 py-2"><?= $data['harga'] ?></p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <h6>Brand:</h6>
                                        </li>
                                        <li class="list-inline-item">
                                            <p class="text-muted"><strong><?= $data['nama_brand'] ?></strong></p>
                                        </li>
                                    </ul>
        
                                    <h6>Description:</h6>
                                    <p><?= $data['deskripsi'] ?></p>
        
                                    <ul class="list-unstyled pb-3">
                                
                                    </ul>
        
                                    <form action="cart.php?action=add&id=<?= $data["id_inventaris"]; ?>" method="POST">
                                        <input type="hidden" name="id_inventaris" value="<?= $data['id_inventaris'] ?>">
                                        <input type="hidden" name="product-title" value="Activewear">
                                        <div class="row">
                                            <!-- <div class="col-auto">
                                                <ul class="list-inline pb-3">
                                                    <li class="list-inline-item">Size :
                                                        <input type="hidden" name="product-size" id="product-size" value="S">
                                                    </li>
                                                    <li class="list-inline-item"><span class="btn btn-success btn-size">S</span></li>
                                                    <li class="list-inline-item"><span class="btn btn-success btn-size">M</span></li>
                                                    <li class="list-inline-item"><span class="btn btn-success btn-size">L</span></li>
                                                    <li class="list-inline-item"><span class="btn btn-success btn-size">XL</span></li>
                                                </ul>
                                            </div> -->
                                            <div class="col-auto">
                                                <ul class="list-inline pb-3">
                                                    <li class="list-inline-item text-right">
                                                        Quantity
                                                        <div class="col-sm-8 form-group">
                                                            <input type="number" class="form-control" placeholder="1" min="1" name="jumlah" value="<?= $data["jumlah"]; ?>">
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <input type="hidden" name="hidden_name" value="<?= $data["nama_prod"]; ?>">
                                        <input type="hidden" name="hidden_foto" value="<?= $data["foto_prod"]; ?>">
                                        <input type="hidden" name="hidden_brand" value="<?= $data["nama_brand"]; ?>">
                                        <input type="hidden" name="hidden_kategori" value="<?= $data["nama_kategori"]; ?>">
                                        <input type="hidden" name="hidden_price" value="<?= $data["harga"]; ?>">
                                        <div class="row pb-3">
                                            <?php
                                                if(isset($_SESSION['email_cust'])){
                                            ?>
                                                <div class="col d-grid">
                                                    <button type="submit" class="btn btn-success btn-lg" name="add" value="addtocard">Add To Cart</button>
                                                </div>
                                            <?php
                                            }else{
                                            ?>
                                            <!-- <a class="nav-link h5 text-light" href="login.php">Login</a> -->
                                            <p class="text-danger">**Harap Login Terlebih dahulu untuk pembelian barang**</p>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </form>
        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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