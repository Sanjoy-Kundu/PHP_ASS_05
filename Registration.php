<?php session_start() ?>
<!doctype html>
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
                <h3 class="text-center text-primary">Wellcome to My Room! Please Registration Here</h3>
                <form action="register_post.php" method="POST">
                <div class="mb-3">
                    <label for="" class="form-label"><h4>Your Name</h4></label>
                    <input type="text" name="user_name" class="form-control" id="" placeholder="Enter Your Name">
                    <?php if(isset($_SESSION["name_error"])):?>
                    <p class="text-danger"><?=$_SESSION["name_error"]?></p>
                    <?php endif;?>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"><h4>Your Email</h4></label>
                    <input type="email" name="user_email" class="form-control" id="" placeholder="Enter Your Email">
                    <?php if(isset($_SESSION["email_error"])):?>
                    <p class="text-danger"><?=$_SESSION["email_error"]?></p>
                    <?php endif;?>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"><h4>Your Password</h4></label>
                    <input type="password" name="user_password" class="form-control" id="" placeholder="Enter Your Password">
                    <?php if(isset($_SESSION["password_error"])):?>
                    <p class="text-danger"><?=$_SESSION["password_error"]?></p>
                    <?php endif;?>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"><h4>user Role</h4></label>
                    <select class="form-select" name="role" aria-label="Default select example">
                        <option selected>--Choose One --</option>
                        <option value="admin">Admin</option>
                        <option value="customer">Customer</option>
                        </select>
                        <?php if(isset($_SESSION["role_error"])):?>
                        <p class="text-danger"><?=$_SESSION["role_error"]?></p>
                        <?php endif;?>
                    </div>
                <?php session_unset()?>
                <button class="btn btn-warning" name="register">Registration</button>
                    <!-- <input type="button" value="Registration" name="registration" class="btn btn-primary"> -->
            </form>
        <p>Already Have an account please <a href="./Login.php">Login</a></p>
            </section>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>