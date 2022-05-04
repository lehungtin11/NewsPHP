<?php
    session_start();
    include ('config/config.php');
    if(isset($_POST['dangnhap'])) {
        $taikhoan = $_POST['username'];
        $matkhau = md5($_POST['password']);
    $sql = "SELECT * FROM tbl_admin WHERE username='".$taikhoan."'AND password='".$matkhau."'  LIMIT 1";
    $query = mysqli_query($mysqli,$sql);
    $count = mysqli_num_rows($query);
    if($count>0) {
        $_SESSION['dangnhap'] = $taikhoan;
        header("Location:index.php");
        } else {
            header("Location:login.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style type="text/css">
        * {
            font-weight: bolder;
        }
        html {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #2b3034;
         }

        .wrapper {
            display: flex;
            justify-content: center;
            align-items:center;
            width: 100%;
            height: 100%;
            transform: translateY(100%);
        }

        .login {
            text-align: center;
            border: none;
        }

        input {
            border: none;
            padding: 8px 16px;
            background-color: #212224;
            margin-bottom: 8px;
            
        }

        input[type="text"], input[type="password"] {
            color: #757575;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #25aea6;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            opacity: .9;
        }

        
    </style>
</head>
<body>
    <div class="wrapper">
        <form action="#" autocomplete="off" method="POST">
            <table class="login">
                <tr>
                    <td>
                        <input type="text" name="username" placeholder="Username">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="password" name="password" placeholder="Password">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="dangnhap" value="Login">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>