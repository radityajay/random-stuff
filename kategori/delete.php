<?php
    require_once "../autoload.php";
    require_once $BASE_URL . "/models/Kategori.php";

    if(is_numeric($_GET['id'])){
        $id = $_GET['id'];
        
        $query = $kategori->where('id_kategori', $id);

        if(count($query) > 1){
            $query = $kategori->delete('id_kategori', $id);

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