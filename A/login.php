<?php
require_once('models/account.php');
require_once('connection.php');

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <!-- Poppin font family -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <!-- Font Awesone for Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- CSS file from user -->
    <link rel="stylesheet" href="Assets/css/login.css">
</head>

<body>
    <div class="container">
        <div class="logo">
            <img src="./img/logo_typo.png" alt="">
        </div>
        <div class="form_container">
            <h1>Log In</h1>
            <form method="post" name="login_table">
                <div class="display">
                    <input type="text" name="pin_code" id="pin_code" placeholder="Enter your code">
                </div>
                <!-- <div class="error">Please type CODE</div> -->
                <!-- <div>
                    <input type="button" value="1">
                    <input type="button" value="2">
                    <input type="button" value="3">
                </div>
                <div>
                    <input type="button" value="4">
                    <input type="button" value="5">
                    <input type="button" value="6">
                </div>
                <div>
                    <input type="button" value="7">
                    <input type="button" value="8">
                    <input type="button" value="9">
                </div>
                <div>
                    <input type="button" value="AC">
                    <input type="button" value="0">
                    <button><i class="fa-solid fa-delete-left"></i></button>
                </div> -->
                <div>
                    <div class="submit">
                        <button type="submit" name="login_table" >ENTER</button>
                    </div>
            </form>
            <?php
                        if (isset($_POST['login_table'])) {
                            $pincode = $_POST['pin_code'];
                            $xacthuc = account::find($pincode);

                            if ($xacthuc != '') {
                                $IdNV = $xacthuc->Id;
                                setcookie("username_logged", $IdNV, time()+3600, "/","", 0);
                                $_SESSION['IdNV'] = $IdNV;

                                header('location:index.php');
                            }else{
                                echo "Không tìm thấy tài khoản nhân viên";
                            }
                        }
                        ?>
        </div>
    </div>
</body>

</html>