<?php
session_start();
// print_r($_POST);

if(isset($_POST['register'])){
    echo "button click";
}else{
    //catch data form input field
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];
    $role = $_POST['role'];
    $error_status = false;
    

    //empty check
    if(empty($name)){
        $_SESSION["name_error"] = "Name field is required";
        $error_status = true;
    }
    
    if(empty($email)){
        $_SESSION["email_error"] = "Email field is required";
        $error_status = true;
    }else{
        $_SESSION['login_email'] = $email;
    }
    
    if(empty($password)){
        $_SESSION["password_error"] = "Email field is required";
        $error_status = true;
    }else if(strlen($password)<8){
        $_SESSION["password_error"] = "Password must be 8 character or more";
        $error_status = true;
    }else{
        $_SESSION['login_password'] = $password;
    }
    
    
    if(empty($role)){
        $_SESSION["role_error"] = "Please Select One";
        $error_status = true;
    }else{
        $_SESSION['user_role'] = $role;
    }
}

if($error_status){
    header("location: Registration.php");
}else{
    header("location: Login.php");
    //echo $_SESSION['user_role'];
}





?>