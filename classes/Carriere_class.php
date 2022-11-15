<?php

class Carriere{
    private Joueur $_joueur; 
    private Equipe $_equipe; 
    private int $_dateEquipe;  

    public function __construct(Joueur $joueur,Equipe $equipe,int $dateEquipe){
        $this->_joueur = $joueur;
        $this->_joueur->ajouterCarriere($this);
        $this->_equipe = $equipe;
        $this->_equipe->ajouterCarriere($this);
        $this->_dateEquipe = $dateEquipe;
    }

    
    public function getJoueur(): Joueur{
        return $this->_joueur;
    }

    public function setJoueur(Joueur $joueur){
        $this->_joueur = $joueur;
    }
    
    public function getEquipe(): Equipe{
        return $this->_equipe;
    }

    public function setEquipe(Equipe $equipe){
        $this->_equipe = $equipe;
    }
    
    public function getDateEquipe(): int{
        return $this->_dateEquipe;
    }

    public function setDateEquipe(int $dateEquipe){
        $this->_dateEquipe = $dateEquipe;
    }
}

?>