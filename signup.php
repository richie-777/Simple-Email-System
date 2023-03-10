<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/VSCODES/EmailCode/bootstrap-5.2.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="Style.css">
</head>
<body>
    <?php require_once('header.php'); ?>

    <form action="process-signup.php" method="post" id="signup" novalidate>
    <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
    <div class="card shadow-2-medium" style="border-radius: 1rem;">
    <div class="card-body p-5 text-center">
    <h1>Signup</h1><br/><br/>
        <div class="form-outline mb-4">
            <label for="name"><h4>Name</h4></label>
            <input class="form-control" type="text" id="name" name="name" placeholder="Enter Name">
        </div><br/>
        <div class="form-outline mb-4">
            <label for="email"><h4>Email</h4></label>
            <input class="form-control" type="email" id="email" name="email" placeholder="Enter Mail Id"> 
        </div><br/>       
        <div class="form-outline mb-4">
            <label for="password"><h4>Password</h4></label>
            <input class="form-control" type="password" id="password" name="password" placeholder="Enter Password">           
        </div><br/>       
        <div class="form-outline mb-4">
            <label for="password_confirmation"><h4>Repeat password</h4></label>
            <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" placeholder="Re-Enter Password">          
        </div><br/>
        <button class="btn btn-primary btn-lg btn-block" type="submit" value="Login">Sign Up</button><br><br>
        <a href="login.php">Already have an Account?<h6>Login here</h6></a>
    </div>
    </div>
    </div>
    </div>
    </div>
    </form>
</body>
</html>








