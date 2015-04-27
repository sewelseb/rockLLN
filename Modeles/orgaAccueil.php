<?php
	//session_start();
	include('ConexionBDD.php');
	include('objAdmin.php');
	include_once('ObjClient.php');

	$admin= new Admin();
	$conecte=$admin->verificationConecte($bdd);
	//echo $conecte;
	if ($conecte==1)
	{
		$admin->hydrateListeObjClient($bdd);

		$acceptation=0;
		$reffus=0;
		foreach ($admin->getListeClients() as $client) 
			{		
				if ($client->getPresence()==1)
					{
						$acceptation++;
					}
				else
					{
						$reffus++;
					}
			}			
	}
	else
	{
		header('location: index.php');
	}

?>
