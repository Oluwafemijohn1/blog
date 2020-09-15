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
    <link rel="stylesheet" href="../../css/admin.css">
    <title>Admin Section -Add Topic</title>
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
            <a href="create.html" class="btn btn-big">Add Topic</a>
            <a href="index.html" class="btn btn-big">Manage Topics</a>
        </div>
        <div class="content">
            <h2 class="page-title">Add Topic</h2>
           <form action="create.html" method="post">
               <div>
                   <label for="">Name</label>
                   <input type="text" name="name" id="" class="text-input">
               </div>
               <div>
                    <label for="">Description</label>
                    <textarea name="description" id="body" class="text-input"></textarea>
                </div>
                
                <div>
                    <button type="submit" class="btn btn-big">Add Topic</button>
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
    <script src="../../js/scripts.js"></script>

</body>
</html>