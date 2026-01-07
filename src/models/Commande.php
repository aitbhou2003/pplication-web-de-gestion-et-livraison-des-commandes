<?php
namespace Src\Models;

class Commande{
    private $description ;
    private $statue ;
    private $adressDepart ;
    private $adressArrive;
    private $option;
    
    /**
     * Get the value of titre
     */ 
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set the value of titre
     *
     * @return  self
     */ 
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of statue
     */ 
    public function getStatue()
    {
        return $this->statue;
    }

    /**
     * Set the value of statue
     *
     * @return  self
     */ 
    public function setStatue($statue)
    {
        $this->statue = $statue;

        return $this;
    }
}