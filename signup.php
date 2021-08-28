<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alchemia - Sign Up</title>
    <link rel="shortcut icon" href="img/logo-icon.png">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/signup.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="signup-container">
        <div class="header">
            <nav class="navbar fixed-top navbar-expand-lg shadow-sm">
                <div class="container-fluid">
                    <a class="navbar-brand brand" href="index.php"><img src="img/logo-icon.png" alt="logo" width="46" height="46" class="d-inline-block align-text-top"><span> </span>Alchemia</a>
                </div>
                <div class="me-auto"></div>
                <form class="form-inline form-custom">
                    <button class="btn btn-custom" type="button"><a href="login.php" style="text-decoration: none; color: #1cb0f6; font-weight: bold;">Login</a></button>
                </form>
            </nav>
        </div>
        <div class="container-fluid container-custom">
            <h3 class="display-7">Create your profile</h3><br>
            <div class="input-group input-group-md mb-3">
                <input type="number" class="form-control" placeholder="Age">
            </div>
            <div class="input-group input-group-md mb-3">
                <input type="text" class="form-control" placeholder="Name">
            </div>
            <div class="input-group input-group-md mb-3">    
                <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="input-group input-group-md mb-3">
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="input-group input-group-md mb-3">
                <input type="button" class="form-control btn-create" value="CREATE ACCOUNT">
            </div>
            <hr class="mt-4 mb-3" style="width: 29%; margin-left: 28.16rem;">
            <div class="para">
                <p class="small">By signing in to Alchemia, you agree to our <b>Terms</b> and <b>Privacy Policy</b></p>
            </div>
        </div>
    </div>
<?php include 'includes/footer.php'?>