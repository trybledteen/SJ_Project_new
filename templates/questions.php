<?php
include('partials/header.php'); // Načíta hlavičku stránky
?>  
<main>
<?php
    $headings = array("I love peaks as individuals, as equal parts of a larger whole.", "I'm not going to conquer the mountains - they are as much a part of the world as people. Im conquering myself.");
     // Pole s nadpismi pre jednotlivé snímky

    $img_folder = '../assets/img/carousel/';// Adresár, kde sa nachádzajú obrázky pre posuvník
    generate_slides($headings, $img_folder); // Volanie funkcie na generovanie posuvníka s obrázkami
    ?>

        
     <section class="container cont">
        <div class="row_text">
            <div class="col-100 text-center">
                <p class="bottom_text"><strong><em>"Only wise mountains can tolerate human selfishness for centuries... But even their patience has a limit."</em></strong></p>
            </div>
        </div>
        </section>
      <section class="container">
        <?php
        /*$questions = array('Otázka 1' => 'Odpoveď 1',
                       'Otázka 2' => 'Odpoveď 2',
                       'Otázka 3' => 'Odpoveď 3',
                       'Otázka 4' => 'Odpoveď 4',
                      );
          generate_questions($questions);*/
          
        $questions_object = new Question();
        // Vytvorí novú inštanciu triedy Question

          $questions = $questions_object->select();
          // Získa všetky otázky a odpovede z databázy

          for ($i=0;$i<count($questions);$i++){
            // Prechádza cez všetky otázky a odpovede

            echo '<div class="accordion">';
            // Začína div pre jednu položku akordeónu

            echo '<div class="question">'.$questions[$i]->question.'</div>';
            // Vypíše otázku

            echo '<div class="answer">'.$questions[$i]->answer.'</div>';
            // Vypíše odpoveď

            echo '</div>';
             // Uzavrie div pre jednu položku akordeónu
             
          }

        ?>
      </section>
    </section>
  </div>
  </main>
  <?php
    include_once('partials/footer.php') // Načíta pätičku stránky
  ?> 