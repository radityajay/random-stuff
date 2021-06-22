<?php
    require_once "../autoload.php";
    require_once $BASE_URL . "/models/Produk.php";
    require_once $BASE_URL . "/helper/Alert.php";

    // $allowedLevel = ["Administrator"];
    // if(!in_array($_SESSION['level'], $allowedLevel)){
    //     header('location: ../index.php');
    // }

    if(is_numeric($_GET['id'])){
        $id = $_GET['id'];
        
        $query = $produk->where('id_prod', $id);

        if(count($query) > 1){
            $query = $produk->delete('id_prod', $id);

            if($query){
                alert("Data is successfully Delete","index.php");
            }
            else{
                alert("Somthing Error!","index.php");
            }
        }
        else{
            alert("Data Not Found","index.php");
        }
    }
    else{
        header('location: ../index.php');
    }
?>