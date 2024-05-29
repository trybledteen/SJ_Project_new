<?php

    class Menu{
        
        private $pages;
        // Privátna premenná pre uchovávanie zoznamu stránok a ich URL adries

        public function __construct($pages)
        {
            $this->pages = $pages;
            // Nastavenie zoznamu stránok a ich URL adries pri vytváraní objektu triedy
            
        }

        function generate_menu(): string{
            // Metóda na generovanie navigačného menu, vracia reťazec

            $menuItems = '';  
            // Inicializácia premennej pre uloženie HTML kódu navigačného menu    

            foreach($this->pages as $page_name => $page_url){
                // Prechádza všetky položky v zadanom zozname stránok a URL adries


                $menuItems .= '<li><a href="' . $page_url . '">' . $page_name . '</a></li>';
                // Pre každú stránku pridá odkaz do navigačného menu
            }
            // Vráti vygenerovaný HTML kód pre navigačné menu
            return $menuItems;
        }
    }

?>