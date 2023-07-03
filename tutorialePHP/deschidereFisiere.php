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
      <div class="presentation-title">Deschidere Fișiere</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Functia fopen()</h1>

          <p class="info-content">Atunci când un fișier sau o adresă URL este deschisă în PHP, funcția fopen() returnează o resursă. Parametrii $filename și $mode sunt acceptați de funcția fopen(). $filename indică fișierul care urmează să fie deschis, iar $mode indică modul de fișier, cum ar fi numai scriere, numai citire sau citire-scriere.</p>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">resource fopen ( string $filename , string $mode [, bool $use_include_path = false [, resource $context ]] )  </span>
          </div>

          <br>
          
          <h1>Modul de deschidere a fișierelor PHP</h1>

          <div class="table-container">
            <table>
              <tr>
                <th>Mod</th>
                <th>Descriere</th>
              </tr>
              <tr>
                <td>r</td>
                <td>Deschide fișierul în modul doar pentru citire. Se plasează pointerul de fișier la începutul fișierului.</td>
              </tr>
              <tr>
                <td>r+</td>
                <td>Deschide fișierul în modul de citire-scriere. Se plasează pointerul de fișier la începutul fișierului.</td>
              </tr>
              <tr>
                <td>w</td>
                <td>Deschide un fișier în modul "doar pentru scriere". Se plasează pointerul de fișier la începutul fișierului și trunchiază fișierul la lungimea zero. În cazul în care fișierul nu este găsit, se creează un nou fișier.</td>
              </tr>
              <tr>
                <td>w+</td>
                <td>Deschide fișierul în modul de citire-scriere. Se plasează pointerul de fișier la începutul fișierului și trunchiază fișierul la lungimea zero. În cazul în care fișierul nu este găsit, se creează un nou fișier.</td>
              </tr>
              <tr>
                <td>a</td>
                <td>Deschide un fișier în modul "doar pentru scriere". Se plasează pointerul de fișier la sfârșitul fișierului. În cazul în care fișierul nu este găsit, se creează un nou fișier.</td>
              </tr>
              <tr>
                <td>a+</td>
                <td>Deschide fișierul în modul de citire-scriere. Se plasează pointerul de fișier la sfârșitul fișierului. În cazul în care fișierul nu este găsit, se creează un nou fișier.</td>
              </tr>
              <tr>
                <td>x</td>
                <td>Creează și deschide un fișier în modul "doar pentru scriere". Se plasează pointerul de fișier la începutul fișierului. Dacă fișierul este găsit, funcția fopen() returnează FALSE.</td>
              </tr>       
              <tr>
                <td>x+</td>
                <td>Este la fel ca x, dar creează și deschide fișierul în modul citire-scriere.</td>
              </tr>   
              <tr>
                <td>c</td>
                <td>Deschide un fișier în modul "doar pentru scriere". În cazul în care fișierul nu există, acesta este creat. Dacă există, nu este nici trunchiat (spre deosebire de "w"), nici apelul la această funcție nu eșuează (ca în cazul lui "x"). Pointerul de fișier este poziționat la începutul fișierului</td>
              </tr>
              <tr>
                <td>c+</td>
                <td>Este la fel ca c, dar deschide fișierul în modul citire-scriere.</td>
              </tr> 
            </table>
          </div>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$deschidere = fopen("c:\\folder\\file.txt", "r");</span>

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