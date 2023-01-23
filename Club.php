<?php
class Club
{
    // Properties
    private $id;
    private $name;
    private $description;
    private $adresse;
    private $domaine;
    function __construct($id, $name, $description, $adresse, $domaine)
    {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->adresse = $adresse;
        $this->domaine = $domaine;
    }
    function afficherClub()
    {
        if (
            $this->id &&
            $this->name &&
            $this->description &&
            $this->adresse &&
            $this->domaine
        ) {
            return '<b>id : </b> ' .
                $this->id .
                '<br>' .
                '<b>Nom:</b> ' .
                $this->name .
                '<br>' .
                '<b>Description:</b> ' .
                $this->description .
                '<br>' .
                '<b>Adresse:</b> ' .
                $this->adresse .
                '<br>' .
                '<b>Domaine:</b> ' .
                $this->domaine .
                '<br>';
        } else {
            echo 'no result!';
        }
    }
}
?>
