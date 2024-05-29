<?php
include('partials/header.php'); // Načíta hlavičku stránky

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
  // Kontroluje, či je používateľ prihlásený

  header('Location: admin.php');
  // Ak je používateľ prihlásený, presmeruje ho na administrátorskú stránku

}
?> 
<main>

      <section class="container">
        <div class="row">
          <div class="col-100 text-center">
                <h4>Login</h4>
                <form action="" method="POST">
                    <input type="email" name="email" placeholder="Your name">
                    <br>
                    <input type="text" name="password" placeholder="Your password">
                    <br>
                    <input type="submit" value="Send to" name="user_login">
                </form>
                
                <?php
                    if(isset($_POST['user_login'])){
                      // Kontroluje, či bola odoslaná požiadavka na prihlásenie používateľa pomocou formulára

                        $email = $_POST['email'];
                        // Získa email z formulára

                        $password = $_POST['password']; 
                        // Získa heslo z formulára
                       
                        $user_object = new User();
                        // Vytvorí novú inštanciu triedy User pre prácu s používateľmi

                        $login_success = $user_object->login($email,$password);
                        // Zavolá metódu login s emailom a heslom a skontroluje, či je prihlásenie úspešné

                         //ak metóda vráti TRUE
                        if($login_success == true){
                            header('Location: admin.php');
                            // Presmeruje používateľa na administrátorskú stránku

                            die;
                             // Zastaví vykonávanie skriptu

                        }else{
                          // Ak prihlásenie nie je úspešné

                            echo 'Incorrect username or password';
                            // Vypíše správu o nesprávnom používateľskom mene alebo hesle
                            
                        }

                    }
                ?>
               
          </div>
        </div>
      </section>
    </main>
    
<?php
    include_once('partials/footer-login.php') // Načíta pätičku stránky
?> 