<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fête d'anniversaire</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>AGBANGLANON Renaud</h1>
  </header>

  <main>
    <section id="informations">
    <h2>Informations sur la Fête</h2>
      <p>Date et Heure : 11 Avril 2024 à 17h00</p>
      <p>Thème : Années 80 <button onclick="displayExplanations()">En savoir plus</button></p>
      <p id="explanations" style="display: none;">Le thème des années 80 est une source d'inspiration populaire pour les fêtes en raison de la diversité et de la créativité associées à cette époque. Les années 80 ont été marquées par un mélange éclectique de styles, 
      de modes et de mouvements culturels, créant une atmosphère unique et distincte.</p>
      <p>Lieu : <a href="https://www.lemans.fr/dynamique/la-proximite/les-salles-municipales/ledescriptif-des-salles-municipales/la-salle-du-jardin-des-plantes/" target="_blank">Salle des Fêtes du Jardin des Plantes</a></p>
    </section>

      
    <section id="inscription">
      <h2>Inscription à la Fête</h2>
      <form action="register.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>

        <label for="nombre">Nombre de personnes :</label>
        <input type="number" id="nombre" name="nombre" required>

        <label for="confirmation">Confirmation de Présence :</label>
        <select id="confirmation" name="confirmation" required>
          <option value="oui">Oui, je serai présent(e)</option>
          <option value="non">Non, je ne pourrai pas venir</option>
        </select>

        <button type="submit">Envoyer</button>
      </form>
    </section>

    <section id="totalGuests">
      <h2>Total des Invités</h2>
      Total Guests: <?php include "count_guests.php"; ?></p>
    </section>
  </main>

  <footer>
    <p>Merci de confirmer votre présence avant le 09 Avril 2024.</p>
    <div class="contact-info">
            <div>
                <h3>Contact</h3>
                <p>  Email: masuperfête@email.com</p>
                <p> Téléphone: +33 6 19 69 77 38</p>
            </div>
            <div>
                <h3>Adresse</h3>
                <p>16 Boulevard Charles Nicolle, LEMANS</p>
                <p>Code Postal: 72000</p>
            </div>
        </div>
        <div class="social-links">
            <a href="https://www.facebook.com/" target="_blank">
            <img src="images/facebook.png" alt="Facebook" width="50" height="50"></a>

            <a href="https://twitter.com/" target="_blank">            
            <img src="images/twitter.png" alt="Facebook" width="50" height="50"></a>

            <a href="https://www.instagram.com/" target="_blank">            
            <img src="images/instagram.png" alt="Facebook" width="50" height="50"></a>

        </div>
  </footer>

  <script src="script.js"></script>
</body>
</html>
