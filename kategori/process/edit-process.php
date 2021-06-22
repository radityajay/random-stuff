<?php
    require_once "../../autoload.php";
    require_once $BASE_URL . "/models/Kategori.php";
    require_once $BASE_URL . "/helper/Alert.php";

    if(isset($_POST['submit'])){
        $idKategori   = $_POST['id'];
        $namaKategori = $_POST['nama_kategori'];
        
        if(!empty($namaKategori) && is_numeric($idKategori)){
            $query = $kategori->where('id_kategori', $idKategori);
            
            if(count($query) > 1){
                $query = $kategori->update([
                    'nama_kategori' => $namaKategori
                ], 'id_kategori', $idKategori);

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