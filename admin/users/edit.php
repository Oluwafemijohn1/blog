<?php 
include("../../path.php"); 

include(ROOT_PATH . '/app/controllers/users.php');
adminOnly();
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
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/admin.css">
    <title>Admin Section -Edit Users</title>
</head>
<body>
    <!-- Admin header here -->
    <?php include(ROOT_PATH . "/app/include/adminHeader.php"); ?>

    <!-- admin page wrapper -->
    <div class="admin-wrapper1 clearfix">
    <!-- Left sidebar -->
    <?php include(ROOT_PATH . "/app/include/adminSidebar.php"); ?>

    <!-- //Left sidebar -->
    <!-- Admin content -->
    <div class="admin-content">
        <div class="buuton-group">
            <a href="create.php" class="btn btn-big">Add User</a>
            <a href="index.php" class="btn btn-big">Manage Users</a>
        </div>
        <div class="content">
            <h2 class="page-title">Edit User</h2>
            <?php include(ROOT_PATH . '/app/helpers/formErrors.php'); ?>
           <form action="edit.php" method="post">
           <input type="hidden" name="id" value="<?php echo $id; ?>" >
           <div>
                <label for="">Username</label>
                <input type="text" name="names" value="<?php echo $names; ?>" class="text-input">
            </div>

            <div>
                <label for="">Email</label>
                <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
            </div>

            <div>
                <label for="">Password</label>
                <input type="password" name="password"   value="<?php echo $password; ?>" class="text-input">
            </div>

            <div>
                <label for="">Password Confirmation</label>
                <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>"  class="text-input">
            </div>
            <div>
                <?php if(isset($isAdmin) && $isAdmin == 1 ): ?>
                    <label >
                        <input type="checkbox" name="isAdmin" checked>
                        Admin
                    </label>
                <?php else: ?>
                    <label >
                        <input type="checkbox" name="isAdmin">
                        Admin
                    </label>
                <?php endif; ?>
                
                
            </div>    
                <div>
                    <button type="submit" name="update-user" class="btn btn-big">Update User</button>
                </div>
           </form>
        </div>
    </div>
    <!-- //Admin content -->
    </div>
    <!-- //admin page wrapper -->

    <!-- JqQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <!-- CKeditor -->
   <script src="https://cdn.ckeditor.com/ckeditor5/22.0.0/classic/ckeditor.js"></script>
    <!-- Custom Script -->
    <script src="../../assets/js/scripts.js"></script>

</body>
</html>