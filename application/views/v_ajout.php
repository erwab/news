<?php
/* chargement v_entete, v_bandeau */
$this->load->view ('v_entete' );
$this->load->view ('v_bandeau' );
?>
<div id="formAjout">
	<h2>Ajout d'une news</h2>
	<?php
/* création de la balise <form> avec form_open*/
	/* form_open() génère la balise <form> avec attribut action renseigné par le paramètre */
	echo form_open ( '/c_news/verif_form_ajouter_news' );
	?>
    <div class="form-group">
	<?php
	/* form_error() permet d'afficher l'erreur de validation du champ passé en paramètre */
	echo form_error ( 'auteur' );
/* définition d'un label avec form_label*/ 
	echo form_label ( "Nom de l'auteur" ); /* form_label() génère une balise label */
	$data = array(                    /* $data contient les paramètres nécessaires */
		'name' => 'auteur',           /* pour la balise input  */
		'id' => 'auteur',
		'maxlength' => '30',
		'size' => '25',   /* pour la longueur du champ de saisie  */
		'value' => set_value('auteur')
	);
/* définition d'une zone de saisie avec form_input (voir remarque) */
	echo form_input ( $data ); /* génère une balise input de type text à l'aide du contenu de $data */
	?>
	</div>
	<!-- à vous de compléter -->
	<div class="form-group">
	<?php
	/* form_error() permet d'afficher l'erreur de validation du champ passé en paramètre */
	echo form_error ( 'titre' );
/* définition d'un label avec form_label*/ 
	echo form_label ( "Titre" ); /* form_label() génère une balise label */
	$data = array(                    /* $data contient les paramètres nécessaires */
		'name' => 'titre',           /* pour la balise input  */
		'id' => 'titre',
		'maxlength' => '100',
		'size' => '25',   /* pour la longueur du champ de saisie  */
		'value' => set_value('titre')
	);
/* définition d'une zone de saisie avec form_input (voir remarque) */
	echo form_input ( $data ); /* génère une balise input de type text à l'aide du contenu de $data */
	?>
	</div>
	<div class="form-group">
	<?php
	/* form_error() permet d'afficher l'erreur de validation du champ passé en paramètre */
	echo form_error ( 'contenu' );
/* définition d'un label avec form_label*/ 
	echo form_label ( "Contenu" ); /* form_label() génère une balise label */
	$data = array(                    /* $data contient les paramètres nécessaires */
		'name' => 'contenu',           /* pour la balise input  */
		'id' => 'contenu',
		'maxlength' => '30',
		'size' => '25',   /* pour la longueur du champ de saisie  */
		'value' => set_value('contenu')
	);
/* définition d'une zone de saisie avec form_input (voir remarque) */
	echo form_input ( $data ); /* génère une balise input de type text à l'aide du contenu de $data */
	?>
	</div>
	<div>
	<?php 
/* définition d'un bouton avec form_submit */
	echo form_submit('btn_ajoutNews', 'Ajouter');  /* génère une balise input de type submit */ ?>

	</div>
	<?php 
/* fermeture du formulaire avec form_close */
	echo form_close();  /* form_close() génère une balise </form> */ ?>
</div>
<?php   /* chargement v_piedPage*/
$this->load->view ( 'v_piedPage' );
?>