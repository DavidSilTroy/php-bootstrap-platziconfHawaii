<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Cursophp</title>
		<meta name="author" content="David Silva Troya" />
		<meta name="copyright" content="David Silva Troya" />
		<!-- <meta name="keywords" content="Ciudad, buscar, articulos, Ecuador, Ibarra, City, search, tools" /> -->
		<!-- <meta name="description" content="If you want to know what is there in some city where you are new in, this is the page you are looking for!" /> -->
		<!-- <meta name=viewport content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0,minimun-scale=1.0"> -->
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  		<link rel="stylesheet" href="css/style.css">
		
	</head>

	<body>
	<?php
		$mvc = new mvcController();
		$mvc -> enlacesPaginasController();
	?>

	<footer id="footer">
		<?php
			include "modules/footer.php";
		?>
	</footer>
	<?php
		include "modules/modal.php";
	?>
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
	</body>
</html>
