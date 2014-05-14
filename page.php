<?php 
if (!isset($_GET["page"])) {
	header('Location: index.php');
}
include 'config/_vars.php';
include 'inc/_redirect.php' 
?>
<!DOCTYPE HTML>
<html>
<head>

<?php 
include 'inc/_head.php';
?>

</head>

<body>

	<?php include 'inc/_header.php' ?>

	<div class="contain padding mainContainer">
		<?php include 'inc/_webtools.php' ?>
	</div>

	<?php include 'inc/_footer.php' ?>
</body>

</html>

