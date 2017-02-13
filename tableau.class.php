<?php

class Tableau{
    //Zone de déclaration de propriétés
    private $id_auteur; 
    private $nom; 
    private $prenom;
    
    function __construct($id_auteur,$nom,$prenom){//constructeur
        $this->id_auteur=$id_auteur;//initialise les proprietes
        $this->nom=$nom;
        $this->prenom=$prenom;
    }
    public function setId($id_auteur){ 
        $this->id_auteur=$id_auteur; 
    } 
    public function getId(){ 
    return $this->id; 
    } 
    public function setNom($nom){ 
    $this->nom=$nom; 
    } 
    public function getNom(){ 
    return $this->nom; 
    } 
    public function getPrenom(){ 
    return $this->prenom; 
    }
}

