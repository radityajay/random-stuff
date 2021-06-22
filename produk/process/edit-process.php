<?php
    require_once "../../autoload.php";
    require_once $BASE_URL . "/models/Produk.php";
    require_once $BASE_URL . "/helper/Alert.php";

    if(isset($_POST['submit'])){
        $idProduk   = $_POST['id'];
        $nama = $_POST['nama_prod'];
        $kodeProd = $_POST['kode_prod'];
        $idBrand = $_POST['id_brand'];
        $idKategori = $_POST['id_kategori'];
        $fotoProd = $_FILES['foto_prod']['name'];
        $tmp = $_FILES['foto_prod']['tmp_name'];
        $deskripsi = $_POST['deskripsi'];
        $size = $_POST['size'];
        
        if(is_numeric($idProduk) && !empty($nama) && is_numeric($idBrand) && is_numeric($idKategori) && !empty($kodeProd) 
        && !empty($deskripsi) && !empty($size)){
            $query = $produk->where('id_prod', $idProduk);

                    $tanggalRegister = date("Y-m-d");

                    $nameFoto = $kodeProd.$fotoProd;
                    $folder = '../../images/';

                    move_uploaded_file($tmp, $folder.$nameFoto);
                    
            if(count($query) > 1){
                if(!empty($fotoProd)){
                    $query = $produk->update([
                        'nama_prod' => $nama,
                        'deskripsi' => $deskripsi,
                        'kode_prod' => $kodeProd,
                        'foto_prod' => $nameFoto,
                        'id_kategori' => $idKategori,
                        'id_brand' => $idBrand,
                        'id_admin' => $_SESSION['id_admin'],
                        'tgl_prod' => $tanggalRegister,
                        'size' => $size,
                    ], 'id_prod', $idProduk);
                }else{
                    $query = $produk->update([
                        'nama_prod' => $nama,
                        'deskripsi' => $deskripsi,
                        'kode_prod' => $kodeProd,
                        'id_kategori' => $idKategori,
                        'id_brand' => $idBrand,
                        'id_admin' => $_SESSION['id_admin'],
                        'tgl_prod' => $tanggalRegister,
                        'size' => $size,
                    ], 'id_prod', $idProduk);
                }

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