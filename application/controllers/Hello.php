<?php
class Hello extends CI_Controller {
function index()
{
$this->accueil();
}
function accueil ()
{
$this->load->view('helloMessage');
}

function accueilChaleureux()
{
$this->load->view('helloChaleureux');
}
function accueilPersonnalise($unPseudo)
{
	$data=array();// creation d'un tableau $data pour transmettre les données à une vue
	$data['pren']=$unPseudo;
	$this->load->view('helloPersonnalise',$data); // $data transmis à la vue helloPersonnalise
}
function accueilFormel($uneCivilite,$unPrenom,$unNom)
{
	$data=array(); // creation d'un tableau $data pour transmettre les données à une vue
	$data['civilite']=$uneCivilite;
	$data['prenom']=$unPrenom;
	$data['nom']=$unNom;
	$this->load->view('helloFormel',$data); // $data transmis à la vue helloFormel
}
}
/* End of file hello.php */
/* Location: ./application/controllers/hello.php */
?>
