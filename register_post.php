<?php 
session_start();
$file = 'users.json'; //akta file nilam
//users = file_exits($userFile) ? json data decode korbo(file_get_contets diye ($userFile), true(must be added)) : [];
$users = file_exists($file)? json_decode(file_get_contents($file), true): [];

//save user 
function saveUsers($users, $file){
    file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));
}


if(isset($_POST['register'])){
    $username = $_POST['user_name'];
    $useremail = $_POST['user_email'];
    $userpassword = $_POST['user_password'];
    $userrole = $_POST['role'];
    $error_status = false;

    if(empty($username)){
        $_SESSION['name_error'] = "Your name is required";
        $error_status = true;
    }else{
        $_SESSION['register_name'] = $username;
    }

    if(empty($useremail)){
        $_SESSION['email_error'] = "Your email is required";
        $error_status = true;
    }else{
        $_SESSION['register_email'] = $useremail;
    }

 

    if(empty($userpassword)){
        $_SESSION['password_error'] = "Your password is required";
        $error_status = true;
    }else if(strlen($userpassword) < 8){
        $_SESSION['password_error'] = "Password must be 8 character or more";
        $error_status = true;
     }else{
        $_SESSION['register_password'] = $userpassword;
     }


     if(empty($useremail)){
        $_SESSION['userrole'] = "Your role is required";
        $error_status = true;
    }else{
        $_SESSION['user_role'] = $userrole;
    }

     //redirect error message
     if($error_status){
        header("location: Registration.php");
     }else{
        $users[$useremail] = [
            'user_name' => $username,
            'user_email' => $useremail,
            'user_password' => $userpassword,
            'user_role' => $userrole
        ];
        saveUsers($users, $file);
        header('location: Login.php');
     }
}
?>