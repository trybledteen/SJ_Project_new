<?php

    class Question extends Database{
        
        private $db;

        public function __construct()
        {
            $this->db = $this->db_connection();
        }

        public function select(){

            try{
                $sql = "SELECT * FROM questions";
                $query =  $this->db->query($sql);
                $questions = $query->fetchAll();
                return $questions;

            }catch(PDOException $e){
                echo $e->getMessage();
            }

        }
    }

?>