<?php
    require_once "../../autoload.php";
    require_once $BASE_URL . "/models/Role.php";
    require_once $BASE_URL . "/helper/Alert.php";

    if(isset($_POST['submit'])){
        $idRole   = $_POST['id'];
        $namaRole = $_POST['nama_role'];
        
        if(!empty($namaRole) && is_numeric($idRole)){
            $query = $role->where('id_role', $idRole);
            
            if(count($query) > 1){
                $query = $role->update([
                    'nama_role' => $namaRole
                ], 'id_role', $idRole);

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