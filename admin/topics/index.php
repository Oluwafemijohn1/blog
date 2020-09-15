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
    <link rel="stylesheet" href="../../css/style.css">
    <!-- Admin styling -->
    <link rel="stylesheet" href="../../css/admin.css">
    <title>Admin Section -Manage Topics</title>
</head>
<body>
    <header>
        <div class="logo">
            <h1 class="logo-text"><span>Ephemzy</span>Inspires</h1>
        </div>
        <i class="fa fa-bars menu-toggle"></i>
        <ul class="nav">
            
            <li><a href="#">
                <i class="fa fa-user"></i>
                Oluwafemi Ogundipe
            <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
            </a>
                <ul>
                    
                    <li><a href="" class="logout">Logout</a></li>  
                </ul>
                          
            </li>            
        </ul>
    </header>
    <!-- admin page wrapper -->
    <div class="admin-wrapper1 clearfix">
    <!-- Left sidebar -->
    <div class="left-sidebar">
        <ul>
            <li><a href="../posts/index.html">Manage Posts</a></li>
            <li><a href="../users/index.html">Manage Users</a></li>
            <li><a href="index.html">Manage Topics</a></li>
        </ul>
    </div>
    <!-- //Left sidebar -->
    <!-- Admin content -->
    <div class="admin-content">
        <div class="buuton-group">
            <a href="create.html" class="btn btn-big">Add Topics</a>
            <a href="index.html" class="btn btn-big">Manage Topics</a>
        </div>
        <div class="content">
            <h2 class="page-title">Manage Topics</h2>
            <table>
                <thead>
                    <th>SN</th>
                    <th>Name</th>
                    
                    <th colspan="2">Action</th>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Poetry</td>
                        
                        <td><a href="#" class="edit">Edit</a></td>
                        <td><a href="#" class="delete">Delete</a</td>
                        
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Tech</td>
                        
                        <td><a href="#" class="edit">Edit</a></td>
                        <td><a href="#" class="delete">Delete</a</td>
                        
                    </tr>
                     <tr>
                        <td>3</td>
                        <td>Life Lessons</td>
                        
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
    <script src="../../js/scripts.js"></script>

</body>
</html>