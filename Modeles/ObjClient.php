<?php
	/**
	* 
	*/
	class Client 
		{
			private $_id;
			private $_titre;
			private $_nom;
			private $_prenom;
			private $_presence;
			private $_message;
			private $_reponseVue;
			private $_mail;


			public function getId()
				{
					return $this->_id;
				}
			public function getTitre()
				{
					return $this->_titre;
				}
			public function getNom()
				{
					return $this->_nom;
				}
			public function getPrenom()
				{
					return $this->_prenom;
				}
			public function getPresence()
				{
					return $this->_presence;
				}
			public function getMessage()
				{
					return $this->_message;
				}
			public function getReponseVue()
				{
					return $this->_reponseVue;
				}
			public function getMail()
				{
					return $this->_mail;
				}
			public function setId($arg)
				{
					$this->_id=$arg;
				}
			public function setTitre($arg)
				{
					$this->_titre=$arg;
				}
			public function setNom($arg)
				{
					$this->_nom=$arg;
				}
			public function setPrenom($arg)
				{
					$this->_prenom=$arg;
				}
			public function setPresence($arg)
				{
					$this->_presence=$arg;
				}
			public function setMessage($arg)
				{
					$this->_message=$arg;
				}
			public function setReponseVue($arg)
				{
					$this->_reponseVue=$arg;
				}
			public function setMail($arg)
				{
					$this->_mail=$arg;
				}
			public function hydrate($titre, $nom, $prenom, $presence, $message,$mail)
				{
					$this->setTitre($titre);
					$this->setNom($nom);
					$this->setPrenom($prenom);
					$this->setPresence($presence);
					$this->setMessage($message);
					$this->setMail($mail);
					
				}
			public function hydratePlusId($id, $titre, $nom, $prenom, $presence, $message,$mail)
				{
					$this->setId($id);
					$this->setTitre($titre);
					$this->setNom($nom);
					$this->setPrenom($prenom);
					$this->setPresence($presence);
					$this->setMessage($message);
					$this->setMail($mail);
					
				}
			public function enregistrementDansBdd($bdd)
				{
					$titre=addslashes($this->getTitre());
					$nom=addslashes($this->getNom());
					$prenom=addslashes($this->getPrenom());
					$presence=addslashes($this->getPresence());
					$message=addslashes($this->getMessage());
					$mail=addslashes($this->getMail());
					
					if ($presence=="true")
						{
							$presence=true;
						}
					else
						{
							$presence=0;
						}

					$bdd->exec('INSERT INTO reponse_clients (titre, nom, prenom, presence_soiree, message, mail) VALUES(\'' .$titre. '\', \'' .$nom. '\', \'' .$prenom. '\', ' .$presence. ', \'' .$message. '\', \'' .$mail. '\')');
					return $bdd->lastInsertId();
				}
			//retourne -1 il il n'y est pas encore, et l'id dans la bdd si non
			public function verificationPresenceDansBDD($bdd)
				{
					$retour=-1;

					$reqListeClients=$bdd->query('SELECT * FROM reponse_clients WHERE (nom=\''.addslashes($this->getNom()).'\' && nom=\''.addslashes($this->getPrenom()).'\')');
					//var_dump($reqListeClients);
					if (is_object($reqListeClients))
						{
							
							while ($clientBdd=$reqListeClients->fetch())
								{
									//var_dump($clientBdd);
									$retour=$clientBdd['id'];
									
								}
						}
					
					return $retour;
				}



		}



?>