<footer class="container bg-dark text-white">
    <div class="row">
      <div class="col-25">
        <h3>Social network</h3>
        <a href="#"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-telegram fa-2x" aria-hidden="true"></i></a>
        <a href="#"><i class="fa fa-youtube fa-2x" aria-hidden="true"></i></a>
      </div>
      <div class="col-25">
        <h3>Quick links</h3>
        <?php
           $pages = array('Domov'=>'home.php',
           'Gallery'=>'gallery.php',
           'Contacts'=>'contacts.php'  
           );
           // Vytvorenie objektu triedy Menu s definovanými stránkami
           $menu_object = new Menu($pages);

           // Vygenerovanie navigačného menu pomocou metódy generate_menu()
           echo($menu_object->generate_menu());
        ?>
      </div>
    <div class="row">
      Created by Viktoriia Oliynyk 
    </div>
</footer>
<?php
      $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
      // Získanie názvu aktuálnej stránky pomocou funkcie basename(), odstránenie prípony .php a uloženie do premennej $page_name

      $page_object = new Page($page_name);
      // Vytvorenie nového objektu triedy Page s názvom aktuálnej stránky

      $page_object->add_scripts();
      // Volanie metódy add_scripts() z objektu triedy Page na pridanie skriptov pre aktuálnu stránku
      
    ?>
</html>
