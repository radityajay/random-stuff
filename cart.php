
<?php
include "autoload.php";
require_once $BASE_URL . "/models/Inventaris.php";

if (isset($_POST["add"])){
    if (isset($_SESSION["cart"])){
        $item_array_id = array_column($_SESSION["cart"],"id_inventaris");
        if (!in_array($_GET["id"],$item_array_id)){
            $count = count($_SESSION["cart"]);
            $item_array = array(
                'id_inventaris' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'item_foto' => $_POST["hidden_foto"],
                'item_brand' => $_POST["hidden_brand"],
                'item_kategori' => $_POST["hidden_kategori"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["jumlah"],
            );
            $_SESSION["cart"][$count] = $item_array;
            echo '<script>window.location="cart.php"</script>';
        }else{
            echo '<script>alert("Product is already Added to Cart")</script>';
            echo '<script>window.location="produk.php"</script>';
        }
    }else{
        $item_array = array(
            'id_inventaris' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'item_foto' => $_POST["hidden_foto"],
                'item_brand' => $_POST["hidden_brand"],
                'item_kategori' => $_POST["hidden_kategori"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["jumlah"],
        );
        $_SESSION["cart"][0] = $item_array;
    }
}

if (isset($_GET["action"])){
    if ($_GET["action"] == "delete"){
        foreach ($_SESSION["cart"] as $keys => $value){
            if ($value["id_inventaris"] == $_GET["id"]){
                unset($_SESSION["cart"][$keys]);
                echo '<script>alert("Product has been Removed...!")</script>';
                echo '<script>window.location="cart.php"</script>';
            }
        }
    }
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
            <div class="container mt-5" align="center">
                <?php
                    if(!empty($_SESSION["cart"])){
                        $total = 0;
                        foreach ($_SESSION["cart"] as $key => $value) {
                ?>
                <table class="col-10 mt-3 bg-light">
                    <tr>
                        <td><img src="images/<?= $value["item_foto"] ?>" width="100px" height="150"></td>
                        <td>
                            <h5><?= $value['item_name'] ?></h5>
                        </td>
                        <td>
                            <li class="list-inline-item">
                                <div class="col-sm-4 form-group">
                                    <input type="number" class="form-control" min="1" disabled name="jumlah" value="<?= $value["item_quantity"]; ?>">
                                </div>
                            </li>
                        <td><h5><?= number_format($value['product_price'], 2) ?></h5></td>
                        <td>
                            <a href="cart.php?action=delete&id=<?php echo $value["id_inventaris"]; ?>">
                                <span style="font-size: 2em; color: #F10000;">
                                    <i class="far fa-trash-alt"></i>
                                </span>
                            </a>
                        </td>
                    </tr>
                </table>
                <?php
                        $total = $total + (floatval($value["item_quantity"]) * floatval($value["product_price"]));
                    }
                        ?>

                <table class="col-10 mt-5 bg-light">
                    <tr>
                        <td class="pt-3" align="center">
                            <p class="text-light">Order Total: <span class="text-primary1">Rp<?php echo number_format($total, 2); ?></span></p>
                        </td>
                    </tr>
                </table>

                <div class="col-3 d-grid mt-5 ms-auto me-auto">
                <a href="transaction.php"><button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Buy</button></a>
                </div>
                <div class="col-3 d-grid mt-5 ms-auto me-auto">
                    <a href="produk.php">Kembali</a>
                </div>
            </div>
        </div>
        <?php
                    }else{
                        ?>
                        <h1 class="text-light">Empty</h1>
                        <div class="col-3 d-grid mt-5 ms-auto me-auto">
                            <a href="produk.php">Kembali</a>
                        </div>
                        <?php
                    }
                ?>
                
 

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