<h2>Contact</h2>
  <?php
    $contact_object = new Contact();
    // Vytvorí novú inštanciu triedy Contact

    $contacts = $contact_object->select();
     // Získa všetky kontaktné objekty z databázy
                  
    if(isset($_POST['delete_contact'])){
      // Kontroluje, či bola odoslaná požiadavka na odstránenie kontaktu

      $contact_id = $_POST['delete_contact'];
      // Získa ID kontaktu, ktorý sa má odstrániť

      $contact_object->delete($contact_id);
      // Volá metódu delete(), aby odstránila kontakt s daným ID

      header('Location: admin.php');
      // Presmeruje späť na administrátorskú stránku po odstránení kontaktu

      die();
      // Zastaví vykonávanie skriptu
    }
    echo '<table class="admin-table">'; // Začiatok výpisu tabuľky
    echo '<tr>
        <th>Name</th>
        <th>Email</th>
        <th>Message</th>
        <th>Acceptance</th>
        <th>Delete</th>
        <th>Edit</th>
         </tr>';// Riadok s hlavičkami tabuľky
    foreach($contacts as $c){
      // Prechádza cez všetky kontakty

      echo '<tr>';
      // Začiatok riadka tabuľky
      echo '<td>'.$c->name;'</td>'; // Vypíše meno kontaktu
      echo '<td>'.$c->email;'</td>'; // Vypíše email kontaktu
      echo '<td>'.$c->message;'</td>'; // Vypíše správu kontaktu
      echo '<td>'.$c->acceptance;'</td>'; // Vypíše stav prijatia správy kontaktu
      echo '<td>
        <form action="" method="POST">
          <button type="submit" name="delete_contact" value="'.$c->id.'"'.'>Delete</button>
        </form>
      </td>';
       echo '<td>
         <form action="contacts-update.php" method="POST">
            <button type="submit" name="edit_contact" value="'.$c->id.'"'.'>Edit by</button>
          </form>
        </td>';
    }
      echo '</table>'
  ?>