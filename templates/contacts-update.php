<?php
include('partials/header.php');
// Načíta hlavičku stránky

$contact_object = new Contact();
// Vytvorí novú inštanciu triedy Contact pre prácu s kontaktmi

if(isset($_POST['edit_contact'])) {
  // Kontroluje, či bola odoslaná požiadavka na úpravu kontaktu

  $edit_contact_id = $_POST['edit_contact'];
   // Získa ID kontaktu, ktorý sa má upraviť

  $contact_data = $contact_object->select_single($edit_contact_id);
  // Získa údaje o kontakte pomocou jeho ID

}

if($contact_data) {
// Vyplnenie údajov do formulára
  $name = $contact_data->name; // Nastaví sa meno kontaktu
  $email = $contact_data->email;  // Nastaví sa email kontaktu  
  $message = $contact_data->message; // Nastaví sa správa kontaktu
}

if(isset($_POST['edit_contact_id'], $_POST['name'], $_POST['email'], $_POST['message'])) {
  // Kontroluje, či boli odoslané údaje z formulára

  $edit_contact_id = $_POST['edit_contact_id'];
  // Získa ID kontaktu, ktorý sa má upraviť

  $new_data = array(
    // Vytvorí pole s novými údajmi o kontakte

      'name' => $_POST['name'], // Nové meno kontaktu
      'email' => $_POST['email'], // Nový email kontaktu
      'message' => $_POST['message'] // Nová správa kontaktu
  );

  $contact_object->edit($edit_contact_id, $new_data);
  // Volá metódu edit() na úpravu kontaktu v databáze

  header('Location: admin.php');
  // Presmeruje späť na administrátorskú stránku po úprave kontaktu

  die();
  // Zastaví vykonávanie skriptu
}

?> 
<main>
      <section class="container">
        <div class="row">
          <div class="col-100 text-center">
              <h1>Edit contact</h1>
              <form action="" method="POST">
                <label for="name">Name:</label>
                <br>
                <input type="text" id="name" name="name" value="<?php echo $name?>">
                <br>
                <label for="email">Email:</label>
                <br>
                <input type="email" id="email" name="email" value="<?php echo $email?>">
                <br>
                <label for="message">Report:</label>
                <br>
                <textarea id="message" name="message"><?php echo $message?></textarea>
                <br>
                <button type="submit" name="edit_contact_id" value="<?php echo $edit_contact_id?>">Save changes</button>
              </form> 
                
          </div>
        </div>
      </section>
    </main>
    
<?php
    include_once('partials/footer.php') // Načíta pätičku stránky
?>
