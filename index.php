<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>index Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel='stylesheet' type='text/css' media='screen' href='styles.css'>
    <script src='main.js'></script>
    <style>
    .container-outer{
        display: flex;
        justify-content: space-around;
    }
</style>
</head>
<body>
    <?php 
    echo "<h1>php</h1>"
    ?>
    <header class="header-nav">
        <div class="d-flex ">
            <div class="col d-flex  mr-6">
                <a href="#" class="mr-6 mas">
                    <h1 width="90px">HOME</h1>
                </a>
            </div>
            <div class="col d-flex align-items-end" >
                
                <div class="d-flex head-user-profile " >
                    <ul class="account-links-group d-flex ">
                        <li class="nav-link  login-btn">
                            <a class="nav-link   text-primary text-center px-4" href="login.php">Login</a>
                        </li>
                        <li class="nav-link  signup-btn">
                            <a class="nav-link btn btn-primary text-white px-4" href="register.php">Sign up</a>
                        </li>
                    </ul>
                </div>
                
            </div>
            
        </div>
    </header>


<body>
    <nav>
        <div class='container-outer'>
        <div><button class="btn btn-primary" style="margin-top: 20px;">Event Management</button></div>
        <div><input class="form-control" type="text" style="margin-top: 20px; " placeholder="Search Events"></div>
        <div><button class="btn btn-primary" style="margin-top: 20px;">Booking</button></div>
        
        </div>
      
    </nav>
    
    
</body>
</html>