<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>4annales1, Formulaire rdz vous, ex4</title>
    <style type="text/css" media="screen">
	</style>

	<script>
        function verifyH() {

            document.getElementById('response').innerHTML = 'verifyH';
            return false;

        }
    </script>

</head>
<body>

<?php include("menu.php"); ?>

<h3>4annales1, Formulaire rdz vous, ex4</h3>

<form action="jsverif2.php" method="post" onsubmit="verifyH()">
    <p>nom<input type="text" name="txt1" /></p>
    <p>heure debut<input type="text" id="hdebut" onsubmit="verifyH()"/></p>
    <p>heure fin<input type="text" id="hfin" onclick="verifyH()" /></p>
    <p><input type="submit" value="envoyer" /></p>
    <p id="response">Response</p>
</form>


</body>
</html>