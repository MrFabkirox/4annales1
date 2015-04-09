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

	function verifEmpty(value) {
		var e = document.getElementById(value).value.trim();
		if(e == "" || e == null) {
			document.getElementById('nameEmpty').innerHTML = "Field empty";
			return false;
		} else {
			return true;
		}
	}

 	function add(ulid, listToAdd) {
 		var ulToAdd = document.getElementById(ulid);

 		for(i in listToAdd) {
 			var ulToAddLi = document.createElement('li');
 			var ulToAddTxt = document.createTextNode(listToAdd[i]);
 			ulToAddLi.appendChild(ulToAddTxt);
 			ulToAdd.appendChild(ulToAddLi);
 		}
 	}

	var seen = "none";

 	function hide() {
 		
 		var olToHideli = document.querySelectorAll('#olToHide li');

 		for(var i=0; i<olToHideli.length ; i++) {

 			if (i != olToHideli.length - 1) {
 				olToHideli[i].style.display = seen;
 			}
 		}
 		if(seen === "none") {
 			seen = "list-item";
 		} else {
 			seen = "none";
 		}
 	}

 	function verifTime(timeV) {
 		var start = document.getElementById(timeV).value.trim();

 		if(/^(([0-9]|[01][0-9])|\b20\b|21|22|23):([0-5][0-9])$/.test(start) == true) {
 			document.getElementById('timeMessage').innerHTML = start;
 			return true;
 		} else {
 			document.getElementById('timeMessage').innerHTML = "Time format not correct";
 			return false;
 		}
 	}

 	function timeInMinute(t) {
 		var time = document.getElementById(t).value.trim();
 		var durArray = time.split(":");
 		var duree = parseInt(durArray[0]*60) + parseInt(durArray[1]);
 		return duree;
 	}

 	function compareDuration(duree1, duree2) {
 		document.getElementById('timeMessage').innerHTML = duree2 - duree1;
 	}

</script>

</head>
<body>

<div id="right"><?php include("menu.php"); ?></div>

<div id="left">

<h3>4annales, practice3</h3>

<form action="jsverif2.php" type="get" >
	<input type="text" id="fn1" placeholder="Firstname" name="txt1"></input>
	<input type="text" id="name1" placeholder="Name"></input>
	<button type="submit" onclick="return !!(verifEmpty('name1') & verifEmpty('fn1'))">Send</button>
	<span id="nameEmpty">file name</span>
</form>

<p>
	<ul id="ulToAdd">
		<li onclick="add('ulToAdd', [['99problems'], [1]])">One</li>
	</ul>
</p>

<p>
	<ol id="olToHide">
		<li>Cat</li>
		<li>Dog</li>		
		<li>Pig</li>
		<li>frog</li>
		<li>bird</li>		
		<li>cow</li>
	</ol>
	<button type="button" onclick="hide()">hide/display</button>
</p>

<p>
	<span>Pick two hours of the same day</span><br />
	<input type="text" id="startTime" placeholder="start time hh:mm" onkeyup="return verifTime('startTime')"></input>
	<input type="text" id="stopTime" placeholder="stop time hh:mm" onkeyup="return verifTime('stopTime')"></input>
	<button type="button" onclick="compareDuration(timeInMinute('startTime'), timeInMinute('stopTime'))">display duration</button><br />
	<span id="timeMessage">Time to display</span>
</p>

</div>

</body>
</html>