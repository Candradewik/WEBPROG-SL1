<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: #99d6ed;
            font-family: Arial;
        }
        .button-container{
            margin-left: 30%;
            margin-right: 30%;
            display: flex;
            justify-content: space-evenly;
        }
        #button-profile{
            background-color: #adf59f; 
            border: none;
            height: 50px;
            width: 120px;
            font-size: 20px;
        }
        #button-profile:hover{
            background-color: #cccccc; 
            border: none;
            height: 50px;
            width: 120px;
            font-size:20px;
        }
    </style>
</head>
<body>
    <center>
        <p>Aplikasi Pengelolaan Keuangan</p>
        <p style="font-size:30px;">Selamat Datang di Aplikasi Pengelola Keuangan</p>
    </center>
    </center>
    <?php
        session_start();
        if(isset($_POST['button-login'])){
            if(isset($_SESSION)){
                // echo "ada session";
                
                //cara cek login
                if(($_POST['usernameLogin'] == $_SESSION['usernameRegis']) && ($_POST['passwordLogin'] == $_SESSION['passwordRegis'])){
                    echo "Login Berhasil";
                    header('Location: /sl1-apk-pengelolaan-keuangan/home.php');
                }else{
                    echo "<center><b>Login Gagal!</b></center>";
                }
            }
        }
    ?>
</body>
</html>
