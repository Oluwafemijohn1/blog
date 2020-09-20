<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/topics.php');
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
    <title>Admin Section -Manage Topics</title>
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
            <a href="create.php" class="btn btn-big">Add Topics</a>
            <a href="index.php" class="btn btn-big">Manage Topics</a>
        </div>
        <div class="content">
            <h2 class="page-title">Manage Topics</h2>
            <?PHP include(ROOT_PATH."/app/include/messages.php"); ?>
            <table>
                <thead>
                    <th>SN</th>
                    <th>Name</th>
                    
                    <th colspan="2">Action</th>
                </thead>
                <tbody>
                    <?php foreach ($topics as $key => $topic): ?>
                    <tr>
                        <td><?php echo $key +1; ?></td>
                        <td><?php echo $topic['title']; ?></td>                        
                        <td><a href="edit.php?id=<?php echo $topic['id']; ?>" class="edit">Edit</a></td>
                        <td><a href="index.php?del_id=<?php echo $topic['id']; ?>" class="delete">Delete</a</td>                        
                    </tr>
                    
                    <?php endforeach;?>
                    
                    
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