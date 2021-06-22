<?php
    require_once "../../autoload.php";
    require_once $BASE_URL . "/models/Store.php";
    require_once $BASE_URL . "/helper/Alert.php";

    if(isset($_POST['submit'])){
        $idStore   = $_POST['id'];
        $namaStore = $_POST['nama_store'];
        $alamatStore = $_POST['alamat_store'];
        
        if(!empty($namaStore) && !empty($alamatStore) && is_numeric($idStore)){
            $query = $store->where('id_store', $idStore);
            
            if(count($query) > 1){
                $query = $store->update([
                    'nama_store' => $namaStore,
                    'alamat_store' => $alamatStore
                ], 'id_store', $idStore);

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