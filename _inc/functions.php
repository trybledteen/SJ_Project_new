<?php 
require('config.php');

function add_stylesheet() {
    echo '<link rel="stylesheet" href="../assets/css/style.css">';
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
    echo '<link rel="stylesheet" href="../assets/css/slider.css">';

    $page_name = basename($_SERVER["SCRIPT_NAME"], '.php');

    switch($page_name){
        case 'contacts':
            echo '<link rel="stylesheet" href="../assets/css/contacts.css">';
            break;
        case 'questions':
            echo '<link rel="stylesheet" href="../assets/css/accordion.css">';
            break;
        case 'gallery':
                echo '<link rel="stylesheet" href="../assets/css/gallery.css">';
            break;
    }
}
    //Generuje odkazy na CSS súbory pre stránky

function add_scripts(){
    echo('<script src="../assets/js/menu.js"></script>');
    echo('<script src="../assets/js/slider.js"></script>');
    $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
    switch($page_name){
    case 'questions':
        echo('<script src="../assets/js/accordion.js"></script>');
        break;
    }
    //Generuje odkazy na JS súbory pre stránky
}
function generate_slides(array $headings, string $img_folder) {
    echo('<section class="slides-container">');
    // Získanie zoznamu súborov obrázkov v adresári
    $img_files = glob($img_folder . '*.jpg');
    // Kontrola počtu nadpisov
    $heading_count = count($headings);
    // Prechádza cez každý obrázok
    for ($i = 0; $i < count($img_files); $i++) {
        // Začiatok divu pre snímku
        echo('<div class="slide fade">');
        // Vloženie obrázka
        echo('<img src="'.$img_files[$i].'">');
        // Začiatok divu pre text snímky
        echo('<div class="slide-text">');
        // Podmienka pre výpis nadpisu
        if ($heading_count == count($img_files)) {
            // Vypíše i-ty nadpis, ak je ich dostatok
            echo($headings[$i]);
        } else {
            // Inak vypíše nadpis len ak sme mimo rozsahu poľa
            if ($i < $heading_count) {
                echo($headings[$i]);
            }
        }
        // Koniec divu pre text snímky
        echo('</div>');
        // Koniec divu pre snímku
        echo('</div>');
    }
    echo('<a id="prev" class="prev">❮</a>
    <a id="next" class="next">❯</a>
    </section>');
}
function generate_gallery(int $n_rows, int $n_cols){
    $n_gallery = 1; //Počiatočná hodnota pre poradové číslo galéria
    $col_class = 100/$n_cols; // Výpočet šírky stĺpca na základe počtu stĺpcov
    // Prechádza cez každý riadok v mriežke galéria
    for($i = 0; $i < $n_rows; $i++){
        echo('<div class="row">'); // Začiatok riadku
        // Pre každý stĺpec v aktuálnom riadku
        for($j = 0; $j < $n_cols; $j++){
            // Vytvára HTML element pre galériovú položku s identifikátorom a textom
            echo('<div class="col-'.$col_class.' photo gallery text-white text-center" id="gallery-'.$n_gallery.'">');
            echo('Web stránka '.$n_gallery);// Text galériovej položky
            $n_gallery++; // Inkrementuje poradové číslo galérie
            echo('</div>'); // Ukončuje galéria položku
        }

        echo('</div>'); // Ukončuje riadok
    }
}
function generate_questions(array $questions){
    foreach($questions as $question => $answer){
        echo('<div class="accordion">');
        echo('<div class="question">'.$question.'</div>');
        echo('<div class="answer">'.$answer.'</div>');
        echo('</div>');
    }
}
function redirect_homepage(){
    header("Location: templates/home.php");
    die("Unable to find Home page");
}
?>