<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mijn skills || Luuk Vogel</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	
	<?php 
		include 'include/navbar.php';
		include 'include/slider.php';
	 ?>
	
	<form id="contact-form" method="post" action="contact.php" role="form">

	    <div class="messages"></div>

	    <div class="controls">

	        <div class="row">
	            <div class="col-md-6">
	                <div class="form-group">
	                    <label for="form_name">Voornaam *</label>
	                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Voer uw voornaam in *" required="required" data-error="Firstname is required.">
	                    <div class="help-block with-errors"></div>
	                </div>
	            </div>
	            <div class="col-md-6">
	                <div class="form-group">
	                    <label for="form_lastname">Achternaam *</label>
	                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Voer uw achternaam in *" required="required" data-error="Lastname is required.">
	                    <div class="help-block with-errors"></div>
	                </div>
	            </div>
	        </div>
	        <div class="row">
	            <div class="col-md-6">
	                <div class="form-group">
	                    <label for="form_email">Email *</label>
	                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Voer hier uw email in *" required="required" data-error="Valid email is required.">
	                    <div class="help-block with-errors"></div>
	                </div>
	            </div>
	            <div class="col-md-6">
	                <div class="form-group">
	                    <label for="form_need">Onderwerp *</label>
	                    <select id="form_need" name="need" class="form-control" required="required" data-error="Defineer uw reden voor contact.">
	                        <option value=""></option>
	                        <option value="Request quotation">Request quotation</option>
	                        <option value="Request order status">Request order status</option>
	                        <option value="Request copy of an invoice">Request copy of an invoice</option>
	                        <option value="Other">Other</option>
	                    </select>
	                    <div class="help-block with-errors"></div>
	                </div>
	            </div>
	        </div>
	        <div class="row">
	            <div class="col-md-12">
	                <div class="form-group">
	                    <label for="form_message">Bericht *</label>
	                    <textarea id="form_message" name="message" class="form-control" placeholder="Bericht voor Luuk Vogel *" rows="4" required="required" data-error="Laat alstublieft een bericht achter."></textarea>
	                    <div class="help-block with-errors"></div>
	                </div>
	            </div>
	            <div class="col-md-12">
	                <input type="submit" class="btn btn-success btn-send" value="Send message">
	            </div>
	        </div>
	        
	    </div>

	</form>

	<?php 
		include 'include/footer.php'
	 ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>