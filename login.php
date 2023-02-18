<?php

include 'connect.php';
    if(isset($_POST['submit']))
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $flag=true;
        $query="SELECT * FROM `users`";
        $res=mysqli_query($conn,$query);
        while($row=mysqli_fetch_assoc($res))
        {
            if($row['username']==$username && $row['password']==$password)
            {
                header('location:home.php?user='.$username);
                $flag=false;
            }
        }
        if($flag){
        header('location:register.php?unregistered=1');
        }
    }
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title> Login Page</title>
        <link rel="stylesheet" href="style.css">
         <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='styles.css'>
    <script src='main.js'></script>
    </head>
    <body class="container m-5">
        <div class="logincontent  " align="center">
            <div class="logintop">
                <h1>Login Page</h1>
            </div></br></br></br></br>
            <div class="loginbottom">
            <form action="login.php" method="post" autocomplete="off">
            
                <div  class="form-group">
                    
                <label class="text-align P-2"> Username</label>
                <input type="text" name="username" placeholder="Enter Your Username" class="textbox" id="username" required></br></br>
                </div>
                <div  class="form-group">
                    
                <label class="text-align P-2"> password</label><input type="password" name="password" placeholder="Enter Your Password" class="textbox" id="password" required></br></br></br>
                </div>
                <input type="submit" class="btn btn-primary" value="Login" name="submit">
            </form></br></br>
            <p class="worddark">New to this page? <a class="worddark" href="register.php">Register here</a></p>
            </div>
        </div>
    </body>
</html>