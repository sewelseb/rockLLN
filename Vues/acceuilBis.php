<!DOCTYPE html>

<html lang="en">
  <head>

   
  </head>

  <body >
		
	
	
				<form >
					<div class="row col-lg-12 col-lg-offset-2">
						<div class="form-group col-lg-2 ">
							<label for="titre">Titre:</label>
							<input type="text" class="form-control" id="titre"  name="titre">
						</div>
						<div class="form-group col-lg-2">
							<label for="nom">Nom:</label>
							<input type="text" class="form-control" id="nom"  name="nom">
						</div>
						<div class="form-group col-lg-2">
							<label for="prenom">Prénom:</label>
							<input type="text" class="form-control" id="prenom" name="prenom">
						</div>
						<div class="form-group col-lg-2">
							<label >Sexe</label><br/>
							<label class="radio-inline"><input type="radio" name="sexe" value="H">H</label>
							<label class="radio-inline"><input type="radio" name="sexe" value="F">F</label>
						</div>
					</div>
					<div class="row col-lg-8 col-lg-offset-2">
						
							<label >Présence à la soirée: </label>
							<label class="radio-inline"><input type="radio" name="presence">oui</label>
							<label class="radio-inline"><input type="radio" name="presence">non</label>
						
					</div>
					<div class="row col-lg-12 col-lg-offset-2">
						<div class="form-group col-lg-8 ">
							<label for="invitant">Invitant:</label>
							<input type="text" class="form-control" id="invitant"  name="invitant">
						</div>
					</div>
					<div class="row">
						<input type="button" class="btn btn-lg" value="Créer ma réponse" onClick="test()"/>
					</div>
				</form>
		
	
	
	

   
    <script src="Vues/JS/javaScript.js"></script>
	
</body>
</html>
