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
    </head>
    <body>
        <div class="logincontent" align="center">
            <div class="logintop">
                <h1>Login Page</h1>
            </div></br></br></br></br>
            <div class="loginbottom">
            <form action="login.php" method="post" autocomplete="off">
            <input type="text" name="username" placeholder="Enter Your Username" class="textbox" id="username" required></br></br>
            <input type="password" name="password" placeholder="Enter Your Password" class="textbox" id="password" required></br></br></br>
            <input type="submit" class="btn" value="Login" name="submit">
            </form></br></br>
            <p class="worddark">New to this page? <a class="worddark" href="register.php">Register here</a></p>
            </div>
        </div>
    </body>
</html>