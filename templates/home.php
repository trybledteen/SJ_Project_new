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
            <div class="row">
              <div class="col-25"><br>
                <h2 class=" who ">Who are we?</h2>
              </div>
              <div class="col-100">
                <h1>Team of professional tourists with up to 30 years of experience.</h1>
                <p>The team includes instructors and guides from different cities of America:
                    certified instructors in mountaineering, sports
                    and children's and youth tourism, as well as instructors who have passed
                    certification in the International Federation of Mountain Guides Association in Canada.</p>
              </div>
            </div>
          </section>
          <section>
          <div class="photo">
          <?php
             $image_files = ['people.jpg', 'people2.jpg', 'people3.jpg']; 
             foreach ($image_files as $image) {
                echo '<div class="img">';
                echo '<img src="../assets/img/' . $image . '">';
                echo '</div>';
              }
          ?>
          <section class="container cont">
            <p class="company">MOUNTAIN COMPANY</p>
          </section>
</div>

    <main>
    <section class="container">
        <div class="row_1">
            <div class="col-50">
                <br><br>
                <h2 class="fact_1">3 facts</h2>
                <p class="fact"> reasons why you would recommend us</p>
            </div>
    </section>

    <?php
    $facts = [
        [
            'image' => '../assets/img/fact-1.png',
            'title' => 'Tours without heavy backpacks',
            'description' => 'We will bring you to the start of the route, saving effort and time...'
        ],
        [
            'image' => '../assets/img/fact-2.png',
            'title' => 'Affordable prices and installments',
            'description' => 'We organize and conduct tours without intermediaries...'
        ],
        [
            'image' => '../assets/img/fact-3.png',
            'title' => 'Insurance included in the tour package',
            'description' => 'Each participant of the trip is insured up to $40,000.'
        ]
    ];

    foreach ($facts as $fact) {
        echo '<section class="container">';
        echo '<div class="row">';
        echo '<div><br><br>';
        echo '<i><img src="' . $fact['image'] . '"></i>';
        echo '</div>';
        echo '<div class="col-50"><br><br>';
        echo '<h1>' . $fact['title'] . '</h1>';
        echo '<p>' . $fact['description'] . '</p>';
        echo '</div>';
        echo '</div>';
        echo '</section>';
    }
    ?>

    <section class="container cont">
        <p class="company">YOU CAN RELY ON US</p>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-25"><br><br>
                <h2 class="who">About company "Mountain Company"</h2>
            </div>
            <div class="col-100">
                <h1>Mountains Company is your guide to the world of adventure and amazing landscapes.</h1>
                <p>Our team consists of experienced guides and organizers who love the mountains as much as you do...</p>
                <p>With Mountains Company, you can choose a route that suits your interests and skill level...</p>
                <p>Join us and discover the world of mountains with Mountains Company. Your adventures start here!</p>
            </div>
        </div>
    </section>
  </main>

  <?php
    include_once('partials/footer.php')
  ?> 