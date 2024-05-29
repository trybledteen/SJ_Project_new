<?php

    class Question extends Database{
        
        private $db;
        // Privátna premenná pre uchovávanie pripojenia k databáze

        public function __construct()
        {
            $this->db = $this->db_connection();
            // Inicializuje pripojenie k databáze pri vytvorení objektu triedy
        }

        public function select(){
             // Metóda na výber všetkých otázok z tabuľky 'questions'

            try{
                $sql = "SELECT * FROM questions";
                // SQL dotaz na výber všetkých záznamov z tabuľky 'questions'

                $query =  $this->db->query($sql);
                // Vykonáva SQL dotaz

                $questions = $query->fetchAll();
                 // Načíta všetky riadky z výslednej množiny ako asociatívne pole

                return $questions;
                // Vracia načítané otázky

            }catch(PDOException $e){
                echo $e->getMessage(); // Vypíše chybové hlásenie, ak nastane výnimka typu PDOException
                
            }

        }
    }

?>