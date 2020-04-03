<!DOCTYPE html>
<html>
<head>
	<title>MY WEBSITE</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/flatly/bootstrap.min.css">
</head>
<body><br>
	<div class="container text-center">Commandes Clients</div><br>
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th>Numéro de commande</th>
        			<th>Numéro Client</th>
        			<th>Date de commande</th>
        			<th>Désignation article</th>
        			<th>Quantité</th>
        			<th>Prix unitaire</th>
        			<th>Date de Livraison</th>
        			<th>Adresse client</th>
				</tr>
			</thead>
			<?php 
				$mon_fichier=fopen("commandes.txt", "r");
				$mon_fichier1=fopen("pscde01_CLI1001.txt", "a");
				$mon_fichier2=fopen("psccl01_CLI1004.txt", "a");

				$str1="CLI1001";
				$str2="CLI1004";

				while (!feof($mon_fichier)) {
					$cmp=fgets($mon_fichier);
					$chaine=explode('|', $cmp);
					$numc=$chaine[0];
					$numcl=$chaine[1];
					$datecmd=$chaine[2];
					$des=$chaine[3];
					$quant=$chaine[4];
					$prixu=$chaine[5];
					$datel=$chaine[6];
					$adresse=$chaine[7];
					
					if (strcmp($numcl,$str1)) {
						$cmp1="$numc | $numcl | $datecmd | $des | $quant | $prixu | $datel | $adresse\n";
						fputs($mon_fichier1,$cmp);
					}

					if (strcmp($numcl, $str2)) {
						$cmp2="$numc | $numcl | $datecmd | $des | $quant | $prixu | $datel | $adresse\n";
						fputs($mon_fichier2,$cmp2);
					}

					echo "<tbody>
					<tr>
        				<td>".$numc."</td>
        				<td>".$numcl."</td>
        				<td>".$datecmd."</td>
        				<td>".$des."</td>
        				<td>".$quant."</td>
        				<td>".$prixu."</td>
        				<td>".$datel."</td>
        				<td>".$adresse."</td>
      				</tr> 
      				";
				}
			 ?>
		</table>
	</div>
</body>
</html>