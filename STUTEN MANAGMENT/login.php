<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>

 <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body background="playground.jpg.jpg" class="boby_deg" >
    <center>

    <div class="form_deg" >

    <center class="title_deg">
       Login Form 
       
       <h4>
        <?php

        error_reporting(0);
         session_start();
         session_destroy();
       echo $_SESSION['loginMessage'];
        ?>
       </h4>

    </center>

    <form action="login_check.php" method="POST" class="login_form">
        <div>
        <label class="labal_deg">User Name</label>
        <input type="text" name="username">
       </div>
        
        <div>
        <label class="labal_deg" >Password</label>
        <input type="Password" name="password">
       </div>

        <div>
  
        <input class="btn btn-primary" type="submit" name="submit" value="Login">
       </div>
    </form>
    </div>
    </center>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>