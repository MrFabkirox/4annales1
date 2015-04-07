<!DOCTYPE HTML>
<html>
<head>
  <title>Exo</title>
  <meta charset="utf-8"/>
  <style>
    .error {color: red;}
  </style>
<script>

  function verifRdv() {
    var ok= true;
    if (document.getElementById('nom').value.trim() == "") {
      ok= false;
      document.getElementById("erreur_nom").innerHTML= "vide";  
    }
    return ok;
  }

  function convertNumberOfMinute() {
  	var dureeResultat;
  	var dureeToConvertArray;
  	var dureeToConvert = document.getElementById("h2").value;
  	dureeToConvertArray = dureeToConvert.split(':');
  	dureeResultat = (dureeToConvertArray[0] * 60)*1 + (dureeToConvertArray[1])*1;
  	document.getElementById("erreur_h2").innerHTML = dureeResultat;  
  }

</script>
</head>
<body>

<?php include("menu.php"); ?>

<h3>4annales1, practice</h3>

<form action="jsverif2.php" method="post" onsubmit="return verifRdv()">

<p>nom <input type="text" name="nom" id="nom"/> <span class="erreur" id="erreur_nom"></span></p>
<p>h début <input type="text" name="h1" id="h1" /><span class="erreur" id="erreur_h1"></span></p>
<p>h fin <input type="text" name="h2" id="h2" onkeyup="convertNumberOfMinute()" /><span class="erreur" id="erreur_h2">dureeResultat</span></p>
<p> <input type="submit"/></p>

</form>

<p> Durée <span id="duree"> </span></p>
onkeyup js

</body>
</html>