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
      <div class="presentation-title">Expresii regulate</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Ce este o expresie regulata?</h1>

          <p class="info-content">Expresiile regulate (denumite uneori "regex" sau "RegExp") sunt șiruri de text special concepute pentru a căuta modele în text.</p>
          
          <p class="info-content">Una dintre cele mai puternice tehnici de procesare și manipulare efectivă și eficientă a textului din zilele noastre este utilizarea expresiilor regulate.</p>

          <h2>Sintaxa:</h2>
          <div class="static-code-example">
            <span class="php-syntax-example">$exp = "/tutoriale/i";</span>
          </div>

          <p class="info-content">În exemplul menționat mai sus, delimitatorul este /, modelul căutat este 'tutoriale', iar modificatorul i face ca căutarea să nu țină cont de majuscule și minuscule.</p>

          <p class="info-content">Orice caracter care nu este o literă, un număr, o backslash sau un spațiu poate fi folosit ca delimitator. Bară oblică (/) este cel mai utilizat delimitator, deși, atunci când modelul dvs. implică bare oblice, este practic să selectați și alți delimitatori, cum ar fi # sau ~.</p>


          <h1>Functii pentru expresii regulate</h1>
          
          <p class="info-content">Expresiile regulate pot fi utilizate cu o varietate de funcții PHP. Funcțiile preg_match(), preg_match_all() și preg_replace() sunt unele dintre cele mai frecvent utilizate:</p>

          <table>
            <tr>
              <th>Functie</th>
              <th>Descriere</th>
            </tr>
            <tr>
              <td>preg_match()</td>
              <td>Returnează 1 dacă modelul a fost găsit în șirul de caractere și 0 în caz contrar.</td>
            </tr>
            <tr>
              <td>preg_match_all()</td>
              <td>Returnează numărul de ori în care modelul a fost găsit în șir, care poate fi și 0</td>
            </tr>
            <tr>
              <td>preg_replace()</td>
              <td>Întoarce un nou șir de caractere în care modelele potrivite au fost înlocuite cu un alt șir de caractere</td>
            </tr>
          </table>  

          <h1>Funcția preg_match()</h1>
          
          <p class="info-content">Funcția preg_match() vă va spune dacă un șir de caractere conține corespondențe ale unui model.</p>
          
          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$sir_1 = "Facultatea de Automatica si Calculatoare";</span>

            <span class="php-syntax-code">$model_1 = "/calculatoare/i";</span>

            <span class="php-syntax-code">echo preg_match($model_1, $sir_1);</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">1</span>
          </div>

          <h1>Funcția preg_match_all()</h1>
          
          <p class="info-content">Funcția preg_match_all() vă va spune câte potriviri au fost găsite pentru un model într-un șir de caractere.</p>
          
          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$sir_2 = "Facultatea de Automatica si Calculatoare apartine Universitatii Gheorghe Asachi";</span>

            <span class="php-syntax-code">$model_2 = "/tat/i";</span>

            <span class="php-syntax-code">echo preg_match_all($model_2, $sir_2);</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">2</span>
          </div>

          <h1>Funcția preg_replace()</h1>
          
          <p class="info-content">Funcția preg_replace() va înlocui toate potrivirile modelului dintr-un șir cu un alt șir.</p>
          
          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$sir_3 = "Universitatea Cuza din Iasi";</span>

            <span class="php-syntax-code">$model_3 = "/cuza/i";</span>

            <span class="php-syntax-code">echo preg_replace($model_3, "Asachi", $sir_3);</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Universitatea Asachi din Iasi</span>
          </div>
        </div>
      </div>
      <div class="info-container">
        <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
$sir_1 = "Facultatea de Automatica si Calculatoare";
$model_1 = "/calculatoare/i";
echo preg_match($model_1, $sir_1);

echo "\n\n";

$sir_2 = "Facultatea de Automatica si Calculatoare apartine Universitatii Gheorghe Asachi";
$model_2 = "/tat/i";
echo preg_match_all($model_2, $sir_2);

echo "\n\n";

$sir_3 = "Universitatea Cuza din Iasi";
$model_3 = "/cuza/i";
echo preg_replace($model_3, "Asachi", $sir_3);
?>
        </div>
        <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
      </div>
    </div>
  </div>
</body>

<?php include("footer.php"); ?>

</html>