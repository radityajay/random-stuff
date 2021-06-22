<?php
    require_once "../../autoload.php";
    require_once $BASE_URL . "/models/Admin.php";
    require_once $BASE_URL . "/helper/Alert.php";

    // $allowedLevel = ["Administrator"];
    // if(!in_array($_SESSION['level'], $allowedLevel)){
    //     header('location: ../../index.php');
    // }

    if(isset($_POST['submit'])){
        $idAdmin   = $_POST['id'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $idRole = $_POST['id_role'];
        
        if(is_numeric($idAdmin) && !empty($email) && is_numeric($idRole)){
            $query = $admin->where('id_admin', $idAdmin);

            if(count($query) > 1){
                if(!empty($password)){ //jika passwordnya isi maka akan di update jika tidak maka yang di update yang di else
                    $query = $admin->update([
                        'password' => PASSWORD_HASH($password, PASSWORD_BCRYPT, ['cost' => 12]),
                        'email' => $email,
                        'id_role' => $idRole
                    ], 'id_admin', $idAdmin);
                }
                else{
                    $query = $admin->update([
                        'email' => $email,
                        'id_role' => $idRole
                    ], 'id_admin', $idAdmin);
                }

                if($query){
                    alert("Data is successfully updated!","../index.php");
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