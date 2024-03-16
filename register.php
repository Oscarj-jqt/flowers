<?php

@include 'config.php';

if(isset($_POST['submit'])){


    $filter_name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $name = mysqli_real_escape_string($conn, $filter_name);
    $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = mysqli_real_escape_string($conn, $filter_email);
    $filter_pass = filter_var($_POST['pass'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $pass = mysqli_real_escape_string($conn, md5($filter_pass));
    $filter_cpass = filter_var($_POST['cpass'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $cpass = mysqli_real_escape_string($conn, md5($filter_cpass));
    /* $user_type = $_POST['user_type'];*/

    $select_users = mysqli_query($conn, " SELECT * FROM users WHERE email = '$email'") or die ('query failed');

    /*$result = mysqli_query($conn, $select);*/

    if(mysqli_num_rows($select_users) > 0) {

        $message[] = 'user already exist !';
    
    }else{
        if($pass != $cpass){
            $message[] = 'confirm password not matched !';
        }else{
            mysqli_query($conn, "INSERT INTO `users`(name, email, password) VALUES
            ('$name', '$email', '$pass')") or die('query failed');
            $message[] = 'registered succesfully !';
            header('location:login.php');
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>

    <link rel="stylesheet" href="./styles.css">
</head>
<body>

<?php
if(isset($message)){
    foreach($message as $message){
        echo '
        <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
    }
}
?>
    <section class="form-container">

        <form action="" method="post">
            <h3>register now</h3>
            <input type="text" name="name" class="box" placeholder="enter your username"  required >
            <input type="email" name="email" class="box" placeholder="enter your email"  required >
            <input type="password" name="pass" class="box" placeholder="enter your password"  required >
            <input type="password" name="cpass" class="box" placeholder="confirm your password"  required >
            <input type="submit" name="submit" value="register now" class="btn">
            <p>already have an account ? <a href="login.php">login now</a></p>
        </form>

        </section>
    
</body>
</html>