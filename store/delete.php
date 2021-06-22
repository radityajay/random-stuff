<?php
    require_once "../autoload.php";
    require_once $BASE_URL . "/models/Store.php";

    if(is_numeric($_GET['id'])){
        $id = $_GET['id'];
        
        $query = $store->where('id_store', $id);

        if(count($query) > 1){
            $query = $store->delete('id_store', $id);

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