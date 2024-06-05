<?php


class Products {
    //nome del prodotto, l'immagine e il prezzo
    private string $name;
    private string $image;
    private int $price;

    // Costruttore della classe Products
    public function __construct(string $_name, string $_image, int $_price) {
        //costruttore
        $this->name = $_name;
        $this->image = $_image;
        $this->price = $_price;

        // se il prezzo è negativo lancia un'eccezione 
        if($_price < 0) {
            throw new Exception("Il prezzo non può essere negativo");
        }
    }

    // getter per ottenere il nome del prodotto, l'immagine e il prezzo
    public function getName() {
        return $this->name;
    }

    public function getImage() {
        return $this->image; 
    }

    public function getPrice() {
        return $this->price; 
    }
}

?>