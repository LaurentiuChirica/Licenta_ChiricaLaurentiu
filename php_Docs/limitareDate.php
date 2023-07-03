<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>AI - Aplicatii Internet</title>
  <link href="../reusable_tut_php.css" rel="stylesheet" />
</head>

<?php include('../header.php');?>

<body>
  <div class="main-content">
    <div class="side-navbar-container">
      <?php include('../sidenavbar.php');?>
    </div>

    <div class="main-content-container">
      <div class="presentation-title">Limitare a selectiei datelor</div>

      <div class="next-previous-buttons-container">
        <?php include('../next_previous_buttons.php');?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>La ce este folosita limitarea selectiei datelor?</h1>

          
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>
          
          <p class="info-content">Clauza LIMIT din MySQL este utilizată pentru a indica câte înregistrări trebuie returnate.</p>

          <p class="info-content">Clauza LIMIT este foarte utilă pentru tabelele mari și simplifică proiectarea paginării sau a rezultatelor pe mai multe pagini în SQL. Performanța poate fi afectată de un număr mare de înregistrări returnate.</p>          

          <p class="info-content">Să presupunem că dorim să alegem fiecare înregistrare din intervalul de la 1 la 30 (inclusiv) din baza de date "Studenti".</p>          

          <h2>Sintaxa:</h2>
          
          <div class="static-code-example">
            <span class="php-syntax-example">$sql = "SELECT * FROM Studenti LIMIT 30";</span>
          </div>

          <p class="info-content">Ce se întâmplă dacă vrem să alegem doar înregistrările de la 16 la 25 (toate)?</p>

          <p class="info-content">Folosind OFFSET, Mysql oferă, de asemenea, o soluție pentru a rezolva acest lucru.</p>

          <p class="info-content">Conform instrucțiunii SQL de mai jos, "return only 10 records, start on record 16 (OFFSET 15)":</p>

          <p class="info-content">Alternativ, puteți utiliza următoarea sintaxă pentru a obține același efect:</p>

          <h2>Sintaxa:</h2>
          
          <div class="static-code-example">
            <span class="php-syntax-example">$sql = "SELECT * FROM Student LIMIT 15, 10";</span>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</body>

<?php
include('../footer.php');
?>

</html>