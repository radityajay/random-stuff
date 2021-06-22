<?php
    require_once "autoload.php";
    require_once $BASE_URL . "/models/Admin.php";
    require_once $BASE_URL . "/models/Role.php";

    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        // $query = $petugas->where('id_petugas', $id);

        if(!empty($email) && !empty($password)){
            $query = $admin->where('email', $email);

            if(count($query) > 1){
                if(password_verify($password, $query['password'])){
                    $data_role = $role->where('id_role', $query['id_role']);

                    $_SESSION['id_admin'] = $query['id_admin'];
                    $_SESSION['email'] = $query['email'];
                    $_SESSION['role'] = $data_role['nama_role'];

                    alert("Login Success, Welcome $data_role[nama_role]", "dashboard/index.php");
                }
                else{
                    alert("wrong email & password combination", "login-admin.php");
                }
            }
            else{
                alert("wrong email!!!","login-admin.php");
            }
        }
        else{
            alert("Please fill all form", "login-admin.php");
        }
    }
    else{
        header('location: login-admin.php');
    }
?>