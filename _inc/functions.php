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

function add_scripts(){
    echo('<script src="../assets/js/menu.js"></script>');
    echo('<script src="../assets/js/slider.js"></script>');
    $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
    switch($page_name){
    case 'questions':
        echo('<script src="../assets/js/accordion.js"></script>');
        break;
    }

}
function generate_slides(array $headings, string $img_folder) {
    echo('<section class="slides-container">');
    $img_files = glob($img_folder . '*.jpg');
    
    $heading_count = count($headings);
    
    for ($i = 0; $i < count($img_files); $i++) {
        echo('<div class="slide fade">');
        
        echo('<img src="'.$img_files[$i].'">');
        
        echo('<div class="slide-text">');
        
        if ($heading_count == count($img_files)) {
            echo($headings[$i]);
        } else {
            if ($i < $heading_count) {
                echo($headings[$i]);
            }
        }
        
        echo('</div>');
        
        echo('</div>');
    }
    echo('<a id="prev" class="prev">❮</a>
    <a id="next" class="next">❯</a>
    </section>');
}
function redirect_homepage(){
    header("Location: templates/home.php");
    die("Unable to find Home page");
}
?>