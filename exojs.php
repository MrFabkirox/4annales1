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
	
	function verifMois() {
		var moisRentre = parseInt(document.getElementById('mois').value.trim());
		if(/^([1-9]|\b10\b|\b11\b|\b12\b)$/.test(moisRentre) == false) {
			document.getElementById('moisKo').innerHTML = "Numero de mois incorrect";
		} else {
			document.getElementById('moisKo').innerHTML = "Numero de mois correct";
		}
	}

	function verifMoisAlert() {
		var moiRentre2 = parseInt(document.getElementById('mois').value.trim());
		if(moiRentre2<1 || moiRentre2>12) {
			window.alert("Numero de mois invalide, doit etre compris entre 1 et 12");
		} else {
			window.alert("Numero de mois valide");
		}
	}

	function compareScore() {
		var score1 = parseInt(document.getElementById('scoreP1').value.trim());
		var score2 = parseInt(document.getElementById('scoreP2').value.trim());
		if(score1>score2) {
			document.getElementById('compareScoreSpan').innerHTML = "Player1 win";
		} else if(score1<score2) {
			document.getElementById('compareScoreSpan').innerHTML = "Player2 win";
		} else {
			document.getElementById('compareScoreSpan').innerHTML = "Execo";
		}
	}

	function addCat(li1, tabChat) {
		
		for(i in tabChat) {
			var lis = document.createElement('li');
			var txt = document.createTextNode(tabChat[i]);

			document.getElementById(li1).appendChild(lis);
			lis.appendChild(txt);
		}
	}

	function seeColorz() {
		var col = document.getElementById('colorz');
		var toDisplay = "d: ";
		for ( var i=0 ; i<col.options.length ; i++ ) {
			toDisplay = toDisplay + " " + col.options[i].value;
		}

		document.getElementById('spanColorz').innerHTML = toDisplay;
	}

    var displayADonner = "none";

	function cacherAutres2() {
    	var elements= document.querySelectorAll("#aCacher li");
    	var vuPremier= false;
      		for (var i= 1; i < elements.length; i++) {
        		elements[i].style.display= displayADonner;
    		}
    	if (displayADonner === "none") {
        displayADonner= "list-item";
    	} else {
        	displayADonner= "none";
    	}
 	}

</script>

</head>
<body>

<div id="right"><?php include("menu.php"); ?></div>

<h3>4annales, exo js</h3>

<p>Entrez un numero de mois: <input type="text" id="mois" onkeyup="verifMois()"></input>
<span id="moisKo">Mois correct ?</span>
<input type="button" id="boutonValidMois" value="Alert mois" onclick="verifMoisAlert()" /></p>

<p>Score player1 :<input type="text" id="scoreP1"></input>
Score player2 :<input type="text" id="scoreP2" onkeyup="compareScore()"></input>
<span id="compareScoreSpan">Compare score</span>
</p>

<p>
	<ul id="maListe">
		<li>chien</li>
	</ul>
	<input type="submit" onclick="addCat('maListe', ['chat de goutiere', 'chat siamois'])"/>
</p>

<p>
	<select id="colorz" multiple="multiple">
		<option>red</option>
		<option>blue</option>
		<option>black</option>
	</select>

	<span id="spanColorz"></span><input type="submit" onclick="seeColorz()" />
</p>

<p>

	<ul id="aCacher">
		<li onclick="cacherAutres2()">un</li>
		<li>deux</li>
		<li>trois</li>
	</ul>
	<input type="submit" />
</p>

</body>
</html>