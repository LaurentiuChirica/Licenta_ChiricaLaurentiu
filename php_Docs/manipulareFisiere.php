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
      <div class="presentation-title">Manipulare Fișiere</div>

      <div class="next-previous-buttons-container">
        <?php include('../next_previous_buttons.php');?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Funcția PHP readfile()</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">Putem să creăm fișiere, să citim fișiere linie cu linie, să citim fișiere caracter cu caracter, să scriem fișiere, să adăugăm fișiere, să ștergem fișiere și să închidem fișiere utilizând sistemul de fișiere PHP.</p>

          <p class="info-content">Citiți datele dintr-un fișier și scrieți-le în bufferul de ieșire utilizând funcția readfile().</p>

          <p class="info-content">Să spunem că avem un fișier text pe server numit "dictionarWeb.txt" care arată astfel:</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">HTML = Hyper Text Markup Language</span>

            <span class="php-syntax-code">AJAX = Asynchronous JavaScript and XML</span>

            <span class="php-syntax-code">XML = EXtensible Markup Language</span>

            <span class="php-syntax-code">CSS = Cascading Style Sheets</span>

            <span class="php-syntax-code">PHP = PHP Hypertext Preprocessor</span>

            <span class="php-syntax-code">SVG = Scalable Vector Graphics</span>

            <span class="php-syntax-code">SQL = Structured Query Language</span>
          </div>

          <p class="info-content">Următorul cod PHP citește un fișier și scrie conținutul acestuia în bufferul de ieșire (utilizarea cu succes a funcției readfile() returnează cantitatea de octeți citiți):</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">echo readfile("dictionarWeb.txt");</span>

            <span class="php-syntax-example">?></span>
          </div>

          <p class="info-content">Funcția readfile() este utilă dacă tot ceea ce doriți să faceți este să deschideți un fișier și să-i citiți conținutul.</p>
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