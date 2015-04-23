<?php
	if (isset($_POST['titre']))
	{
		setcookie("titre", $_POST['titre'], time()+(3600*24*366));
	}
	if (isset($_POST['nom']))
	{
		setcookie("nom", $_POST['nom'], time()+(3600*24*366));
	}
	if (isset($_POST['prenom']))
	{
		setcookie("prenom", $_POST['prenom'], time()+(3600*24*366));
	}
	if (isset($_POST['sexe']))
	{
		setcookie("sexe", $_POST['sexe'], time()+(3600*24*366));
	}



?>