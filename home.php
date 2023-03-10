<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/VSCODES/EmailCode/bootstrap-5.2.0-dist/css/bootstrap.css">
        

</head>
<body>
    <div class="home" align="center">
    <?php require_once('header.php'); 
    ?>

    <h1>Home Page</h1>
    </div>
<div class="tiles"> 
    <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="compose.php"><p style="font-size: 25px;">Compose</p></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="sent.php"><p style="font-size: 25px;">Sent</p></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Inbox.php"><p style="font-size: 25px;">Inbox</p></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="Draft.php"><p style="font-size: 25px;">Draft</p></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="logout.php"><p style="font-size: 25px;">Logout</p></a>
  </li>
</ul>
</div>   
<section class="con">
    <div class="container py-5 h-auto "> 
    <div class="row d-flex justify-content-center align-items-center h-100 "> 
    <div class="col-12 col-xxl-10 col-lg-8 col-xl-5 ">  
    <div class="card shadow-2-medium" style="border-radius: 1rem;">   
    <div class="card-body p-5 text-center">
    <h2>ALL INBOXES</h2><br><br>
    <?php require_once("home_inbox.php"); ?>
    <h2>SENT MAIL</h2><br><br>
    <?php require_once("home_sent.php"); ?>
    </div> 
	</div>   
	</div>
	</div>
	</div>
    </section>

</body>
</html>