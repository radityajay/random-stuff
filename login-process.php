<?php
    require_once "autoload.php";
    require_once $BASE_URL . "/models/Customer.php";

    if(isset($_POST['submit'])){
        $email = $_POST['email_cust'];
        $password = $_POST['password'];
        
        // $query = $petugas->where('id_petugas', $id);

        if(!empty($email) && !empty($password)){
            $query = $customer->where('email_cust', $email);

            if(count($query) > 1){
                if(password_verify($password, $query['password'])){

                    $_SESSION['id_cust'] = $query['id_cust'];
                    $_SESSION['username'] = $query['username'];
                    $_SESSION['email_cust'] = $query['email_cust'];

                    alert("Login Success, Welcome $query[username]", "index.php");
                }
                else{
                    alert("wrong email & password combination", "login.php");
                }
            }
            else{
                alert("wrong email!!!","login.php");
            }
        }
        else{
            alert("Please fill all form", "login.php");
        }
    }
    else{
        header('location: login.php');
    }
?>