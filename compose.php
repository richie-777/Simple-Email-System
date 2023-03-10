<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
<script src="js/validation.js"></script>
<link rel="stylesheet" href="/VSCODES/EmailCode/bootstrap-5.2.0-dist/css/bootstrap.css">
<link rel="stylesheet" href="Style.css">

<?php
require_once('header.php');
require_once("tiles.php"); 
?>
<h2 align="center">COMPOSE THE MAIL</h2>
<form action="compose-process.php" method="post" id="emailForm"  id="compose" novalidate>
<div class="container py-7 h-auto">
    <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-12 col-xxl-10 col-xxl-6 col-xxl-5">
    <div class="card shadow-2-medium" style="border-radius: 1rem;">
    <div class="card-body p-5">
	<div class="form-group">				  
	  <label class="control-label col-sm-2" for="fname"><b>Sender</b></label><br/>
	  <div class="col-sm-10">          
		<input type="email" class="form-control" id="sender" name="sender" placeholder="Enter Sender mail" >
	  </div>
	</div>				
	<div class="form-group">
	  <label class="control-label col-sm-3" for="email"><b>Reciever</b></label><br/>
	  <div class="col-sm-10">
		<input type="email" class="form-control" id="reciever" name="reciever" placeholder="Enter Reciever mail" >
	  </div>
	</div>
    <div class="form-group">
	  <label class="control-label col-sm-2" for="comment"><b>Subject</b></label><br/>
	  <div class="col-sm-10">
		<textarea class="form-control" rows="1" name="subject" id="subject"  placeholder="Enter Subject here"></textarea>
	  </div>
	</div>
	<div class="form-group">
	  <label class="control-label col-sm-4" for="comment"><b>Message</b></label><br/>
	  <div class="col-sm-10">
		<textarea class="form-control" rows="5" name="message" id="message"  placeholder="Enter Message here"></textarea>
	  </div>
	</div>
<div class="buttons" align="center">
<button class="btn btn-primary" type="submit" name="submit" value="send">Send</button><br><br>
<button class="btn btn-primary" type="submit" name="submit" value="save">Save</button>
</div>
	</div>
	</div>
	</div>
	</div>
	</div>
</form>