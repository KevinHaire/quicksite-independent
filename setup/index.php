<?php
	include '../config/_array.php';
	include '../config/_vars.php';
	if ($formValues["password"] && !$_COOKIE["login"]) {
		header('Location: login.php');
	}
	if (isset($_GET["success"])) {
		include '_success.php';
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/minified/setup.min.css"/>
	<title>Custom Website Setup</title>
</head>
<body>

	<?php include 'inc/_header.php' ?>

	<section class="instructions">
		<div class="contain">
			<p>This is the configuration of your ShopCity.com website. If you encounter any problems please send us an <a href="mailto:khaire@shopcity.com">e-mail</a>.</p>
		</div>
	</section>

	<form action="_formProcessor.php" method="post" enctype="multipart/form-data">

		<?php include 'inc/form/_businessSetup.php' ?>

		<?php include 'inc/form/_socialMedia.php' ?>

		<?php include 'inc/form/_navigation.php' ?>

		<?php include 'inc/form/_slider.php' ?>

		<?php include 'inc/form/_styling.php' ?>

		<?php include 'inc/form/_analytics.php' ?>

		<?php include 'inc/form/_footer.php' ?>

	</form>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src='js/spectrum.js'></script>

</body>
</html>
