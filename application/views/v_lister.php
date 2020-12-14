<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Voici les 10 dernières news!</title>
</head>
<body>
	<?php
	$this->load->view('v_entete');
	$this->load->view('v_bandeau');
	$this->load->view('v_messageAccueil');
	?>
	<h1>Les news!</h1>
	<div id="liste">
		<table>
			<tr align="center">
				<th>Identifiant</th>
				<th>Auteur</th>
				<th>Titre de la news</th>
				<th>Contenu</th>
			</tr>
			<?php
			// parcours des objets de la liste $liste
			// résultant de l'exécution de la méthode lister_news() de M_news
			foreach ($liste as $item) :
			?>
			<tr>
				<td><?php echo $item->id;?></td>
				<td><?php echo $item->auteur; ?></td>
				<td><?php echo $item->titre;?></td>
				<td><?php echo $item->contenu;?></td>
			</tr>
			<?php endforeach;?>
		</table>
	</div>
	<?php
	$this->load->view('v_piedPage');
	?>
</body>
</html>