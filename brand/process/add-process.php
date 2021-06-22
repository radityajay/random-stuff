<?php
    require_once "../../autoload.php";
    require_once $BASE_URL . "/models/Brand.php";

    // $allowedLevel = ["Administrator"];
    // if(!in_array($_SESSION['level'], $allowedLevel)){
    //     header('location: ../index.php');
    // }

    if(isset($_POST['submit'])){
        $namaBrand = $_POST['nama_brand'];

        if(!empty($namaBrand)){
            $query = $brand->where('nama_brand', $namaBrand);

            if(count($query) == 0){
                $query = $brand->insert([
                    'nama_brand' => $namaBrand
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