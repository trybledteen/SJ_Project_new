<?php
include_once('partials/header.php');
?>     
    <main>
        <section class="slides-container">
            <div class="slide fade">
              <img src="img/banner1.jpg">
              <div class="slide-text">
                I love peaks as individuals, as equal parts of a larger whole.
              </div>
            </div>

            <div class="slide fade">
              <img src="img/banner3.jpg">
              <div class="slide-text">
                I'm not going to conquer the mountains - they are as much a part of the world as people. I'm conquering myself.
              </div>
            </div>
            
            <a id="prev" class="prev">❮</a>
            <a id="next" class="next">❯</a>
        </section>
        
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