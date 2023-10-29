<?php
session_start();
$login_email = $_POST["email"];
$login_name = $_POST['name'];
$login_password = $_POST["password"];
$login_role = $_POST['login_role'];
$error_status = false;

if(empty($login_email)){
    $_SESSION["login_email_error"] = "Your Email is required";
    $error_status = true;
}

if(empty($login_password)){
    $_SESSION["login_password_error"] = "Your Password is required";
    $error_status = true;
}

if($error_status){
    header("location: Login.php");
}else{
    //echo $login_role;
    if($login_role == 'admin'){
        $_SESSION['login_email'] = $login_email;
        $_SESSION['login_name']  = $login_name;
        $_SESSION['login_password'] = $login_password;
        $_SESSION['login_role'] = $login_role;
        header("location: admin.php");
    }else{
        $_SESSION['login_email'] = $login_email;
        $_SESSION['login_name']  = $login_name;
        $_SESSION['login_password'] = $login_password;
        $_SESSION['login_role'] = $login_role;
        header('location: customerdb.php');
    }
}

?>