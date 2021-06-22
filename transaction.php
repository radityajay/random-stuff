<?php
include "autoload.php";
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
            <div class="container bg-light mt-5 pt-3 pb-5" align="center">
                <table class="col-7 mt-5">
                <?php
                        $total = 0;
                        foreach($_SESSION['cart'] as $value){
                            $total_item = floatval($value['item_quantity']) * floatval($value['product_price']);
                        ?>
                    <tr>
                        <!-- <td><img src="img/shop_10.jpg" width="100px" height="150"></td> -->
                        <td>
                            <h4><?= $value['item_name'] ?></h4>
                            <p class="text-light"><?= $value['item_brand'] ?>  |  <?= $value['item_kategori'] ?></p>
                        </td>
                        <td><h5><?= $value['item_quantity'] ?></h4></td>
                        <td style="text-align: right"><h5><?= number_format($value['product_price'],2)  ?></h4></td>
                        <td style="text-align: right"><h5><?= number_format($total_item,2) ?></h5></td>
                    </tr>
                    <?php
                        $total_order = $total += $total_item;
                        }
                    ?>
                </table>
                
                <table class="mt-5">
                    <tr>
                        <td class="pt-5">
                            <p class="text-light">Order Total: <span class="text-primary1">Rp<?= number_format($total_order,2); ?></span></p>
                        </td>
                    </tr>
                </table>

                <div class="col-3 d-grid mt-3 ms-auto me-auto">
                    <a href="process-transaksi.php"><button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Pay</button></a>
                </div>
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