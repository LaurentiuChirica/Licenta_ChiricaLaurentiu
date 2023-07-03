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
      <div class="presentation-title">Citire Fișiere</div>

      <div class="next-previous-buttons-container">
        <?php include('../next_previous_buttons.php');?>      
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Functiile de citire</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">PHP oferă o serie de funcții pentru citirea datelor din fișiere. Există diverse funcții care vă permit să citiți date dintr-un fișier în întregime, linie cu linie sau caracter cu caracter.</p>

          <p class="info-content">Următoarea listă conține funcțiile PHP disponibile pentru citirea fișierelor.</p>

          <li class="info-content">read()</li>

          <li class="info-content">fgets()</li>

          <li class="info-content">fgetc()</li>

          <h1>Funcția fread()</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">Datele fișierului sunt citite utilizând funcția PHP fread(). Resursa și dimensiunea fișierului sunt cele două intrări necesare.</p>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">string fread (resource $handle , int $length )</span>
          </div>

          <li class="info-content">$handle reprezintă un pointer de fișier care este creat de funcția fopen().</li>

          <li class="info-content">$length reprezintă lungimea octetului care urmează să fie citit.</li>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$numeFisier = "c:\\file1.txt";</span>

            <span class="php-syntax-code">$fp = fopen($numeFisier, "r"); //deschide fișierul în modul de citire</span>

            <span class="php-syntax-code">$continut = fread($fp, filesize($filename)); //citiți fișierul</span>

            <span class="php-syntax-code">echo "&lt;pre>$continut&lt;/pre>"; //imprimarea datelor din fișier</span>

            <span class="php-syntax-code">fclose($fp);//închide fișierul</span>

            <span class="php-syntax-example">?></span>
          </div>

          <br>

          <h1>Funcția fgets()</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">O singură linie din fișier este citită cu ajutorul funcției PHP fgets().</p>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">string fgets ( resource $handle [, int $length ] )</span>
          </div>

          <br>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$fp = fopen("c:\\file1.txt", "r"); //deschide fișierul în modul de citire</span>

            <span class="php-syntax-code">echo fgets($fp);</span>

            <span class="php-syntax-code">fclose($fp);</span>

            <span class="php-syntax-example">?></span>
          </div>

          <br>

          <h1>Funcția fgetc()</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>
          
          <p class="info-content">Caracterul unic poate fi citit din fișier utilizând metoda PHP fgetc(). Folosiți funcția !feof() în interiorul buclei while pentru a utiliza funcția fgetc() pentru a prelua toate datele.</p>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">string fgetc ( resource $handle )</span>
          </div>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$fp = fopen("c:\\file1.txt", "r"); //deschide fișierul în modul de citire</span>

            <span class="php-syntax-code">while(!feof($fp)) {</span>

            <span class="php-syntax-code">&nbsp;echo fgetc($fp);</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">fclose($fp);//închide fișierul</span>

            <span class="php-syntax-example">?></span>
          </div>
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