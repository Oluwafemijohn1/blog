<?php include("path.php"); ?>
<?php 
include(ROOT_PATH . '/app/controllers/users.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FOnt awesome -->
    <script src="https://kit.fontawesome.com/f76a3423dc.js" crossorigin="anonymous"></script>

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
    <!-- Custome Styling -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Register</title>
</head>
<body>
   <!-- TODO: INCLUDE -->
   <?PHP include(ROOT_PATH. "/app/include/header.php"); ?>
    
    <div class="auth-content">
        <form action="register.php" method="post">
            <h2 class="form-title">Register</h2>

           <?php include(ROOT_PATH . "/app/helpers/formErrors.php") ?>
            <div>
                <label for="">Username</label>
                <input type="text" value="<?php echo $names; ?>" name="names" class="text-input">
            </div>

            <div>
                <label for="">Email</label>
                <input type="email" value="<?php echo $email; ?>" name="email" class="text-input">
            </div>

            <div>
                <label for="">Password</label>
                <input type="password" value="<?php echo $password; ?>" name="password" class="text-input">
            </div>

            <div>
                <label for="">Password Confirmation</label>
                <input type="password" value="<?php echo $passwordConf; ?>" name="passwordConf" class="text-input">
            </div>
            <button type="submit" class="btn btn-big" name="register-btn">Register</button>

            <p>Or <a href="<?php echo BASE_URL . 'login.php' ?>">Sign In</a></p>

        </form>
    </div>

    <!-- JqQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>

</body>
</html>