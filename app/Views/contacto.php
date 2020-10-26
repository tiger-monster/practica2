<!DOCTYPE html>
<html>
<head>
	<title>Master</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/public/css/bootstrap.min.css">
</head>
<body>
	 <!-- comentarios -->
	<hr>
	Este es un anuncio de contacto de una persona x
	<hr>
	<form action="<?php echo base_url(); ?>/mandarPost" method="post"> 
		<label>Enviar mi nombre por post</label>
		<br>
		<input type="text" name="valor1">
		<br>
		<input type="text" name="valor2" placeholder="valor2">
		<br>
		<button class="btn btn-primary">Enviar datos</button>
	</form>
	<script src="<?php echo base_url(); ?>/public/js/jquery-3.4.1.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/js/popper.min.js"></script>
	<script src="<?php echo base_url(); ?>/public/js/bootstrap.min.js"></script>
</body>
</html>
