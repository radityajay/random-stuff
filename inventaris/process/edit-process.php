<?php
    require_once "../../autoload.php";
    require_once $BASE_URL . "/models/Inventaris.php";
    require_once $BASE_URL . "/helper/Alert.php";

    if(isset($_POST['submit'])){
        $idInven   = $_POST['id'];
        $idProd = $_POST['id_prod'];
        $idVendor = $_POST['id_vendor'];
        $idStore = $_POST['id_store'];
        $stokInven = $_POST['stok'];
        $hargaInven = $_POST['harga'];
        
        if(is_numeric($idProd) && is_numeric($idVendor) && is_numeric($idStore) && is_numeric($stokInven) && is_numeric($hargaInven) && is_numeric($idInven)){
            $query = $inventaris->where('id_inventaris', $idInven);
            
            if(count($query) > 1){

                $tanggalRegister = date("Y-m-d");

                $query = $inventaris->update([
                    'id_prod' => $idProd,
                    'id_vendor' => $idVendor,
                    'id_store' => $idStore,
                    'stok' => $stokInven,
                    'harga' => $hargaInven,
                    'tgl_invent' => $tanggalRegister
                ], 'id_inventaris', $idInven);

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