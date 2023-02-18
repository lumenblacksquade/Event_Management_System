<?php
    
    include 'connect.php';
    if(isset($_POST['submit']))
    {
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $flag=true;
        $query="SELECT * FROM `users`";
        $res=mysqli_query($conn,$query);
        while($row=mysqli_fetch_assoc($res))
        {
            if($username==$row['username'])
            {
                header('location: login.php?msg=exists');
                $flag=false;
            }
        }
        if($flag)
        {
            $query="INSERT INTO `users`(username,email,password) Values('".$username."','".$email."','".$password."')";
            mysqli_query($conn,$query);
            if(!$conn)
            {
                header('location:register.php?msg=error');
            }
            header('location:home.php?user='.$username);
        }
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='styles.css'>
    <script src='main.js'></script>
    <title>Register User</title>
</head>
<body class="container card text-center mt-5 border-success signin-related-page" >
    <div class="logincontent" style="width:350px;" align="left">
        <div class="p-4" >
            <form action="register.php" method="post">
                <div  class="form-group">
                    
                <label class="text-align" > Username</label>
                    <input placeholder="username" class="form-control"  name='username'/>
                </div>
                <div  class="form-group">
                    
                <label class="text-align"> Email</label>
                    <input placeholder="email id" class="form-control"  name="email" type="email"/>
                </div>
                <div  class="form-group">
                    <label class="text-align"> Password</label>
                    <input placeholder="password" class="form-control" name="password" type="password"/>
                </div>
                <div class="p-4">
                    <input type="submit" class="btn btn-primary " name="submit"/>
                </div>
            </form></br></br>
            <p class="worddark">already have a account? <a class="worddark" href="login.php">Login here</a></p>
            

        </div>
    </div>
</body>
</html>