<?php
include_once('partials/header.php');
?> 
        <main>
             
              <section class="container">
                <?php
                    $gallery_object = new Gallery();
                    $gallery_single = $gallery_object->select_single();

                    echo '<h2>'.$gallery_single->name.'</h2>';
                    echo '<img src="'.$gallery_single->image.'" width="600"/>';
                    echo '<br><br>';
                    echo '<p>'.$gallery_single->text.'</p>';
              
                ?>
            </section>   

        </main>
<?php
  include_once('partials/footer.php')
?> 