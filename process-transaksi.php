<?php
    require_once "autoload.php";
    // require_once "libraries/Database.php";
    require_once $BASE_URL . "/models/Inventaris.php";
    require_once $BASE_URL . "/models/OrderList.php";
    require_once $BASE_URL . "/models/OrderDetail.php";

    // $allowedLevel = ["Administrator"];
    // if(!in_array($_SESSION['level'], $allowedLevel)){
    //     header('location: ../index.php');
    // }

    if(isset($_SESSION['cart'])){
        $cart = unserialize(serialize($_SESSION['cart']));

        $total = 0;
        $total_item = 0;
        $total_bayar = 0;
        $totalItem = 0;
        // $itemTotal = count($_SESSION['cart']);
        

        // foreach($_SESSION['cart'] as $value){
        //     $id_inventaris = $value['id_inventaris'];
        //     $totalTem = $totalItem + floatval($value['item_quantity']);
        //     $total_item = floatval($value['item_quantity']) * floatval($value['product_price']);
        //     $total_order = $total += $total_item;
        //     $jumlah = $value['item_quantity'];
        // }
        // var_dump($itemTotal);

                // $query = $orderList->insert([
                //     'id_cust' => $_SESSION['id_cust'],
                //     'total_item' => $totalTem,
                //     'total_bayar' => $total_order,
                //     'tgl_transaksi' => $tglTransaksi
                // ]);
                for ($i=0; $i<count($cart); $i++) { 
                    $total_item += $cart[$i]['item_quantity'];
                    $total_bayar += $cart[$i]['item_quantity'] * $cart[$i]['product_price'];
                   }
                $link = mysqli_connect('localhost', 'root', '', 'random_stuff');
                if (!$link) {
                    die("Connection failed: " . mysqli_connect_error());
                  }
                // $tglTransaksi = date('Y-m-d');
                $query = mysqli_query($link,"insert into order_list(id_order,id_cust,total_item,total_bayar,tgl_transaksi) values('',$_SESSION[id_cust],$total_item,$total_bayar,'" . date('Y-m-d') . "')");

                // // Get last insert id 
                $id_order = mysqli_insert_id($link);  
                // $sql = $orderList->withId();
                // $id_order = $query->lastInsertId();
                // var_dump($id_order);
                // foreach($_SESSION['cart'] as $value){
                //     $id_inventaris = $value['id_inventaris'];
                //     $jumlah = $value['item_quantity'];
                //     $totalTem = $totalItem + floatval($value['item_quantity']);
                //     $total_item = floatval($value['item_quantity']) * floatval($value['product_price']);
                //     $total_order = $total += $total_item;
                // }
                $itemTotal = count($cart);
                for ($i=0; $i<count($cart); $i++) { 
                    $id_inventaris = $cart[$i]['id_inventaris'];
                    $jumlah = $cart[$i]['item_quantity'];

                    $query = mysqli_query($link,"insert into detail_order_list(id_order,total_order,id_inventaris,jumlah) values($id_order, $itemTotal, $id_inventaris, $jumlah)");
                    //  var_dump($query);
                }
                // var_dump($itemTotal);
                // $query = $orderDetail->insert([
                //     'id_order' => $id_order,
                //     'total_order' => $itemTotal,
                //     'id_inventaris' => $id_inventaris,
                //     'jumlah' => $jumlah
                // ]);
                // var_dump($query);
                unset($_SESSION['cart']);
                alert("Pay Success", "success.php");
                
        
    }
    else{
        header('location: index.php');
    }
?>