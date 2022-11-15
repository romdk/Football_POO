<?php
class Pays{
    private string $_nom;
    private array $_equipes;

    public function __construct(string $nom){
        $this->_nom = $nom;
        $this->_equipes = [];
    }

    public function getNom(): string{
        return $this->_nom;
    }

    public function setNom(string $nom){
        $this->_nom = $nom;
    }

    public function ajouterEquipe(Equipe $equipe){
        $this->_equipes[] = $equipe;
    }

    public function afficherEquipes(){
        $result = "Equipes de ".$this->_nom."<br>";
        foreach ($this->_equipes as $equipe){
            $result .= $equipe->getNom()."<br>";
        } return $result;
    }

    public function __toString(){
        return $this->_nom;
    }    
}
?>