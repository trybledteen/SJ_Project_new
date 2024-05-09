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
           $menu_object = new Menu($pages);
           echo($menu_object->generate_menu());
        ?>
      </div>
    <div class="row">
      Created by Viktoriia Oliynyk 
    </div>
</footer>
<?php
      $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
      $page_object = new Page($page_name);
      $page_object->add_scripts();
    ?>
</html>
