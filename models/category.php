<?php

require_once __DIR__ . "/icon.php";


class Category {
    use Icon; //gestione delle icone

    // nome della categoria
    private string $name;

    // Costruttore della classe Category
    public function __construct(string $_name)
    {
        $this->name = $_name; 
    }

    // getter per ottenere il nome della categoria
    public function getCategoryName() {
        return $this->name; 
    }
}
?>