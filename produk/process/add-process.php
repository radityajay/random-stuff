<?php
    require_once "../../autoload.php";
    require_once $BASE_URL . "/models/Produk.php";
    require_once $BASE_URL . "/helper/Alert.php";

    // $allowedLevel = ["Administrator"];
    // if(!in_array($_SESSION['level'], $allowedLevel)){
    //     header('location: ../../index.php');
    // }

    if(isset($_POST['submit'])){
        $nama = $_POST['nama_prod'];
        $kodeProd = $_POST['kode_prod'];
        $idBrand = $_POST['id_brand'];
        $idKategori = $_POST['id_kategori'];
        $fotoProd = $_FILES['foto_prod']['name'];
        $tmp = $_FILES['foto_prod']['tmp_name'];
        $deskripsi = $_POST['deskripsi'];
        $size = $_POST['size'];
        
        if(!empty($nama) && is_numeric($idBrand) && is_numeric($idKategori) && !empty($kodeProd) && !empty($fotoProd) 
        && !empty($deskripsi) && !empty($size)){
            $query = $produk->where('kode_prod', $kodeProd);

            if(count($query) == 0){
                $tanggalRegister = date("Y-m-d");

                $nameFoto = $kodeProd.$fotoProd;
                $folder = '../../images/';

                move_uploaded_file($tmp, $folder.$nameFoto);

                $query = $produk->insert([
                    'nama_prod' => $nama,
                    'deskripsi' => $deskripsi,
                    'kode_prod' => $kodeProd,
                    'foto_prod' => $nameFoto,
                    'id_kategori' => $idKategori,
                    'id_brand' => $idBrand,
                    'id_admin' => $_SESSION['id_admin'],
                    'tgl_prod' => $tanggalRegister,
                    'size' => $size,
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