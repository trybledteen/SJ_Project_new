<?php

    class Gallery extends Database{
        private $db;

        public function __construct(){
            $this->db = $this->db_connection();
        }

        public function select(){
            try{
                $sql = "SELECT * FROM gallery";
                $query =  $this->db->query($sql);
                $gallery = $query->fetchAll();
                return $gallery;
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

        public function select_single(){
            if(isset($_GET['id']) && is_numeric($_GET['id'])) {
                $id = $_GET['id'];
                try{
                    $db_query = "SELECT * FROM gallery WHERE id = ?";
                    $query = $this->db->prepare($db_query);
                    $query->execute([$id]);
                    $gallery = $query->fetch(); // Použitie funkcie fetch(), pretože očakávame len jeden riadok
                    if($gallery) {
                        return $gallery;
                    }else{
                        header("HTTP/1.0 400 Bad Request");
                        header("Location: 404.php");
                        die();
                    }
                }catch(PDOException $e){
                    echo($e->getMessage());
                } 

            } else {
                // id neexistuje alebo nie je validne
                header("HTTP/1.0 400 Bad Request");
                header("Location: 404.php");
                die();
            }
         }
        
    }

?>