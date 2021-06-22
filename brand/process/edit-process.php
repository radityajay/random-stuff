<?php
    require_once "../../autoload.php";
    require_once $BASE_URL . "/models/Brand.php";
    require_once $BASE_URL . "/helper/Alert.php";

    if(isset($_POST['submit'])){
        $idBrand   = $_POST['id'];
        $namaBrand = $_POST['nama_brand'];
        
        if(!empty($namaBrand) && is_numeric($idBrand)){
            $query = $brand->where('id_brand', $idBrand);
            
            if(count($query) > 1){
                $query = $brand->update([
                    'nama_brand' => $namaBrand
                ], 'id_brand', $idBrand);

                if($query){
                    alert("Data is successfully added!","../index.php");
                }
                else{
                    alert("Somthing Error!","../edit.php");
                }
            }
            else{
                alert("Data is already added before! Please use another data!","../edit.php");
            }
        }
        else{
            alert("Please fill all forms!","../edit.php");
        }
    }
    else{
        header('location: ../edit.php');
    }
?>