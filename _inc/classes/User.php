<?php

    class User extends Database{
        private $db;
        // Privátna premenná pre uchovávanie pripojenia k databáze

        public function __construct()
        {
            $this->db = $this->db_connection();
            // Inicializuje pripojenie k databáze pri vytvorení objektu triedy
        }

        public function login($useremail, $password){
            try{
                $data = array(
                    'user_email'=>$useremail,
                    
                    'user_password'=>md5($password),
                    // Heslo sa hasuje pomocou md5() funkcie
                );
                $sql = "SELECT * FROM user WHERE email = :user_email AND password = :user_password";
                // SQL dotaz na overenie prihlásenia

                $query_run = $this->db->prepare($sql);
                
                $query_run->execute($data);
                
                $n_rows = $query_run->rowCount();
                // Získanie počtu riadkov, ktoré vyhovujú podmienke

                if($n_rows == 1) {
                    // Ak je nájdený práve jeden riadok, prihlásenie je úspešné

                    $_SESSION['logged_in'] = true;
                     // Nastavenie session premenných na označenie prihlásenia

                    $_SESSION['is_admin'] =  $query_run->fetch()->role;
                    // Získanie roly používateľa z databázy

                    return true;
                }else {
                    return false;
                    // Ak nie je nájdený žiaden riadok, prihlásenie zlyhalo
                }
            }catch(PDOException $e){
                echo $e->getMessage();
                // Vypíše chybové hlásenie, ak nastane výnimka typu PDOException
            }
        }
        public function register($email, $password){
            try{
              // Heslo sa ukladá v nezašifrovanej forme
                $hashed_password = $password;
        
                $data = array(
                    'user_email' => $email,
                    'user_password' => md5($hashed_password),
                    // Heslo sa hasuje pomocou md5() funkcie

                    'user_role'=>'0'
                    // Predvolená rola používateľa
                );
        
                $sql = "INSERT INTO user (email, password,role) VALUES (:user_email, :user_password,:user_role)";
                // SQL dotaz na vloženie nového používateľa do databázy

                $query_run = $this->db->prepare($sql);
                
                $query_run->execute($data);
                 // Vykoná vloženie nového používateľa
        
                return true;
                // Vráti true, ak je registrácia úspešná

            } catch(PDOException $e){
                echo "Registration error: " . $e->getMessage();
                // Vypíše chybové hlásenie, ak nastane výnimka typu PDOException
                
                return false;
                // Vráti false, ak je registrácia neúspešná
            }
        }
    }

?>