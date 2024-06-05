<?php


trait Icon {
    // Attributo privato per memorizzare l'icona
    private string $icon;

    // getter per ottenere l'icona
    public function getIcon(): string  
    {
        return $this->icon; // Restituisce l'icona
    }

    // setter per impostare l'icona
    public function setIcon(string $icon): void {
        $this->icon = $icon; 
     }
}

?>