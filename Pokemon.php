<?php 

//require_once 'Cartes.php';

class Pokemon 
{
	private $_nom ;
	private $_vie ;
	private $_types;
	private $_niveaux;
	private $_attaque;
	private $_attaque2;


public function Attaquer() {
  }

 public function Evoluer() {
  } 

public function Retraite() {
  }


	public function get_nom(){
		return $this->_nom;
	}

	public function set_nom($_nom){
		$this->_nom = $_nom;
	}

	
	public function get_vie(){
		return $this->_vie;
	}

	public function set_vie($_vie){
		$this->_vie = $_vie;
	}


	public function get_types(){
		return $this->_types;
	}

	public function set_types($_types){
		$this->_types = $_types;
	}
	
	public function get_niveaux(){
		return $this->_niveaux;
	}

	public function set_niveaux($_niveaux){
		$this->_niveaux = $_niveaux;
	}

	
	public function get_attaque(){
		return $this->_attaque;
	}

	public function set_attaque($_attaque){
		$this->_attaque = $_attaque;
	}

	public function get_attaque2(){
		return $this->_attaque2;
	}

	public function set_attaque2($_attaque2){
		$this->_attaque2 = $_attaque2;
	}

}

$pika = new Pokemon();
$pika -> set_nom("pika");
$pika ->set_vie("180");
$pika ->set_types("feu");
$pika ->set_niveaux("niveau 2");
$pika ->set_attaque("éclaire");
$pika ->set_attaque2("queu de fer");



$boguérisse = new Pokemon();
$boguérisse -> set_nom("Boguérisse");
$boguérisse ->set_vie("90");
$boguérisse ->set_types("plante");
$boguérisse ->set_niveaux("niveau 1");
$boguérisse ->set_attaque("Poing Dard");
$boguérisse ->set_attaque2("Attaque Trébuchante");


print_r($pika);
print_r($boguérisse);


 ?>