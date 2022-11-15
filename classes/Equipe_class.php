<?php
class Equipe{
    private string $_nom; 
    private Pays $_pays; 
    private int $_date; 
    private array $_carriere;

    public function __construct(string $nom,Pays $pays,int $date){
        $this->_nom = $nom;
        $this->_pays = $pays;
        $this->_pays->ajouterEquipe($this);
        $this->_date = $date;
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

    public function getPays(): Pays{
        return $this->_pays;
    }

    public function setPays(Pays $pays){
        $this->_pays = $pays;
    }

    public function getDate(): int{
        return $this->_date;
    }

    public function setDate(int $date){
        $this->_date = $date;
    }

    public function __toString(){
        return $this->_nom;
    }

    public function afficherJoueurs(){
        $result = $this->_nom.'<br>';
        foreach($this->_carriere as $carriere){
            $result .= $carriere->getJoueur() ." (".$carriere->getDateEquipe().")<br>";
        } return $result;
    }
}
?>