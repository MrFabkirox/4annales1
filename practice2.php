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

function verifEmpty(name1) {
	var ok = true;
	if(document.getElementById(name1).value.trim() == "") {
		ok = false;
		document.getElementById("message").innerHTML = "The field name cannot be empty";
	}
	return ok;
}

function verifFnEmpty() {
	var fn = document.forms["pract2"]["txt2"].value.trim();
	if(fn == null || fn == "") {
		document.getElementById("message").innerHTML = "The field firstname cannot be empty";
		return false;
	} else {
		return true;
	}
}

function verifTime() {
	var ok = true;
	if(/^([01][0-9]|20|21|22|\b23\b):([0-5][0-9])$/.test(document.getElementById("time").value) == false) {
		ok = false;
		document.getElementById("message").innerHTML = "Time format not correct";
	}
	return ok;
}

function verifBorn() {
	var ok = true;
	if(/^((?![00])([1-9]|[0-2][0-9]|[30]|[31]))\s(\bjan\b|\bfeb\b|\bmar\b|\bapr\b|\bmay\b|\bjun\b|\bjul\b|\baug\b|\bsep\b|\boct\b|\bnov\b|\bdec\b)\s([0-9][0-9][0-9][0-9])$/.test(document.getElementById("date").value.trim()) == false) {
		ok = false;
		document.getElementById("message").innerHTML = "Date of birth format not correct";
	}
	return ok;
}

function nbParfum() {
	var selectIce = document.getElementById("ice");
	var nb = 0;

	for(var i=0 ; i<selectIce.options.length; i++) {
		if(selectIce.options[i].selected) {
			nb+=1;
		}
	document.getElementById("nb").innerHTML = nb;
	}
	return nb;
}

function totalPrice(nbParfum) {

	if(document.getElementById('big').checked) {
		var price = 8;
	} else if(document.getElementById('normal').checked) {
		var price = 5;
	}

	price += (nbParfum*2);

	if(document.getElementById("chantilly").checked) {
		price += 0.50;
	}

	document.getElementById("price").innerHTML = price;
	return price;
}

</script>

</head>
<body>

<div id="right"><?php include("menu.php"); ?></div>

<h3>4annales, practice2</h3>

<p>
	<p><span id="message">Welcome to the form</span></p>
	<p>nb of parfum icecream selected : <span id="nb"></span></p>
	<p>Total price : <span id="price"></span></p>
	<p>Test : <span id="test"></span></p>

	<form name="pract2" action="jsverif2.php" type="get" onsubmit="return !!(verifEmpty('name') && verifFnEmpty())">
		
		<p>Enter your name <input type="text" id="name" name="txt1" placeholder="cannot be empty"></input></p>
		<p>Enter your firstname <input type="text" id="fn" name="txt2" placeholder="can be empty for now.."></input></p>

		<p>What time is it now <input type="text" id="time" placeholder="of the form hh:mm" ></input></p>
		<p>When were you born <input type="text" id="date" placeholder="of the form 2 fev 1982" ></input></p>

		<p><input type="submit" value="submit !" onclick="return !!(verifTime() & verifBorn())"></p>

		<p>What kind of icecream would you like ?<br />
		<p>
		Size : <br />
		<input type="radio" name="size" id="normal" checked onclick="totalPrice(nbParfum())" >Normal</input>
		<input type="radio" name="size" id="big" onclick="totalPrice(nbParfum())" >Big</input>
		</p>
		<select name="ice[]" id="ice" multiple="multiple" onchange="totalPrice(nbParfum())">
			<option>vanille</option>
			<option>chocolat</option>
			<option>pistache</option>
			<option>fraise</option>
		</select>
		<p>Chantilly ? 
		<input type="checkbox" id="chantilly" onclick="totalPrice(nbParfum())" /></p>
		</p>

	</form>

</p>


</body>
</html>






