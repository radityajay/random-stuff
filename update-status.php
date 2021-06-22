<?php
    require_once "autoload.php";
    require_once $BASE_URL . "/models/OrderList.php";
    require_once $BASE_URL . "/models/Inventaris.php";
    require_once $BASE_URL . "/helper/Alert.php";

    if(is_numeric($_GET['id'])){
        $id = $_GET['id'];
        $data = $orderList->where('id_order', $id);
        if(count($data) > 1){
            $query = $orderList->update([
                'status' => 'Sudah Diterima'
            ], 'id_order', $id);

            if($query){ 
                alert("Barang sudah diterima !", "shipping.php");
            }
            else{
                alert("Something error!", "index.php");
            }
        }
        else{
            alert("Data not found!", "index.php");
        }
    }
    else{
        header('location: index.php');
    }
?>