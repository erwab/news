<?php
class C_news extends CI_Controller {

function index() {
$this->accueil();
}

function accueil () {
$this->load->model('m_news');
$data=$this->m_news->get_info();
$this->load->view('v_accueil',$data); // $data transmis à la vue v_news
}

function testAjout() {
$this->load->model('m_news');
$data=$this->m_news->ajouter('jsp', 'jsp', 'jsp');
}

function test_modifier() {
$this->load->model('m_news');
$data=$this->m_news->modifier(1,'jsp2', 'jsp2');
}

function test_supprimer() {
$this->load->model('m_news');
$data=$this->m_news->supprimer(1);
}

function test_count(){
$this->load->model('m_news');
$data['compteur']=$this->m_news->count (array('auteur'=>'Hergé'));
$this->load->view('v_compte',$data); // $data transmis à la vue v_compte
}

function lister_news(){
$this->load->model('m_news');
$data['liste']=$this->m_news->lister();
$this->load->view('v_lister',$data); // $data transmis à la vue v_lister
}

function form_ajouter_news(){
$this->load->view('v_ajout');
}

function ajouter_news(){
$this->load->model('m_news');
$data=$this->m_news->ajouter($_POST['auteur'],$_POST['titre'],$_POST['contenu']);
$this->lister_news();
}

function verif_form_ajouter_news(){
//	Chargement de la bibliothèque qu'on peut aussi charger en autoload
$this->load->library('form_validation');
//	Définition des règles de validation pour auteur
$this->form_validation->set_rules('auteur', 'Nom de l\'auteur', 'trim|required|min_length[5]|max_length[30]|alpha_dash');
$this->form_validation->set_rules('titre', 'Titre', 'trim|required|min_length[5]|max_length[100]|alpha_dash');
$this->form_validation->set_rules('contenu', 'Contenu', 'trim|alpha_dash');
if($this->form_validation->run())
	{
		// Si run() return true, le formulaire est valide (les champs sont conformes aux règles: on indique l'action à exécuter
		$this->ajouter_news();
	}
else
	{
		// Le formulaire est invalide ou vide, il faut le recharger
		$this->form_ajouter_news();
	}

}

}
/* End of file c_news.php */
/* Location: ./application/controllers/c_news.php */
?>
