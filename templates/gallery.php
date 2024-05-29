<?php
include_once('partials/header.php'); // Načíta hlavičku stránky
?>     
    <main>
    <?php
          $headings = array("I love peaks as individuals, as equal parts of a larger whole.", "I'm not going to conquer the mountains - they are as much a part of the world as people. Im conquering myself.");
          // Pole s nadpismi pre jednotlivé snímky

          $img_folder = '../assets/img/carousel/'; // Adresár, kde sa nachádzajú obrázky pre posuvník
          generate_slides($headings, $img_folder); // Volanie funkcie na generovanie posuvníka s obrázkami
        ?>
        
        <section class="container cont">
            <div class="row_text">
              <div class="col-100 text-center">
                  <p class="bottom_text"><strong><em>"Only wise mountains can tolerate human selfishness for centuries... But even their patience has a limit."</em></strong></p>
              </div>
            </div>
        </section>
        <?php
        
        $gallery_object = new Gallery();
        // Vytvorí novú inštanciu triedy Gallery

        $gallery = $gallery_object->select();
        // Získa všetky obrázky z galérie

        
        for ($i = 0; $i < count($gallery); $i++) {
            // Prechádza cez všetky obrázky v galérii

            $temp_i = $i + 1;
            // Uloží aktuálny index obrázka v galérii

            if ($temp_i % 4 == 1) {
                 // Ak je aktuálny index deliteľný 4 bez zvyšku, začne nový riadok

                echo '<div class="row">';
            }

            echo '<div class="col-50 gallery text-white text-center" style="background-image: url(\''.$gallery[$i]->image.'\');">';
            // Vytvorí div pre obrázok s názvom a URL obrázka ako pozadie

            echo '<a href="">'.$gallery[$i]->name.'</a>';
            // Vypíše názov obrázka s odkazom (aktuálne bez URL)

            echo '</div>';

            if ($temp_i % 4 == 0 || $temp_i == count($gallery)) {
                // Ak sme na konci riadku alebo sme na konci zoznamu obrázkov

                echo '</div>'; 
                // Uzavrie div pre riadok
            }
        }
        ?>
    </main>
    <?php
    include_once('partials/footer.php') // Načíta pätičku stránky
  ?> 