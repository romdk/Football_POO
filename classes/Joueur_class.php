<?php
class Joueur{
    private string $_nom; 
    private string $_prenom; 
    private DateTime $_dateNaissance; 
    private Pays $_pays; 
    private array $_carriere;

    public function __construct(string $nom,string $prenom,string $dateNaissance,Pays $pays){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_dateNaissance = new DateTime($dateNaissance);
        $this->_pays = $pays;
        $this->_carriere=[];
    }

    public function ajouterCarriere(Carriere $carriere){
        $this->_carriere[]=$carriere;

    }

    public function getNom(): string{
        return $this->_nom;
    }

    public function setNom(string $nom){
        $this->_nom = $nom;
    }

    public function getPrenom(): string{
        return $this->_prenom;
    }

    public function setPrenom(string $prenom){
        $this->_prenom = $prenom;
    }

    public function getDateNaissance(): DateTime{
        return $this->_dateNaissance;
    }

    public function setDateNaissance(DateTime $dateNaissance){
        $this->_DateNaissance = $dateNaissance;
    }

    public function getPays(): Pays{
        return $this->_pays;
    }

    public function setPays(Pays $pays){
        $this->_pays = $pays;
    }
    public function afficherAge(){
        $today = date("Y-m-d");
        $birthDate = $this->getDateNaissance();
        $age = date_diff($birthDate, date_create($today));
        return $age->format('%y');
    }

    public function __toString(){
        return $this->_prenom." ".$this->_nom;
    }

    public function afficherCarriere(){
        $result = $this->getPrenom().' '.$this->getNom().'<br>'.$this->getPays().' - '.$this->afficherAge().' ans <br>';
        foreach ($this->_carriere as $carriere){
            $result .= $carriere->getEquipe().' ('.$carriere->getDateEquipe().')'."<br>";            
        }
        return $result;
    }
}
?>