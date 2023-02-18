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
    <title>Register User</title>
</head>
<body>
    <div>
        <div>
            <form action="register.php" method="post">
                <input placeholder="username" name='username'/>
                <input placeholder="email id" name="email" type="email"/>
                <input placeholder="password" name="password" type="password"/>
                <input type="submit" name="submit"/>
            </form>
        </div>
    </div>
</body>
</html>