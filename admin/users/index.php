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
            <?PHP include(ROOT_PATH."/app/include/messages.php"); ?>
            <table>
                <thead>
                    <th>SN</th>
                    <th>Username</th>
                    <th>Email address</th>
                    <th colspan="2">Action</th>
                </thead>
                <tbody>
                    <?php foreach ($admin_users as $key => $user): ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $user['names']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><a href="edit.php?id=<?php echo $user['id']; ?>" class="edit">Edit</a></td>
                        <td><a href="index.php?delete_id=<?php echo $user['id']; ?>" class="delete">Delete</a</td>
                        
                    </tr>
                    <?php endforeach; ?>
                     
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