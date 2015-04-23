
function creerReponse()
	{
		var moi="";
		var titre= document.getElementById('titre').value;
		var nom= document.getElementById('nom').value;
		var prenom= document.getElementById('prenom').value;
		var date= document.getElementById('date').value;
		var sexe="H";
		if (document.getElementById('sexeM').checked)
		{
			sexe="H";
		}
		else if (document.getElementById('sexeF').checked)
		{
			sexe="F";
		}
		var presence=true;
		if (document.getElementById('presenceOui').checked)
		{
			presence=true;
		}
		else if (document.getElementById('presenceNon').checked)
		{
			presence=false;
		}

		var invitant= document.getElementById('invitant').value;
		var tabInvitantEt=invitant.split("et");
		var tabInvitantVirgule=invitant.split(",");
		var invitantPluriel=true;
		if (tabInvitantVirgule.length<2 && tabInvitantEt.length<2)
		{
			invitantPluriel=false;
		}

		var reponse="";


		var determinant="";
		if ((titre=="Monsieur") || (titre=="monsieur") || (titre=="Mademoiselle") || (titre=="mademoiselle") || (titre=="madame") || (titre=="Madame") ||(titre=="")) 
			{
				determinant ="";
				if (titre=="") 
					{
						if (sexe=="H")
						{
							titre="Monsieur";
						}
						else
						{
							titre="Madame";
						}
					}
			}
		else if (sexe=="H") 
			{
				determinant ="Le ";
			}
		else if (sexe=="F") 
			{
				determinant ="La ";
			}

		moi+=determinant;
		moi+=titre+" "+prenom+" "+nom;
		reponse+=moi;
		reponse+=" remercie infiniment ";
		reponse+=invitant;
		reponse+= " de ";
		if(invitantPluriel)
		{
			reponse+="leur";
		}
		else
		{
			reponse+="son";
		}
		reponse+= " aimable invitation à la soirée du "+date+".<br/><br/>";

		if (sexe=="H")
			{
				reponse+= "Il ";
			}
		else
			{
				reponse+= "Elle ";
			}

		if(presence)
			{
				reponse+="s’y rendra avec grand plaisir.<br/><br/>";
			}
		else
			{
				reponse+="ne pourra malheureusement pas s'y rendre.<br/><br/>";
			}
		reponse+=moi+" prie "+invitant+" d'accepter ses amitiés les plus sincères.";


		//document.getElementById('reponse').InnerHTML=reponse;
		document.getElementById("reponse").innerHTML=reponse;

		


		// var client = new ZeroClipboard( reponse, {
		// 				moviePath: "Vues/JS/zeroclipboard-1.3.5/zeroclipboard-2.2.0/dist/ZeroClipboard.swf"
		// 			} );
		// clip.on( 'noflash', function ( client, args ) {
		//     $("#copy").click(function(){            
		//         var txt = $(this).attr('data-clipboard-text');
		//         prompt ("Copy link, then click OK.", txt);
		//     });
		// });  
		ajouterCookies(titre, nom, prenom, sexe);


		//mise en place des cookies pour la prochaine conexion:
		//mettreEnPlaceLesCookies(titre, nom, prenom, sexe);

	}

function getXMLHttpRequest()
  {
	  var xhr = null;

	  if (window.XMLHttpRequest || window.ActiveXObject)
		{
		 if (window.ActiveXObject)
		 {
		 try
				{
				 xhr = new ActiveXObject("Msxml2.XMLHTTP");
				}
		 catch(e)
				{
				 xhr = new ActiveXObject("Microsoft.XMLHTTP");
				}
		 }
		 else
		 {
		 xhr = new XMLHttpRequest();
		 }
		}
	  else
		{
		 alert("Votre navigateur ne supporte pas l'objet XMLHTTPRequest...");
		 return null;
		}

	  return xhr;
  }

function ajouterCookies(titre, nom, prenom, sexe)
  {
	
	var xhr = getXMLHttpRequest();


	xhr.onreadystatechange = function() {
	if (xhr.readyState == 4 && (xhr.status == 200 || xhr.status == 0))
	  {
		//alert(xhr.responseText);
	
		
	  }
	};

	xhr.open("POST", "index.php?page=ajouterCookies", true);
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xhr.send("titre="+titre+"&nom="+nom+"&prenom="+prenom+"&sexe="+sexe);
  }
