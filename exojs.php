<!DOCTYPE HTML>
<html>
<head>
  <title>Exo</title>
  <meta charset="utf-8"/>

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

</script>

</head>
<body>

<?php include("menu.php"); ?>

<h3>4annales, exo js</h3>

<p>Entrez un numero de mois: <input type="text" id="mois" onkeyup="verifMois()"></input>
<span id="moisKo">Mois correct ?</span>
<input type="button" id="boutonValidMois" value="Alert mois" onclick="verifMoisAlert()" /></p>

<p>Score player1 :<input type="text" id="scoreP1"></input>
Score player2 :<input type="text" id="scoreP2" onkeyup="compareScore()"></input>
<span id="compareScoreSpan">Compare score</span>
</p>


</body>
</html>