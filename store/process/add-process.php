<?php
    require_once "../../autoload.php";
    require_once $BASE_URL . "/models/Store.php";

    // $allowedLevel = ["Administrator"];
    // if(!in_array($_SESSION['level'], $allowedLevel)){
    //     header('location: ../index.php');
    // }

    if(isset($_POST['submit'])){
        $namaStore = $_POST['nama_store'];
        $alamatStore = $_POST['alamat_store'];

        if(!empty($namaStore) && !empty($alamatStore)){
            $query = $store->where('nama_store', $namaStore);

            if(count($query) == 0){
                $query = $store->insert([
                    'nama_store' => $namaStore,
                    'alamat_store' => $alamatStore
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