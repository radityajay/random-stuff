<?php
    require_once "../../autoload.php";
    require_once $BASE_URL . "/models/Vendor.php";
    require_once $BASE_URL . "/helper/Alert.php";

    if(isset($_POST['submit'])){
        $idVendor   = $_POST['id'];
        $namaVendor = $_POST['nama_vendor'];
        
        if(!empty($namaVendor) && is_numeric($idVendor)){
            $query = $vendor->where('id_vendor', $idVendor);
            
            if(count($query) > 1){
                $query = $vendor->update([
                    'nama_vendor' => $namaVendor
                ], 'id_vendor', $idVendor);

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