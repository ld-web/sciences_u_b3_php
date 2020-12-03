<?php
require_once 'layout/header.php';
?>

<div class="container">
  <form action="contact_process.php" method="post">
    <div>
      <label for="nameField">Nom :</label>
      <input type="text" name="name" id="nameField" value="test" required />
    </div>

    <div>
      <label for="firstname">Prénom :</label>
      <input type="text" name="firstname" id="firstname" value="test" required />
    </div>

    <div>
      <label for="email">Email :</label>
      <input type="email" name="email" id="email" value="test@test.com" required />
    </div>

    <div>
      <label for="major">Majeur :</label>
      <input type="checkbox" name="major" id="major" />
    </div>

    <div>
      <span>J'ai lu l'avertissement sur la protection des données</span>
      <input type="radio" name="gpdr" value="Oui" id="gpdrOui" />&nbsp;<label for="gpdrOui">Oui</label>
      <input type="radio" name="gpdr" value="Non" id="gpdrNon" checked />&nbsp;<label for="gpdrNon">Non</label>
    </div>

    <div>
      <select name="subject" id="subject">
        <option value="">--- Motif ---</option>
        <option value="information">Demande d'informations</option>
        <option value="devis">Demande de devis</option>
        <option value="bug">Bug informatique</option>
      </select>
    </div>

    <div>
      <label for="message">Message :</label>
      <br />
      <textarea name="message" id="message" cols="45" rows="8"></textarea>
    </div>

    <div><input type="submit" value="Envoyer" /></div>
  </form>
</div>

<?php
require_once 'layout/footer.php';
