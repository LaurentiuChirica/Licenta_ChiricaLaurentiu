<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>AI - Aplicatii Internet</title>
  <link href="reusable_tut_php.css" rel="stylesheet" />
</head>

<?php include(".../header.php"); ?>

<body>
  <div class="main-content">
    <div class="side-navbar-container">
      <?php include('.../sidenavbar.php'); ?>
    </div>

    <div class="main-content-container">
      <div class="presentation-title">Do while</div>

      <div class="next-previous-buttons-container">
        <?php include(".../next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <p class="info-content">Pentru a parcurge un grup de linii de cod, utilizați bucla do-while din PHP. Se asigură că bucla do-while PHP se va executa cel puțin o dată.</p>

          <p class="info-content">O colecție de cod de program este executată în mod repetat cu ajutorul buclei PHP do-while. Se recomandă utilizarea buclei do-while dacă bucla trebuie să fie executată cel puțin o dată și nici măcar nu este specificat numărul de iterații.</p>

          <p class="info-content">Deoarece condiția este testată după ce codul este executat, acesta rulează întotdeauna funcția cel puțin o dată.</p>

          <p class="info-content">Cu excepția verificării condiționale, bucla do-while și bucla while sunt destul de asemănătoare. Bucla while verifică condiția la începutul buclei, iar bucla do-while verifică condiția la sfârșitul buclei. Aceasta este principala distincție între cele două bucle.</p>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">do { </span>

            <span class="php-syntax-code">&nbsp;&nbsp;// codul care urmează să fie executat</span>

            <span class="php-syntax-code">} while (conditia este TRUE)</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$numar = 1;</span>

            <span class="php-syntax-code">do {</span>

            <span class="php-syntax-code">&nbsp;echo "$numar \n";</span>

            <span class="php-syntax-code">&nbsp;$numar++;</span>

            <span class="php-syntax-code">} while($numar <= 10);</span>

                <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">1</span>
            
            <span class="php-syntax-code">2</span>
            
            <span class="php-syntax-code">3</span>
            
            <span class="php-syntax-code">4</span>
            
            <span class="php-syntax-code">5</span>
            
            <span class="php-syntax-code">6</span>
            
            <span class="php-syntax-code">7</span>
            
            <span class="php-syntax-code">8</span>
            
            <span class="php-syntax-code">9</span>
            
            <span class="php-syntax-code">10</span>
          </div>

          <h2>Diferențe dintre while și do-while</h2>

          <div class="table-container">
            <table>
              <tr>
                <th>while</th>
                <th>do-while</th>
              </tr>
              <tr>
                <td>Bucla while este denumită și bucla de control al intrării.</td>
                <td>Bucla do-while este denumită și buclă de control de ieșire.</td>
              </tr>
              <tr>
                <td>Corpul buclei nu se execută în cazul în care condiția este falsă.</td>
                <td>Corpul buclei se execută cel puțin o dată, chiar dacă condiția este falsă.</td>
              </tr>
              <tr>
                <td>Mai întâi se verifică condiția și apoi se execută blocul de instrucțiuni.</td>
                <td>Blocul de instrucțiuni se execută mai întâi și apoi se verifică condițiile.</td>
              </tr>
              <tr>
                <td>Această buclă nu utilizează punctul și virgula pentru a încheia bucla.</td>
                <td>Bucla Do-while utilizează punctul și virgula pentru a încheia bucla.</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
      <div class="info-container">
          <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
  $numar = 1;
  do {
    echo "$numar \n";
    $numar++;
  } while($numar <= 10); 
?>
          </div>
          <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
      </div>
    </div>
  </div>
</body>

<?php include(".../footer.php"); ?>

</html>