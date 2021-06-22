<?php 
include "autoload.php";
require_once $BASE_URL . "/models/OrderList.php";

if(is_numeric($_GET['id'])){
    $id = $_GET['id'];
    $data = $orderList->withDetail($id);
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
        <?php
        include "header.php";
        ?>
        <div class="wrapper">
            <div class="container mt-5 pt-3 pb-5" align="center">
                <table class="col-7 mt-5 table table-bordered border-dark" >
                <tr style="text-align: center;">
                    <th>Produk</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Total</th>
                </tr>
                <?php
                    foreach($data as $value){
                        //     header('location: index.php');
                        // var_dump($data->id_cust);
                        // if(isset($data['id_cust'])){
                           $total = $value->jumlah * $value->harga;
                        //    var_dump($total);
                        ?>
                    <tr>
                        <!-- <td><img src="img/shop_10.jpg" width="100px" height="150"></td> -->
                        <td>
                            <h4 style="text-align: center;"><?= $value->nama_prod ?></h4>
                            
                        </td>
                        <td style="text-align: center;"><h5><?= $value->jumlah ?></h4></td>
                        <td style="text-align: center;"><h5>Rp<?= number_format($value->harga, 2) ?></h5></td>
                        <td style="text-align: center;"><h5>Rp<?= number_format($total, 2) ?></h5></td>
                        <!-- <td style="text-align: right;"><h5></h5></td> -->
                        <!-- <td class="ps-5" style="text-align: center;">
                                        <a href="detail-trans.php?id=">
                                            <button type="submit" class="btn btn-success2 btn-lg" name="submit" value="buy">
                                                <span style="color: lightyellow;">
                                                    <i class="h6">Detail</i>
                                                </span>
                                            </button>
                                        </a>
                                <
                                    // if($data['status'] == "Pengiriman"){
                                        ?>
                                            <a href="update-status.php?id=">
                                            <button type="submit" class="btn btn-success2 btn-lg" name="submit" value="buy">
                                                <span style="font-size: 1em; color: lightyellow;">
                                                    <i class="fas fa-check"></i>
                                                </span>
                                            </button>
                                        </a>
                                        
                                    // }
                                ?>
                        </td> -->
                    </tr>
                    <?php
                    }
                    ?>
                </table>
                

                <!-- <table class="mt-5">
                    <tr>
                        <td class="pt-5">
                            <p class="text-light">Order Total: <span class="text-primary1"> Rp. 10000000</span></p>
                        </td>
                    </tr>
                </table>

                <div class="col-3 d-grid mt-3 ms-auto me-auto">
                    <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Buy</button>
                </div> -->
            </div>
        </div>
        
 

        <footer class="bg-dark mt-5" id="tempaltemo_footer">
         <div class="w-100 bg-light py-3">
              <div class="container">
                  <div class="row pt-2">
                      <div class="col-12">
                          <p class="text-center text-black">
                              Copyright &copy; 2021 Random Stuff 
                              | Designed by Tiga Sekawan
                          </p>
                      </div>
                  </div>
              </div>
          </div>
        </footer>
        <script src="bootstrap/js/jquery-1.11.0.min.js"></script>
        <script src="bootstrap/js/jquery-migrate-1.2.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="bootstrap/js/templatemo.js"></script>
        <script src="bootstrap/js/custom.js"></script>
        <script src="https://kit.fontawesome.com/b99c03f2e4.js" crossorigin="anonymous"></script>
        
    </body>
</html>