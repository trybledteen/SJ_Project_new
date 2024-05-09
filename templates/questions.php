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
            <div class="accordion">
              <div class="question">What are the main destinations offered by your company?</div>
              <div class="answer">Our company provides tours to various mountain regions, including the Alps, the Himalayas, the Andes, and the Carpathians. We also specialize in tours to national parks and remote mountain trails.</div>
            </div>
            <div class="accordion">
              <div class="question">Are there special programs for beginners in mountain tourism?</div>
              <div class="answer">Yes, we have programs tailored for beginners, including training in basic mountain skills, mountain navigation, and safety in extreme conditions.</div>
            </div>
            <div class="accordion">
              <div class="question">What is the duration and cost of an average tour?</div>
              <div class="answer">The duration and cost of tours vary depending on the chosen destination and comfort level. Typically, our tours range from one to two weeks, with budgets to suit different requirements.</div>
            </div>
            <div class="accordion">
                <div class="question">What methods do you use to ensure safety during travels?</div>
                <div class="answer">We adhere to strict safety standards, providing experienced guides trained in first aid, communication devices for emergencies, and regular safety briefings.</div>
              </div>
              <div class="accordion">
                <div class="question">Are your tours adapted for different levels of physical fitness?</div>
                <div class="answer">Yes, our tours are diverse and suitable for both experienced mountaineers and those who are just starting their mountain journey. We offer routes of varying difficulty.
              </div>
              </div>
              <div class="accordion">
                <div class="question">What additional services are included in the tour cost?</div>
                <div class="answer">The tour cost includes transfers, accommodation, basic meals, group activities, and the services of a guide. Additional services can be provided upon request.</div>
              </div>
        </section>
    </main>

    <?php
    include_once('partials/footer.php')
  ?> 