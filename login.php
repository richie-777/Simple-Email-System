<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/VSCODES/EmailCode/bootstrap-5.2.0-dist/css/bootstrap.css">
	<link rel="stylesheet" href="Style.css">
</head>
<body>
<?php
session_start();
$err = '';

if(!empty($_POST["email"]) && !empty($_POST["password"])){
	
	require_once("login.class.php");
	$obj = new Login();	
	$res = $obj->checkLogin($_POST["email"],$_POST["password"]);

	if($res==1){
		$_SESSION["user"] = $_POST["email"];
		echo "Welcome '.$user'";
		header('Location: home.php');
		
	}else{
		$err = "<b>Invalid Credentials</b>";
	}
}
require_once("header.php");
?>
	<div class="login">
	<form action="login.php" method="post">
	<div class="container py-5 h-auto">
    <div class="row d-flex justify-content-center align-items-center h-50">
    <div class="col-12 col-lg-10 col-lg-10 col-xl-5">
    <div class="card shadow-2-medium" style="border-radius: 1rem;">
    <div class="card-body p-5 text-center">
	<h2>Login Page</h2><br/><br/>
	<label for="email"><h4>Email-id</h4></label>
		<input class="form-control" type="text" name="email" placeholder="Enter Email id" /><br />
		<label for="password"><h4>Password</h4></label>
		<input type="password" class="form-control" name="password" placeholder="Enter Password here" /><br />
	    <input type="submit" value="Login" class="btn btn-primary"/><br/><br/>
		<a href="signup.php">Dont have an Account?<h6>Create One</h6></a>
	</div>
	</div>
	</div>
	</div>
	</div> 	
		</form>
		</div>
			<?php
			if(!empty($err)){
				echo '<div class="alert alert-danger"  align="center">'.$err.'</div>';
			}
			?>		
</body>
</html>

