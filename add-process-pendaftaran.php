<?php
    require_once "autoload.php";
    require_once $BASE_URL . "/models/Customer.php";
    require_once $BASE_URL . "/helper/Alert.php";

    // $allowedLevel = ["Administrator"];
    // if(!in_array($_SESSION['level'], $allowedLevel)){
    //     header('location: ../../index.php');
    // }

    if(isset($_POST['submit'])){
        $emailCust = $_POST['email_cust'];
        $username = $_POST['username'];
        $jk = $_POST['jk_cust'];
        $noTlp = $_POST['no_tlp'];
        $alamat = $_POST['alamat_cust'];
        $namaLengkap = $_POST['nama_lengkap'];
        $password = $_POST['password'];
        
        if(!empty($emailCust) && !empty($namaLengkap) && !empty($alamat) && !empty($jk) && !empty($username) && !empty($password) && !empty($noTlp)){
            $query = $customer->where('email_cust', $emailCust);

            if(count($query) == 0){
                $kodeCust = random("C", 3);

                $query = $customer->insert([
                    'nama_lengkap' => $namaLengkap,
                    'username' => $username,
                    'password' => PASSWORD_HASH($password, PASSWORD_BCRYPT, ['cost' => 12]),
                    'kode_cust' => $kodeCust,
                    'no_tlp' => $noTlp,
                    'email_cust' => $emailCust,
                    'jk_cust' => $jk,
                    'alamat_cust' => $alamat
                ]);

                if($query){
                    alert("Data is successfully added!","login.php");
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
            // var_dump($query);
        }
    }
    else{
        header('location: ../index.php');
    }
?>