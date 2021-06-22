<?php
    require_once "../autoload.php";
    require_once $BASE_URL . "/models/Admin.php";
    require_once $BASE_URL . "/helper/Alert.php";

    // $allowedLevel = ["Administrator"];
    // if(!in_array($_SESSION['level'], $allowedLevel)){
    //     header('location: ../index.php');
    // }

    if(is_numeric($_GET['id'])){
        $id = $_GET['id'];
        
        $query = $admin->where('id_admin', $id);

        if(count($query) > 1){
            $query = $admin->delete('id_admin', $id);

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