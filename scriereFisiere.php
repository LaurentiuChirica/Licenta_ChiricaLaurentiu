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
      <div class="presentation-title">Scriere Fișiere</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Functiile de scriere</h1>

          <p class="info-content">Datele sunt scrise în fișiere utilizând metodele PHP fwrite() si fputs().</p>

          <p class="info-content">Pentru a scrie date într-un fișier, trebuie să utilizați modul w, r+, w+, x, x+, c sau c+.</p>

          <h1>Funcția fwrite()</h1>

          <p class="info-content">Conținutul șirului este scris într-un fișier cu ajutorul funcției PHP fwrite().</p>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">int fwrite ( resource $handle , string $string [, int $length ] )</span>
          </div>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$fp = fopen('test.txt', 'w'); //deschide fișierul în modul doar pentru scriere</span>

            <span class="php-syntax-code">fwrite($fp, 'Salutare ');</span>

            <span class="php-syntax-code">fwrite($fp, 'studenti!');</span>

            <span class="php-syntax-code">fclose($fp);</span>

            <span class="php-syntax-code">echo "Fișier scris cu succes";</span>

            <span class="php-syntax-example">?></span>
          </div>

          <br>

          <h1>Suprascrierea fișierului</h1>

          <p class="info-content">Dacă executați din nou codul de mai sus, acesta va șterge datele anterioare ale fișierului și va scrie noile date.</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$fp = fopen('test.txt', 'w'); //deschide fișierul în modul doar pentru scriere</span>

            <span class="php-syntax-code">fwrite($fp, 'Salutare ');</span>

            <span class="php-syntax-code">fclose($fp);</span>

            <span class="php-syntax-code">echo "Fișier scris cu succes";</span>

            <span class="php-syntax-example">?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

<?php include("footer.php"); ?>

</html>