<?php
	include("ConexionBDD.php");
	include("ObjClient.php");

	//dans le cas ou il y a eu une réponse:
	if (isset($_POST['nom']) && isset($_POST['prenom']))
	{
		$client=new Client();
		$client->hydrate('', $_POST['nom'], $_POST['prenom'], '', '','');
		$message="";
		if($client->verificationPresenceDansBDD($bdd)==-1)
			{
				$id=$client->enregistrementDansBdd($bdd);
				//$id=$client->verificationPresenceDansBDD($bdd);
				$message="inscriptionReussie";
				$client->setId($id);
				// if($id==-1)
				// 	{
				// 		$message="ErreurInscription";
				// 	}
				// else
				// 	{
				// 		$message="inscriptionReussie";
				// 		$client->setId($id);
				// 	}
			}
		else
			{
				$message="ErreurDejaInscrit";
			}

		

	}
?>