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
        </section><br><br><br>
        <section class="text-center">
            <h4>Thank you very much for filling out our form!</h4><br><br>
            <p class="thank">Your answers will help us understand you better and create an unforgettable route in the world of mountain adventures.</p>
            <p class="thank">If you have any additional questions or concerns, don't hesitate to let us know. We are ready to make your future adventure as comfortable and unique as possible!</p>
            <p class="thank">Thank you for choosing our company, and we are waiting for you in the mountains!</p>
        </section>  
        <?php
                  $contact_object = new Contact();
                  $contact_object->insert();
               ?>  
    </main>
    <?php
    include_once('partials/footer.php')
  ?> 