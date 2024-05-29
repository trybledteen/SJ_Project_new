<?php

    class Contact extends Database{

        private $db;

        public function __construct(){
            $this->db = $this->db_connection();        
        }

        public function insert(){ // Metóda, ktorá vloží údaje do tabuľky kontaktov

            if($this->db){ //Skontroluje, či bolo vytvorené spojenie s databázou.
                if(isset($_POST['contact_submitted'])){ //Skontroluje, či bol formulár odoslaný. 
                    $data = array('contact_name'=>$_POST['name'], 
                      'contact_email'=>$_POST['email'],
                      'contact_message'=>$_POST['message'],
                      'contact_acceptance'=>$_POST['acceptance'],
                       // Vytvorí pole $data, ktoré obsahuje údaje z formulára (meno, e-mail, správa, prijatie).
                    );

                    try{
                      $query = "INSERT INTO contact (name, email, message, acceptance) 
                      VALUES (:contact_name, :contact_email, :contact_message, :contact_acceptance)";
                     
                     $query_run = $this->db->prepare($query);
                     $query_run->execute($data);

                     
                    }catch(PDOException $e){
                        echo $e->getMessage(); //V prípade chyby zobrazí chybovú správu.
                    }
                }else{
                }
              }
              else{
              }
        }
        public function select(){
            try{
                $sql = "SELECT * FROM contact"; 
                //Premenná $sql obsahuje reťazec dotazu SQL, ktorý vyberie všetky záznamy z tabuľky 'contact'
                
                $query =  $this->db->query($sql); 
                //Dotazovacia metóda objektu $this->db (pripojenie k databáze).Výsledok vykonania dotazu je uložený v premennej $query.
                
                $contacts = $query->fetchAll();
                //Metóda fetchAll načíta všetky reťazce z výsledku dotazu a uloží ich do premennej $contacts ako pole.
                
                return $contacts;
                //Metóda vráti pole $contacts obsahujúce všetky záznamy z tabuľky kontaktov.
            }catch(PDOException $e){
                echo $e->getMessage();
                // Spracovanie chyby, ak nastane
            }
        }

        public function delete(){
            try{
                $data = array(
                    'contact_id' => $_POST['delete_contact']
                    //Pole $data obsahuje údaje odovzdané prostredníctvom požiadavky POST, kde „delete_contact“ je ID kontaktu, ktorý sa má odstrániť.
                );
                $query = "DELETE FROM contact WHERE id = :contact_id";
                //Premenná $query obsahuje reťazec dotazu SQL na vymazanie záznamu z tabuľky 'contact', kde sa 'id' rovná odovzdanej hodnote :contact_id.
                
                $query_run = $this->db->prepare($query);
                //pripraví dotaz SQL na bezpečné vykonanie pomocou parametrov.
                
                $query_run->execute($data);
                //vykoná pripravený dotaz nahradením hodnôt z poľa $data.
            }catch(PDOException $e){
                echo $e->getMessage();
                // Spracovanie chyby, ak nastane
            }
        }

        public function select_single($contact_id){
            try{
                $data = array('contact_id'=>$contact_id);
                // $data obsahuje ID kontaktu, ktorý sa má vybrať, odovzdané metóde ako parameter $contact_id.
                
                $query = "SELECT * FROM contact WHERE id = :contact_id";
                //Premenná $query obsahuje reťazec dotazu SQL, ktorý vyberie záznam z tabuľky kontaktov, ktorého id sa rovná hodnote :contact_id.
                
                $query_run = $this->db->prepare($query);
                // pripraví dotaz SQL na bezpečné vykonanie pomocou parametrov.
                
                $query_run->execute($data);
                //  vykoná pripravený dotaz nahradením hodnôt z poľa $data.
                
                $contact_data = $query_run->fetch();
                // extrahuje prvý reťazec z výsledku dotazu a uloží ho do premennej $contact_data.
                
                return $contact_data;
            }catch(PDOException $e){
                echo $e->getMessage();
                // Spracovanie chyby, ak nastane
            }
        }

        public function edit($contact_id, $new_data){
          try{
            // Zostavenie dát pre aktualizáciu
            $data = array(
                'contact_id' => $contact_id,
                'contact_name' => $new_data['name'], // Predpokladáme, že máme pole $new_data s novými údajmi
                'contact_email' => $new_data['email'],
                'contact_message' => $new_data['message']
            );
            
             $query = "UPDATE contact SET name = :contact_name, email = :contact_email, message = :contact_message WHERE id = :contact_id";
             //Premenná $query obsahuje reťazec dotazu SQL na aktualizáciu záznamu v tabuľke kontaktov, kde sa id rovná hodnote :contact_id.

             $query_run = $this->db->prepare($query);
             //pripraví dotaz SQL na bezpečné vykonanie pomocou parametrov.

             $query_run->execute($data);
             //vykoná pripravený dotaz nahradením hodnôt z poľa $data.
             
    
        }catch(PDOException $e){
            // Spracovanie chyby, ak nastane
            echo $e->getMessage();
        }
        }
        

    }

?>