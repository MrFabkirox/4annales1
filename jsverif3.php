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
	function verifEmpty() {
		var ok = true;
		if(document.getElementById('name1').value.trim() == "") {
			ok = false;
			document.getElementById('message1').innerHTML = "Field name empty";
		}
		return ok;
	}

	function verifTime() {
		var ok = true;
		if(/^([01][0-9]|20|21|22|23):([0-5][0-9])$/.test(document.getElementById('time1').value) == false) {
			ok = false;
			document.getElementById('message1').innerHTML = "Time not correct";
		}
		return ok;
	}

	function parfumSelected() {
		var select = document.getElementById("parfum");
		var n = 0;

		for(var i=0 ; i<select.options.length; i++) {
			if(select.options[i].selected) {
				n++;

				document.getElementById("message1").innerHTML = n;
			}
		}
		return n;
	}

	function calculPrice(item) {
		var price = item * 2;
		if(document.getElementById("chantilly").checked) {
			price += 1;
		}
		document.getElementById("message2").innerHTML = price;
	}

	function verifBornDate() {
		var ok = true;
		var dateSubmited = document.getElementById("born").value.trim();
		if(/^([1-9]|[12][0-9]|30|31)\s(\bjan\b|\bfeb\b|\bmar\b|\bapr\b|\bmay\b|\bjun\b|\bjul\b|\baug\b|\bsep\b|\boct\b|\bnov\b|\bdec\b)\s([12][0-9][0-9][0-9])$/.test(dateSubmited) == false) {
			ok = false;
			document.getElementById("message1").innerHTML = "Date of birth wrong format";
		} else {
			document.getElementById("message1").innerHTML = dateSubmited;
		}
	}

</script>

</head>
<body>

<div id="right"><?php include("menu.php"); ?></div>

<h3>4annales, jsverif3</h3>

<p>
	<form action="jsverif2.php" type="get" onsubmit="return !!(verifEmpty() & verifTime())">

		<p><input type="text" name="txt1" id="name1" placeholder="Enter name" /></p>
		<p><input type="text" name="time1" id="time1" placeholder="Enter time, ex: 06:59" /></p>
		<p>Chantilly ?<input type="checkbox" name="chantilly" id="chantilly" onclick="calculPrice(parfumSelected())"/></p>


		<p><select name="parfum[]" id="parfum" multiple="multiple" onchange="calculPrice(parfumSelected())">
			<option>vanille</option>
			<option>choc</option>
			<option>fraise</option>
			<option>bs</option>
			<option>bs</option>
			<option>bs</option>
		</select></p>

		<p><input type="submit" value="submit" /></p>

		<p><span id="message1">Messages to display</span></p>
		<p>Price of one icecrean with your selection :<span id="message2">Price to display</span></p>

		<p><input type="radio" name="sex">Male</input></p>
		<p><input type="radio" name="sex">Female</input></p>

		<p><input type="text" name="born" id="born" placeholder="born in ? ex: 2 feb 1982" onkeyup="verifBornDate()" /></p>

	</form>
</p>


</body>
</html>