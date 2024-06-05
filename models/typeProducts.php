<?php

require_once __DIR__ . "/products.php";
require_once __DIR__ . "/category.php";

// TypeProducts che estende la classe Products
class TypeProducts extends Products {
    // tipo di prodotto e la categoria 
    private string $typeName;
    private Category $category;

    // Costruttore della classe TypeProducts
    public function __construct(string $_name, string $_image, int $_price, string $_typeName, Category $category)
    {
        
        parent::__construct($_name, $_image, $_price);

        
        $this->typeName = $_typeName;
        $this->category = $category;
    }

    // getter per ottenere il tipo di prodotto
    public function getType() {
        return $this->typeName; 
    }

    //getter per ottenere la categoria associata al prodotto
    public function getCategory() {
        return $this->category; 
    }
}
?>