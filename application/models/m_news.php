<?php  
class M_news extends CI_Model
{
	private $table='news';
	public function get_info()
	{
		//	On simule l'envoi du résultat d'une requête
		return array('auteur' => 'Gaston Lagaff',
		'titre' => 'Un premier modèle',
		'contenu' => ' Mon premier modèle simule une requête' ,
		'dateaj' => '24/07/20',
		'datemo' => '28/07/20');
	}
	public function ajouter ($auteur, $titre, $contenu)
	{
		return $this->db->set('auteur',  $auteur)
		->set('titre',   $titre)
		->set('contenu', $contenu)
		->set('date_ajout', 'NOW()', false)
		->set('date_modif', 'NOW()', false)
		->insert($this->table);
     }
    /**
	 *	Modifie le titre et/ou le contenu d'une news
	 *	@param integer $id:		L'id de la news à modifier
	 *	@param string $titre:	 	Le nouveau titre de la news
	 *	@param string $contenu: 	Le nouveau contenu de la news
	 *	@return bool:			Le résultat de la requête
 	*/
public function modifier($idP, $titre = null, $contenu = null)
// =null: valeur par défaut si aucune nouvelle valeur fournie
{
		// Aucune nouvelle valeur fournie
		if($titre == null AND $contenu == null)
		{
			return false;
		}
		if($titre != null)
		{
			$this->db->set('titre', $titre);
		}
		if($contenu != null)
		{
			$this->db->set('contenu', $contenu);
		}
		$this->db->set('date_modif', 'NOW()', false);
	
		// La condition pour modifier la news ayant pour id $id
		$this->db->where('id', (int) $idP);
	
		return $this->db->update($this->table);
	}
	/**
	 *	Supprime une news
	 *	@param integer $id:		L'id de la news à modifier
	 *	@return bool:			Le résultat de la requête
 	*/
public function supprimer($idP)
{	
		// La condition pour modifier la news ayant pour id $id
		$this->db->where('id', (int) $idP);
	
		return $this->db->delete($this->table);
	}
	/**
 	*	Retourne le nombre de news.
 	*	
 	*	@param array $where	Tableau associatif permettant de définir des conditions
 	*	@return integer		Le nombre de news satisfaisant la condition
 	*/
public function count($where = array())
{
	return (int) $this->db->where($where)
			      ->count_all_results($this->table);
}

/**
 *	Retourne une liste de $nb dernières news.
 *
 *	@param integer 	$nb	Le nombre de news souhaité
 *	@param integer 	$debut	L'indice de la première news
 *	@return collection d'objets contenant la liste de news
 */
public function lister ($nb = 10, $debut = 0)
{
	return $this->db->select('*')
	->from($this->table)
	->limit($nb, $debut)
	->order_by('id', 'desc')
	->get()
	->result();
}

}
?>