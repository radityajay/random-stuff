<?php 
include "autoload.php";
require_once $BASE_URL . "/models/OrderList.php";
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
                <?php
                    if(isset($_SESSION['email_cust'])){
                        // var_dump($_SESSION['id_cust']);
                ?>
                <table class="col-7 mt-5 table table-bordered border-dark" >
                <tr style="text-align: center;">
                    <th>Status</th>
                    <th>Total</th>
                    <th>Tanggal</th>
                    <th>Action</th>
                </tr>
                    <?php
                    foreach($orderList->all() as $data){
                        // var_dump($data);
                        // $allowed = $data->id_cust;
                        if($_SESSION['id_cust'] == $data['id_cust']){
                        //     header('location: index.php');
                        // var_dump($data->id_cust);
                        // if(isset($data['id_cust'])){
                        //    $total = $data->jumlah * $data->harga;
                        //    var_dump($total);
                        ?>
                    <tr>
                        <!-- <td><img src="img/shop_10.jpg" width="100px" height="150"></td> -->
                        <td>
                            <h4 style="text-align: center;"><?= $data['status'] ?></h4>
                            
                        </td>
                        <td style="text-align: right;"><h5>Rp<?= number_format($data['total_bayar'], 2) ?></h4></td>
                        <td style="text-align: center;"><h5><?= $data['tgl_transaksi'] ?></h4></td>
                        <!-- <td style="text-align: right;"><h5></h5></td> -->
                        <td style="text-align: center;">
                                        <a href="detail-trans.php?id=<?= $data['id_order'] ?>">
                                            <button type="submit" class="btn btn-success2 btn-lg" name="submit" value="buy">
                                                <span style="color: lightyellow;">
                                                    <i class="h6">Detail</i>
                                                </span>
                                            </button>
                                        </a>
                                <?php
                                    if($data['status'] == "Mengirim"){
                                        ?>
                                            <a href="update-status.php?id=<?= $data['id_order'] ?>">
                                            <button type="submit" class="btn btn-success2 btn-lg" name="submit" value="buy">
                                                <span style="font-size: 1em; color: lightyellow;">
                                                    <i class="fas fa-check"></i>
                                                </span>
                                            </button>
                                        </a>
                                        <?php
                                    }
                                ?>
                        </td>
                    </tr>
                    <?php
                        }

                    // }
                }
                ?>
                </table>
                <?php
                    }else{
                ?>
                        <!-- <a class="nav-link h5 text-light" href="login.php">Login</a> -->
                        <p class="text-danger">**Harap Login Terlebih dahulu untuk pembelian barang**</p>
                        <?php
                            }
                        ?>
                

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