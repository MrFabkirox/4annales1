<!DOCTYPE HTML>
<html>
<head>
  <title>Exo</title>
  <meta charset="utf-8"/>
<style>
  #left {
    width: 75%;
    position: fixed;
  }
  #right {
    width: 25%;
    position: absolute;
    right: 0;
    background: grey;
    margin: 20px;
    padding: 4px;
  }
</style>

<script>
</script>

</head>
<body>

<div id="right"><?php include("menu.php"); ?></div>

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