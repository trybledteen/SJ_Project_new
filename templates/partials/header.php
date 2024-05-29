<?php
    require_once('../_inc/functions.php'); // Načíta súbor s funkciami, ktorý sa nachádza v nadradenom adresári "_inc"  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php 'Mountain Company | '. (basename($_SERVER["SCRIPT_NAME"], '.php'));?></title> 
        
    <?php
       $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
       // Získa názov aktuálnej stránky pomocou funkcie basename(), odstráni príponu .php a uloží ho do premennej $page_name

       $page_object = new Page($page_name);
       // Vytvorí nový objekt triedy Page s názvom aktuálnej stránky

       $page_object->add_stylesheet();
       // Volá metódu add_stylesheet(), ktorá pridáva odkaz na štýlový súbor pre danú stránku

  ?>
    
</head>
<body>
    <header class="container main-header">
        <div>
            <a href="home.php">
                <img src="../assets/img/logo.jpg" height="40">
            </a>
        </div>
        <nav class="main-nav">
            <ul class="main-menu" id="main-menu">
            <?php
            // Pole s názvami stránok a ich príslušnými URL adresami
                $pages = array('Home'=>'home.php',
                'Gallery'=>'gallery.php',
                'Questions'=>'questions.php',
                'Contacts'=>'contacts.php'  
                );
                //echo(generate_menu($pages));
                //$menu_object = new Menu($pages);
                //echo($menu_object->generate_menu());
                if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
                    // Ak je používateľ prihlásený, pridá položku "Log out" do menu s odkazom na odhlásenie

                     $pages['Log out'] = 'logout.php';
                }
                // Vytvorenie objektu triedy Menu s názvami stránok
                $menu_object = new Menu($pages);

                // Vygenerovanie navigačného menu volaním metódy generate_menu() z objektu triedy Menu
                echo($menu_object->generate_menu());
            ?>
            </ul>
            <a class="hamburger" id="hamburger">
                <i class="fa fa-bars"></i>
            </a>
        </nav>
    </header>