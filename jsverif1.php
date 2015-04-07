<!DOCTYPE HTML>
<html>
<head>
  <title>Exo</title>
  <meta charset="utf-8"/>

<script>

	function verifyEmpty() {
		var ok = true;
		var textFromInput = document.getElementById('txt1').value.trim();
		if(textFromInput == "") {
			document.getElementById('errorText').innerHTML = "textbox empty";
			ok = false;
		}
		return ok;
	}

	function verifNumbers() {
		var ok = true;
		var nmbFromInput = document.getElementById('nb1').value;
		if(/^([01][0-9]|20|21|22|23):[0-6][0-9]$/.test(nmbFromInput) == false) {
			document.getElementById('errorText').innerHTML = "not correct format time";
			ok = false;
		}
		return ok;
	}

</script>

</head>
<body>

<?php include("menu.php"); ?>

<h3>4annales, jsverif1</h3>


<form action="jsverif2.php" type="get" onsubmit="return !!(verifyEmpty() & verifNumbers());">

	<input type="text" name="txt1" id="txt1" placeholder="write something" />
	<input type="text" name="nb1" id="nb1" placeholder="numbers" />
	<input type="submit" value="send !" />

</form>

<span id="errorText">How is you textbox ...</span>

</body>
</html>