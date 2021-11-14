<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Facture</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<img src="images.jpg" width="150" height="150">
		<h1>FACTURE</h1>
		<div class="mesinfos">
			<h2>Soccer Stores</h2>
			<p>Adresse: 79 Avenue des Champs-Élysées</p>
			<p>Code Postal: 75008</p>
			<p>Ville: Paris</p>
			<p>Téléphone: 01 71 53 22 13</p>
		</div>
		<div class="numerofacture">
			<?php  
				$numerofacture = mt_rand(1000, 10000);

				echo "Facture N° :".$numerofacture;
			?>
		</div>
		<div class="clients">
			<p><strong>Informations client:</strong></p>
			<?php  
				if(isset($_POST['societe'],$_POST['nom'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['codepostal'],$_POST['ville'],$_POST['date'])){
				echo ("Societe: ".$_POST['societe']."<br>Nom: ".$_POST['nom']."<br>Prénom: ".$_POST['prenom']."<br>Adresse: ".$_POST['adresse']."<br>Code Postal: ".$_POST['codepostal']."<br>Ville: ".$_POST['ville']."<br>Date: ".$_POST['date']);
			}
			?>
		</div>
	</header>
	<main>
		<table>
			<thead>
				<tr>
					<th>Référence Produit</th>
					<th>Description</th>
					<th>Quantité</th>
					<th>Prix</th>
					<th>Montant HT</th>
				</tr>
			</thead>
			<?php  
				$Articles = array(
					array(
						'reference' => mt_rand(1,10000),
						'produit' => 'Maillot PSG',
						'quantite' => mt_rand(1, 50),
						'price'	=> 70				

				),
					array(
						'reference' => mt_rand(1,10000),
						'produit' => 'Maillot REAL MADRID',
						'quantite' => mt_rand(1,50),
						'price'	=> 65
				),
					array(
						'reference' => mt_rand(1,10000),
						'produit' => 'Maillot MILAN AC',
						'quantite' => mt_rand(1, 50),
						'price'	=> 50
				),
						array(
						'reference' => mt_rand(1,10000),
						'produit' => 'Maillot ARSENAL',
						'quantite' => mt_rand(1, 50),
						'price'	=> 50
				)
				);

				foreach ($Articles as $art) {
					echo ("<tbody>");
					echo ("<tr>");
					echo ("<td>".$art[reference]."</td>");
					echo ("<td>".$art[produit]."</td>");
					echo ("<td>".$art[quantite]."</td>");
					echo ("<td>".$art[price]."€"."</td>");
					echo ("<td>".$art[price]*$art[quantite]."€"."</td>");
					echo ("</tr>");
					echo ("</tbody>");
				}
			?>
		</table>
		<div class="total">
			<h2>MONTANT TOTAL HT:</h2>
			<?php  
				function sum($Articles){
					$sum = 0;

					foreach ($Articles as $Article) {
					 	$sum += ($Article['price']*$Article['quantite']);
					 } 
					 $Montanttotal = $sum;
					 return $Montanttotal;
				}
				
				echo(sum($Articles)." €");
			?>
			<h2>TVA 20%</h2>
			<h2>MONTANT TOTAL TTC:</h2>
			<?php  
				echo(sum($Articles)*1.20."€");
			?>
		</div>
		<div>
			<p></p>
		</div>
	</main>
	<footer>
		<div>
			<p>Conditions de paiement : paiement à réception de facture</p>		
			<p>Loi LME du 04-08-2008, les pénalités de retard seront calculées sur la base de 3 fois le taux d'intérêt légal. Indemnité forfaitaire pour frais de recouvrement en cas de retard de paiement : 40 € Réserve de propriété : Nous nous réservons la propriété des marchandises jusqu’au complet paiement du prix par l'acheteur. Notre revendication porte aussi bien sur les marchandises que sur leurs prix si elles ont déjà été revendues (Loi 80-335 du 12 mai 1980)</p>	
			<p>SARL au capital de 20 0000€ - RCS 750 700 620 Paris</p>
			<p>N° intracommunautaire de TVA : FR33 782 250 750</p>
		</div>
	</footer>
</body>
</html>






