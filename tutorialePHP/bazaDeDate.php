<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>AI - Aplicatii Internet</title>
  <link href="reusable_tut_php.css" rel="stylesheet" />
</head>

<?php include("header.php"); ?>

<body>
  <div class="main-content">
    <div class="side-navbar-container">
      <?php include('sidenavbar.php'); ?>
    </div>

    <div class="main-content-container">
      <div class="presentation-title">Bază de date MySQL</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Ce este MySQL?</h1>

          <p class="info-content">Dezvoltat, distribuit și susținut de Oracle Corporation, MySQL este un sistem de baze de date gratuit, rapid, fiabil și simplu de utilizat, utilizat pe web și pe server, ideal pentru aplicații mici și mari și are compatibilitate standard SQL și de platformă.</p>

          <p class="info-content">Tabelele sunt utilizate pentru a păstra datele într-o bază de date MySQL. Un tabel este alcătuit din coloane și rânduri și conține un grup de date legate între ele.</p>

          <h1>Interogări de baze de date</h1>
          
          <p class="info-content">O interogare este o întrebare sau o cerere.</p>

          <p class="info-content">Putem interoga o bază de date pentru informații specifice și putem primi un set de înregistrări.</p>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">SELECT LastName FROM Employees</span>
          </div>

          <p class="info-content">Interogarea de mai sus selectează toate datele din coloana "LastName" din tabelul "Employees".</p>

          <h1>Descărcați baza de date MySQL</h1>
          
          <p class="info-content">Puteți obține o descărcare gratuită a unui server PHP cu o bază de date MySQL de pe acest site: <a href="http://www.mysql.com">http://www.mysql.com</a></p>

          <h2 class="info-content">Fiecare capitol va fi descris în detaliu și cu exemple în cele ce urmează.</h2>
        </div>
      </div>
    </div>
  </div>
</body>

<?php include("footer.php"); ?>

</html>