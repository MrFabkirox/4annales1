<!DOCTYPE HTML>
<html>
<head>
  <title>Exo</title>
  <meta charset="utf-8"/>

<script>
</script>

</head>
<body>

<?php include("menu.php"); ?>

<h3>4annales, jsverif2</h3>

<p>
	
	some stuf to verify return of forms 'txt1'<br />
	<?php
		print_r("you wrote ".$_GET['txt1']);
	?>
  <?php
    print_r("you wrote ".$_GET['txt2']);
  ?>
</p>


</body>
</html>