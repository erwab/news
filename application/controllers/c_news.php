<?php
class C_news extends CI_Controller {

function index() {
$this->accueil();
}

function accueil () {
$this->load->model('m_news');
$data=$this->m_news->get_info();
$this->load->view('v_news',$data); // $data transmis à la vue v_news
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

}
/* End of file c_news.php */
/* Location: ./application/controllers/c_news.php */
?>
