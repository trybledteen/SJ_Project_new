<?php
include('partials/header.php'); // Načíta hlavičku stránky

if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true){
  header('Location: 404.php');
  // Ak používateľ nie je prihlásený alebo nie je označený ako administrátor, presmeruje na stránku s chybou 404
}
?> 
<main>
      
      <section class="container">
        <div class="row">
          <div class="col-100 text-center">
              <h5>Admin interface</h5>
              
              <?php
                  if($_SESSION['is_admin'] == 1){
                    // Kontroluje, či je prihlásený používateľ administrátor

                    include('partials/admin-contact.php');
                    // Ak je administrátor, zobrazí príslušnú časť rozhrania

                }
              ?>
          </div>
        </div>
      </section>
    </main>
    
<?php
    include_once('partials/footer-login.php') // Načíta pätičku stránky
?> 