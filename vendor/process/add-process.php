<?php
    require_once "../../autoload.php";
    require_once $BASE_URL . "/models/Vendor.php";

    // $allowedLevel = ["Administrator"];
    // if(!in_array($_SESSION['level'], $allowedLevel)){
    //     header('location: ../index.php');
    // }

    if(isset($_POST['submit'])){
        $namaVendor = $_POST['nama_vendor'];

        if(!empty($namaVendor)){
            $query = $vendor->where('nama_vendor', $namaVendor);

            if(count($query) == 0){
                $query = $vendor->insert([
                    'nama_vendor' => $namaVendor
                ]);

                if($query){
                    alert("Data berhasil ditambahkan","../index.php");
                }
                else{
                    alert("Data ada yang error","../index.php");
                }
            }
            else{
                alert("Data sudah ada yang ditambahkan! silahkan tambahkan data baru","../index.php");
            }
        }
        else{
            alert("Silahkan isi semua form","../index.php");
        }
    }
    else{
        header('location: ../sindex.php');
    }
?>