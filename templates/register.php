<?php
    include('partials/header.php');
    // Vytvorenie objektu triedy User
    $user_object = new User();

    // Spracovanie údajov z formulára po odoslaní
    if(isset($_POST['user_register'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        // Kontrola, či sa zadané heslá zhodujú
        if($password === $confirm_password) {
            // Volanie metódy register() na vytvorenie používateľa
            if($user_object->register($email, $password)) {
                // Registrácia bola úspešná
                echo "<p>Registration successful</p>";
            } else {
                // Registrácia zlyhala
                echo "<p>Registration failed</p>";
            }
        } else {
            // Heslá sa nezhodujú
            echo "<p>Passwords do not match</p>";
        }
    }
?> 
<main>
      <section class="container">
        <div class="row">
          <div class="col-100 text-center">
              <h1>Register</h1>
              <form action="" method="POST">
                    <label for="email">E-mail:</label>
                    <br>
                    <input type="email" id="email" name="email" required>
                    <br>
                    <label for="password">Password:</label>
                    <br>
                    <input type="password" id="password" name="password" required>
                    <br>
                    <label for="confirm_password">Repeat password:</label>
                    <br>
                    <input type="password" id="confirm_password" name="confirm_password" required>
                    <br>
                    <button type="submit" name="user_register">Register now</button>
              </form>
          </div>
        </div>
      </section>
    </main>
    
<?php
    include_once('partials/footer.php')
?>