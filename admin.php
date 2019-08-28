<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="">
 <meta name="author" content="">
 <title>Admin</title>
 
 <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 
 <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 
 <link href="css/sb-admin.css" rel="stylesheet">
</head>
<body class="bg-dark" align="center">
 <div class="container">
   <div class="card card-login mx-auto mt-5">
     <div class="card-header" align="center" style="color:blue";><h1>Admin</h1></div><br><hr><br><br>
     <div class="card-body">
       <form method="post" action="login.php" align="center">
          <?php include('errors.php'); ?>
         <div class="form-group" >
           <label for="exampleInputEmail1"><b>Username</b></label>
           <input class="form-control"  type="text" name="username">
         </div></br>
         <div class="form-group">
           <label for="exampleInputPassword1"><b>Password</b></label>
           <input class="form-control"  type="password" name="password">
         </div></br>
         <div class="form-group">
           <div class="form-check">
             <label class="form-check-label">
               <input class="form-check-input" type="checkbox"> Remember Password</label>
           </div>
         </div></br>
         <button type="submit" class="btn btn-primary btn-block" name="login_user">Login</button>
       </form></br>
      
     </div>
   </div>
 </div>
 
 <script src="vendor/jquery/jquery.min.js"></script>
 <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 
 <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>
</html>