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
                    $n_rows = 2;
                    $n_cols = 4;
                    $n_gallery = 1;
                    for($i = 0; $i<$n_rows;$i++){
                        echo('<div class="row">');
                        for($j = 0; $j<$n_cols;$j++){
                           echo('<div class="col-50 gallery text-white text-center" id="gallery-'.$n_gallery.'">');
                           echo('Mountains company'.$n_gallery);
                           $n_gallery++;
                           echo('</div>');
                        }
                        echo('</div>');
                    }
                ?>
    </main>
    <?php
    include_once('partials/footer.php')
  ?> 