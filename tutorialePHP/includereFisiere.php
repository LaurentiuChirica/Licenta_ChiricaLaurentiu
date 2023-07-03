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
      <div class="presentation-title">Includere Fișiere</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <p class="info-content">PHP ne permite să dezvoltăm o varietate de elemente și metode care sunt utilizate în mod repetat în numeroase site-uri. Scrierea acestor operații în numeroase pagini necesită mult timp. Folosiți ideea de includere a fișierelor pentru a facilita includerea fișierelor în diferite programe și pentru a evita necesitatea de a scrie codul de numeroase ori.</p>

          <p class="info-content">"PHP vă permite să includeți fișiere, permițându-vă să reutilizați în mod repetat conținutul unei pagini. Atunci când doriți să folosiți același cod HTML sau PHP pe mai multe pagini ale unui site web, includerea fișierelor este destul de benefică. În PHP, există două moduri de a include un fișier.</p>

          <li class="info-content">include</li>

          <li class="info-content">require</li>

          <p class="info-content">Cu excepția cazului de eșec, include și require sunt interschimbabile.</p>

          <li class="info-content">Include produce doar un avertisment E_WARNING și continuă execuția scriptului.</li>

          <li class="info-content">Require produce o eroare fatală, E_COMPILE_ERROR, care oprește execuția scriptului.</li>

          <h1>Avantaje</h1>

          <li class="info-content"><b>Reutilizarea codului:</b> Cu ajutorul construcției include și need, scriptul HTML sau PHP poate fi reutilizat în numeroase scripturi PHP.</li>

          <li class="info-content"><b>Simplu de editat:</b> În loc să modificăm fiecare fișier în parte, dacă dorim să aducem modificări unei pagini web, o putem face modificând fișierul sursă care este inclus în fiecare pagină web.</li>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">include 'numeFisier';</span>

            <span class="php-syntax-code">sau</span>

            <span class="php-syntax-code">require 'numeFisier';</span>
            
            <span class="php-syntax-example">?></span>
          </div>

          <h1>Include</h1>

          <p class="info-content">Un fișier poate fi inclus pe baza unei căi de acces folosind PHP include. Utilizați fie o cale absolută, fie una relativă pentru fișier.</l>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">include 'numeFisier';</span>

            <span class="php-syntax-code">sau</span>

            <span class="php-syntax-code">include ('numeFisier');</span>
            
            <span class="php-syntax-example">?></span>
          </div>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">// meniu.php</span>

            <span class="php-syntax-code">&lt;a href="http://www.google.com">Acasa&lt;/a></span>

            <span class="php-syntax-code">&lt;a href="http://www.google.com">PHP&lt;/a></span>

            <span class="php-syntax-code">&lt;a href="http://www.google.com">JavaScript&lt;/a></span>

            <span class="php-syntax-code">&lt;a href="http://www.google.com">HTML&lt;/a></span>

            <span class="php-syntax-example">?></span>
          </div>

          <br>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php include("meniu.php");?></span>

            <span class="php-syntax-code">&lt;h1>Pagina Principala&lt;/h1></span>
          </div>

          <h1>Require</h1>

          <p class="info-content">La fel ca include, care este utilizat și pentru a include fișiere, PHP require este o cerință. Singura diferență dintre ea și include este că oprește execuția scriptului dacă fișierul nu poate fi găsit.</p>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php?></span>

            <span class="php-syntax-code">require 'numeFisier';</span>

            <span class="php-syntax-code">sau</span>

            <span class="php-syntax-code">require ('numeFisier');</span>
            
            <span class="php-syntax-example">?></span>
          </div>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">// meniu.php</span>

            <span class="php-syntax-code">&lt;a href="http://www.google.com">Acasa&lt;/a></span>

            <span class="php-syntax-code">&lt;a href="http://www.google.com">PHP&lt;/a></span>

            <span class="php-syntax-code">&lt;a href="http://www.google.com">JavaScript&lt;/a></span>

            <span class="php-syntax-code">&lt;a href="http://www.google.com">HTML&lt;/a></span>

            <span class="php-syntax-example">?></span>
          </div>

          <br>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php require("meniu.php");?></span>

            <span class="php-syntax-code">&lt;h1>Pagina Principala&lt;/h1></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<?php include("footer.php"); ?>

</html>