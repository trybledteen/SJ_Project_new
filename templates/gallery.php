<?php
include_once('partials/header.php');
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
        <?php
        
        $gallery_object = new Gallery();
        $gallery = $gallery_object->select();
        
        for ($i = 0; $i < count($gallery); $i++) {
            $temp_i = $i + 1;
            if ($temp_i % 4 == 1) {
                echo '<div class="row">';
            }

            echo '<div class="col-50 gallery text-white text-center" style="background-image: url(\''.$gallery[$i]->image.'\');">';
            echo '<a href="">'.$gallery[$i]->name.'</a>';
            echo '</div>';

            if ($temp_i % 4 == 0 || $temp_i == count($gallery)) {
                echo '</div>'; 
            }
        }
        ?>
    </main>
    <?php
    include_once('partials/footer.php')
  ?> 