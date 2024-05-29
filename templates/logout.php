<?php
include('partials/header.php'); // Načíta hlavičku stránky
?>
<main>
    <section class="container">
        <div class="row">
            <div class="col-100 text-left">
              
                <?php
                    unset($_SESSION['logged_in']);
                    // Odstráni premennú 'logged_in' z relačnej premennej $_SESSION, čím používateľa odhlási

                    unset($_SESSION['is_admin']);
                    // Odstráni premennú 'is_admin' z relačnej premennej $_SESSION, čím používateľa odhlási ako administrátora (ak je tak označený)

                    header('Location: login.php');
                    // Presmeruje používateľa na prihlasovaciu stránku po odhlásení
                ?>
            </div>
        </div>
    </section> 
</main>
<?php
    include('partials/footer.php'); // Načíta pätičku stránky
?>