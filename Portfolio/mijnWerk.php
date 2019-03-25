<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mijn werk || Luuk Vogel</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	
	<?php 
		include 'include/navbar.php';
		include 'include/slider.php';
	 ?>
	
	<div class="container">
		<div class="row">
			<div class="col-sm">
				<div class="card" style="width: 18rem;">
				 	<img class="card-img-top" src="mijnWerkImg/pizza.png" alt="Pizza Calculator">
				  		<div class="card-body">
				    		<h5 class="card-title">Pizza Calculator</h5>
				    		<p class="card-text">De opdracht was hier om een applicatie te maken waar je een pizza uit kan kiezen met de grootte en het aantal pizza's. Dan word er een prijs uitberekend.</p>
				    		<a href="Opdrachten/pizzaCalculator.html" class="btn btn-primary">Ga naar de opdracht</a>
				  		</div>
				</div>
			</div>
				<div class="col-sm">
					<div class="card" style="width: 18rem;">
				  		<img class="card-img-top" src="mijnWerkImg/lingo.png" alt="Lingo">
				  		<div class="card-body">
				    		<h5 class="card-title">Lingo</h5>
				    		<p class="card-text">De opdracht was om Lingo te programmeren. Dit is met veel pijn en moeite gelukt. Neem gerust een kijkje.</p>
				    		<a href="Opdrachten/Lingo/index.html" class="btn btn-primary">Ga naar de opdracht</a>
				  		</div>
				</div>
			</div>
		</div>
	</div>

	<?php 
		include 'include/footer.php'
	 ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>