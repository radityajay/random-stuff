<?php
    require_once "../../autoload.php";
    require_once $BASE_URL . "/models/Inventaris.php";
    require_once $BASE_URL . "/models/Produk.php";
    require_once $BASE_URL . "/models/Vendor.php";
    require_once $BASE_URL . "/models/Store.php";
    require_once $BASE_URL . "/helper/Alert.php";

    // $allowedLevel = ["Administrator"];
    // if(!in_array($_SESSION['level'], $allowedLevel)){
    //     header('location: ../../index.php');
    // }

    if(isset($_POST['submit'])){
        $idProd = $_POST['id_prod'];
        $idVendor = $_POST['id_vendor'];
        $idStore = $_POST['id_store'];
        $stokInven = $_POST['stok'];
        $hargaInven = $_POST['harga'];
        
        if(is_numeric($idProd) && is_numeric($idVendor) && is_numeric($idStore) && is_numeric($stokInven) && is_numeric($hargaInven)){
            $query = $inventaris->where('id_prod', $idProd);

            if(count($query) == 0){

                $tanggalRegister = date("Y-m-d");

                $query = $inventaris->insert([
                    'id_prod' => $idProd,
                    'id_vendor' => $idVendor,
                    'id_store' => $idStore,
                    'stok' => $stokInven,
                    'harga' => $hargaInven,
                    'tgl_invent' => $tanggalRegister
                ]);

                if($query){
                    alert("Data is successfully added!","../index.php");
                }
                else{
                    alert("Somthing Error!","../index.php");
                }
            }
            else{
                alert("Data is already added before! Please use another data!","../index.php");
            }
        }
        else{
            alert("Please fill all forms!","../index.php");
        }
    }
    else{
        header('location: ../index.php');
    }
?>