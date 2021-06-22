<?php
    require_once "../../autoload.php";
    require_once $BASE_URL . "/models/Admin.php";
    require_once $BASE_URL . "/helper/Alert.php";

    // $allowedLevel = ["Administrator"];
    // if(!in_array($_SESSION['level'], $allowedLevel)){
    //     header('location: ../../index.php');
    // }

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $idRole = $_POST['id_role'];
        
        if(!empty($email) && !empty($password) && is_numeric($idRole)){
            $query = $admin->where('email', $email);

            if(count($query) == 0){
                $query = $admin->insert([
                    'password' => PASSWORD_HASH($password, PASSWORD_BCRYPT, ['cost' => 12]),
                    'email' => $email,
                    'id_role' => $idRole
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