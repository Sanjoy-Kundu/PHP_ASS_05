<?php session_start();
?>
<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    body{
        background-color: rgba(248, 208, 198, 0.8);
    }
</style>
  <body>
    <div class="container mt-5 pt-5">
            <section class="w-50 mx-auto">
            <h3 class="text-center text-primary">Wellcome to My Room! Please Login Here</h3>

               
                <form action="login_post.php" method="POST">
                <div class="mb-3" style="display:none;">
                    <label for="" class="form-label"><h4>Role</h4></label>
                    <input name="login_role" value="<?php if(isset($_SESSION['user_role'])){echo $_SESSION['user_role'];}?>" type="text" class="form-control" id="" placeholder="Enter Your role">
                    
                </div>
                <div class="mb-3" style="display:none;">
                    <label for="" class="form-label"><h4>Your Name</h4></label>
                    <input name="name" value="<?php if(isset($_SESSION['register_name'])){echo $_SESSION['register_name'];}?>" type="text" class="form-control" id="" placeholder="Enter Your Email">
                    <?php if(isset($_SESSION["login_email_error"])):?>
                        <p class="text-danger"><?=$_SESSION["login_email_error"]?></p>
                    <?php endif;?>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"><h4>Your Email</h4></label>
                    <input name="email" value="<?php if(isset($_SESSION['register_email'])){echo $_SESSION['register_email'];}?>" type="email" class="form-control" id="" placeholder="Enter Your Email">
                    <?php if(isset($_SESSION["login_email_error"])):?>
                        <p class="text-danger"><?=$_SESSION["login_email_error"]?></p>
                    <?php endif;?>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"><h4>Your Password</h4></label>
                    <input name="password" value="<?php if(isset($_SESSION['register_password'])){echo $_SESSION['register_password'];}?>" type="password" class="form-control" id="" placeholder="Enter Your Password">
                    <?php if(isset($_SESSION["login_password_error"])):?>
                        <p class="text-danger"><?=$_SESSION["login_password_error"]?></p>
                    <?php endif;?>
                </div>
                <?php session_unset() ?>
                <button class="btn btn-warning">Login</button>
            </form>
        <p>Create an account! Please <a href="./Registration.php">Registation</a>here</p>
            </section>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>