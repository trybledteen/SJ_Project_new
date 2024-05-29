<?php
include_once('partials/header.php'); // Načíta hlavičku stránky
?> 
        <main>
             
              <section class="container">
                <?php
                    $gallery_object = new Gallery();
                    // Vytvorí novú inštanciu triedy Gallery

                    $gallery_single = $gallery_object->select_single();
                     // Získa informácie o jednom obrázku z galérie

                    echo '<h2>'.$gallery_single->name.'</h2>';
                    // Vypíše názov obrázku

                    echo '<img src="'.$gallery_single->image.'" width="600"/>';
                    // Vloží obrázok s príslušnou URL adresou a nastavenou šírkou

                    echo '<br><br>';
                    // Vloží medzeru medzi obrázkom a textom

                    echo '<p>'.$gallery_single->text.'</p>';
                    // Vypíše text popisu k obrázku
              
                ?>
            </section>   

        </main>
<?php
  include_once('partials/footer.php') // Načíta pätičku stránky
?> 