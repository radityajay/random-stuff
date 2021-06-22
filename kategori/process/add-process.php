<?php
    require_once "../../autoload.php";
    require_once $BASE_URL . "/models/Kategori.php";

    // $allowedLevel = ["Administrator"];
    // if(!in_array($_SESSION['level'], $allowedLevel)){
    //     header('location: ../index.php');
    // }

    if(isset($_POST['submit'])){
        $namaKategori = $_POST['nama_kategori'];

        if(!empty($namaKategori)){
            $query = $kategori->where('nama_kategori', $namaKategori);

            if(count($query) == 0){
                $query = $kategori->insert([
                    'nama_kategori' => $namaKategori
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