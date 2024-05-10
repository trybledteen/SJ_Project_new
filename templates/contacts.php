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

        <section class="container">
            <div class="text-center">
                <h4>Dear mountain adventure enthusiasts!</h4>
                <p>Before embarking on an exciting journey into the world of mountain exploration with us, we would like to learn more about your interests and preferences. Please fill out our short form so that we can create the perfect itinerary for you.</p> 
                <p>If you have any questions or special requests, feel free to let us know. We are ready to make your mountain adventure unforgettable and as comfortable as possible!</p>
                <p>Thank you for your attention, and we wish you incredible experiences on your upcoming mountain adventures!</p>
            </div>
            <div class="row form"> 
              <div class="col-25">
                <h4>Contact us</h4>
              </div>
                <!--formular sem-->
                <div class="col-10"></div>
                <form id="contact" action="thankyou.php" method="POST">
                  <input type="text" placeholder="Vaše meno" name="name" required><br>
                  <input type="email" placeholder="Váš email" name="email" required><br>
                  <textarea placeholder="Vaša správa" name="message"></textarea><br>
                  <input type="checkbox" name="acceptance" value="1" required>
                  <label> Súhlasím so spracovaním osobných údajov.</label><br>
                  <input type="submit" name="contact_submitted"value="Odoslať" >
                </form>
                </div>
            </div>
        </section>
    </main>
    
    <?php 
    include_once('partials/footer.php'); 
    ?>

