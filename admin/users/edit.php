<?php include("../../path.php"); ?>
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
           <form action="create.php" method="post">
            <div>
                <label for="">Username</label>
                <input type="text" name="username" class="text-input">
            </div>

            <div>
                <label for="">Email</label>
                <input type="email" name="email" class="text-input">
            </div>

            <div>
                <label for="">Password</label>
                <input type="password" name="password" class="text-input">
            </div>

            <div>
                <label for="">Password Confirmation</label>
                <input type="password" name="passwordConf" class="text-input">
            </div>
            <div>
                <label for="">Role</label>
                <select name="role" id="" class="text-input">
                    <option value="Author">Author</option>
                    <option value="Admin">Admin</option>
                  
                </select>
            </div>   
                <div>
                    <button type="submit" class="btn btn-big">Update User</button>
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