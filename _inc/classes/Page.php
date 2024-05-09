<?php

    class Page{

        private $page_name;

        public function __construct($page_name)
        {
            $this->page_name = $page_name;
        }

        function add_stylesheet() {
            echo '<link rel="stylesheet" href="../assets/css/style.css">';
            echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
            echo '<link rel="stylesheet" href="../assets/css/slider.css">';
        
            $page_name = basename($_SERVER["SCRIPT_NAME"], '.php');
        
            switch($page_name){
                case 'contacts':
                    echo '<link rel="stylesheet" href="../assets/css/contacts.css">';
                    break;
                case 'questions':
                    echo '<link rel="stylesheet" href="../assets/css/accordion.css">';
                    break;
                case 'gallery':
                    echo '<link rel="stylesheet" href="../assets/css/gallery.css">';
                    break;
            }
        }

        function add_scripts(){
            echo('<script src="../assets/js/menu.js"></script>');
            echo('<script src="../assets/js/slider.js"></script>');
            $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
            switch($page_name){
            case 'questions':
                echo('<script src="../assets/js/accordion.js"></script>');
                break;
            }
        
        }
    }

?>