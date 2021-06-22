<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/all.css">
    <title>Login</title>

    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            background: rgb(219, 226, 226);
        }
        .row{
            background: #2D3F50;
            border-radius: 30px;
            box-shadow: 12px 12px 22px grey;
        }
        img{
            border-top-left-radius: 30px;
            border-bottom-left-radius: 30px;
            margin-left: -14px;
        }
        .btn1{
            border: none;
            outline: none;
            height: 40px;
            width: 100%;
            background-color: #2ECC71;
            color: #ffffff;
            border-radius: 50px;
            font-weight: bold;
            margin-left: 150px;
        }
        .btn1:hover{
            background-color: #ffffff;
            border: 1px solid;
            color: #2ECC71;
        }
        .form-control{
            border-radius: 50px;
            margin-left: 150px;
            
        }
        p{
            color: #ffffff;
            margin-left: 250px;
        }
        .forgot-password{
            margin-left: 270px;
        }
    </style>

  </head>


  <body>
    <section class="form my-5 mx-5">
        <div class="container">
            <div class="row no-gutters d-flex justify-content-center">
                <div class="col-lg-5">
                    <img src="./images/h-ng-nguy-n-DUx4Da4Se1E-unsplash 1.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    <form action="login-admin-process.php" method="POST">
                        <div class="form-row">
                            <h1 class="logo"><img src="./images/Random Logo.png" class="rounded mx-auto d-block" alt="" width="20%"></h1>
                            <div class="col-lg-7">
                                <input type="email" placeholder="Email" class="form-control my-4 p-2 pl-5" name="email">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <input type="password" placeholder="Password" class="form-control my-4 p-2" name="password">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                                <button type="submit" class="btn1 mt-3 mb-5" name="submit">Login</button>
                            </div>
                        </div>
                        <a href="#" class="forgot-password">Forgot Your Password?</a>
                        <p>Belum Punya Akun <a href="#">Buat Akun</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section> 

    <!-- Optional JavaScript; choose one of the two! -->


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  </body>
</html>