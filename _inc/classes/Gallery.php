<?php

    class Gallery extends Database{ // Definuje triedu s názvom Galéria, ktorá rozširuje inú triedu s názvom Databáza
        private $db; // Deklaruje súkromnú premennú $db na uchovávanie pripojenia k databáze

        public function __construct(){ // Konštruktor metódy, ktorá sa volá pri vytvorení objektu triedy
            $this->db = $this->db_connection();  // Inicializuje premennú $db volaním metódy db_connection z nadradenej triedy
        }

        public function select(){  // Metóda na výber všetkých záznamov z tabuľky 'gallery'
            try{
                $sql = "SELECT * FROM gallery";
                // SQL dotaz na výber všetkých záznamov z tabuľky 'gallery'

                $query =  $this->db->query($sql);
                // Vykonáva SQL dotaz

                $gallery = $query->fetchAll();
                // Načíta všetky riadky z výslednej množiny ako asociatívne pole

                return $gallery;
                 // Vracia načítané údaje z galérie

            }catch(PDOException $e){
                echo $e->getMessage();
                // Vypíše chybové hlásenie
            }
        }

        public function select_single(){
             // Metóda na výber jedného záznamu z tabuľky 'gallery' na základe poskytnutého ID

            if(isset($_GET['id']) && is_numeric($_GET['id'])) {
                // Kontroluje, či je nastavený parameter 'id' a či je číselný

                $id = $_GET['id'];
                // Načíta hodnotu parametra 'id'

                try{
                    $db_query = "SELECT * FROM gallery WHERE id = ?";
                    // SQL dotaz na výber záznamu s poskytnutým ID

                    $query = $this->db->prepare($db_query);
                    // Pripravuje SQL dotaz na vykonanie

                    $query->execute([$id]);
                     // Vykonáva pripravený dotaz s poskytnutým ID

                    $gallery = $query->fetch(); // Použitie funkcie fetch(), pretože očakávame len jeden riadok
                    if($gallery) {
                        // Ak sa nájde záznam
                        return $gallery;
                        // Vracia načítané údaje z galérie

                    }else{ // Ak sa žiadny záznam nenájde
                        header("HTTP/1.0 400 Bad Request");
                        // Nastavuje HTTP status kód na indikáciu neplatnej požiadavky

                        header("Location: 404.php");
                         // Presmeruje na stránku s chybou 404

                        die();
                        // Ukončuje vykonávanie skriptu
                    }
                }catch(PDOException $e){
                    echo($e->getMessage());
                    // Vypíše chybové hlásenie
                } 

            } else {
                // id neexistuje alebo nie je validne
                header("HTTP/1.0 400 Bad Request");
                // Nastavuje HTTP status kód na indikáciu neplatnej požiadavky

                header("Location: 404.php");
                // Presmeruje na stránku s chybou 404

                die();
                 // Ukončuje vykonávanie skriptu
            }
         }
        
    }

?>