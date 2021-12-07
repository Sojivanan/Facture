<!DOCTYPE html>
<html>
<head>
	<title>Facture_accueil</title>
</head>
<body>
	<header>
		<h1>Facture Accueil</h1>
	</header>
	<main>
		<form action="facture.php" method="post">
			<div>
				<p><label for="societe">Société</label></p>
				<input type="text" name="societe" id="societe" required>
			</div>
			<div>
				<p><label for="nom">Nom</label></p>
				<input type="text" name="nom" id="nom" required>
			</div>
			<div>
				<p><label for="prenom">Prénom</label></p>
				<input type="text" name="prenom" id="prenom" required>
			</div>
			<div>
				<p><label for="adresse">Adresse</label></p>
				<input type="text" name="adresse" id="adresse" required>
			</div>
			<div>
				<p><label for="codepostal">Code Postal</label></p>
				<input type="text" name="codepostal" id="codepostal" required>
			</div>
			<div>
				<p><label for="ville">Ville</label></p>
				<input type="text" name="ville" id="ville" required>
			</div>
			<div>
				<p><label for="date">Date</label></p>
				<input type="date" name="date" id="date" required>
			</div>
			<div>
				<input type="submit" value="envoyer">
			</div>
		</form>
	</main>
</body>
</html>
