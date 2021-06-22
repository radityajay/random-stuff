<?php
    require_once "../../autoload.php";
    require_once $BASE_URL . "/models/Role.php";

    // $allowedLevel = ["Administrator"];
    // if(!in_array($_SESSION['level'], $allowedLevel)){
    //     header('location: ../index.php');
    // }

    if(isset($_POST['submit'])){
        $namaRole = $_POST['nama_role'];

        if(!empty($namaRole)){
            $query = $role->where('nama_role', $namaRole);

            if(count($query) == 0){
                $query = $role->insert([
                    'nama_role' => $namaRole
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