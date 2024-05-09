<?php
include('partials/header.php');
?> 
<main>
<?php
    $headings = array("I love peaks as individuals, as equal parts of a larger whole.", "I'm not going to conquer the mountains - they are as much a part of the world as people. Im conquering myself.");
    $img_folder = '../assets/img/carousel/';
    generate_slides($headings, $img_folder);
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
          
        $questions_object = new Question();
          $questions = $questions_object->select();
          for ($i=0;$i<count($questions);$i++){
            echo '<div class="accordion">';
            echo '<div class="question">'.$questions[$i]->question.'</div>';
            echo '<div class="answer">'.$questions[$i]->answer.'</div>';
            echo '</div>';
          }

        ?>
      </section>
    </section>
  </div>
  </main>
  <?php
    include_once('partials/footer.php')
  ?> 