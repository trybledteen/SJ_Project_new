<?php

    class Database{

        private $host = 'localhost';
        private $db_name = 'sj_project';
        private $user_name = 'root';
        private $password = '';
        // V týchto vlastnostiach sú uložené parametre pripojenia k databáze, napríklad hostiteľ, názov databázy, používateľské meno a heslo. 
    
        protected $connection; // Táto chránená vlastnosť sa použije na uloženie pripojenia k databáze.
       
        protected function db_connection(): PDO { 
            // Táto metóda vracia objekt PDO, ktorý predstavuje pripojenie k databáze.
            try {
                //$pdo = new PDO('mysql:host=localhost;dbname=vaša_databáza', 'vaše_používateľské_meno', 'vaše_heslo');
                $connection = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name . 
                                      ";charset=utf8", 
                                      $this->user_name, 
                                      $this->password);
                $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); 
                // setAttribute - Toto je metóda triedy PDO, ktorá sa používa na nastavenie atribútov pripojenia.
                // ATTR_ERRMODE - Toto je konštanta reprezentujúca atribút režimu spracovania chýb. Definuje, ako bude PDO spracovávať chyby.
                // PDO::ERRMODE_WARNING - Toto je hodnota atribútu, ktorá označuje, že chyby budú generovať varovania (PHP Warning).
                
                $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
                // setAttribute - Toto je metóda triedy PDO, ktorá sa používa na nastavenie atribútov pripojenia.
                // PDO::ATTR_DEFAULT_FETCH_MODE - Toto je konštanta reprezentujúca atribút, ktorý definuje predvolený režim vzorkovania údajov.
                // PDO::FETCH_OBJ - pri výbere údajov budú riadky vrátené ako anonymné objekty triedy, kde sa názvy stĺpcov stanú vlastnosťami objektu.

                return $connection;
                
            } catch(PDOException $e) {
                die("Database connection error: " . $e->getMessage());
                // V prípade chyby zobrazí chybovú správu.
            }
        }
    }

?>