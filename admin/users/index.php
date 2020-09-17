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
    <title>Admin Section -Manage users</title>
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
            <h2 class="page-title">Manage Users</h2>
            <table>
                <thead>
                    <th>SN</th>
                    <th>Username</th>
                    <th>Admin</th>
                    <th colspan="2">Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ephemzy</td>
                        <td>Role</td>
                        <td><a href="#" class="edit">Edit</a></td>
                        <td><a href="#" class="delete">Delete</a</td>
                        
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>John</td>
                        <td>Author</td>
                        <td><a href="#" class="edit">Edit</a></td>
                        <td><a href="#" class="delete">Delete</a</td>
                        
                    </tr>
                     
                </tbody>
            </table>
        </div>
    </div>
    <!-- //Admin content -->
    </div>
    <!-- //admin page wrapper -->

    <!-- JqQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   
    <!-- Custom Script -->
    <script src="../../assets/js/scripts.js"></script>

</body>
</html>