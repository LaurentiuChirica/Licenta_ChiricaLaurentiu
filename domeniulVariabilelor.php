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
      <div class="presentation-title">Domeniul Variabilelor PHP (Scope)</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Ce este Scope-ul unei variabile?</h1>

          <p class="info-content">Intervalul din program în care o variabilă poate fi accesată este denumit scope (domeniul de aplicare al variabilei). Altfel spus, "Domeniul de aplicare al unei variabile este zona din program în care este definită și accesibilă."</p>

          <p class="info-content">În PHP există trei tipuri de scope:</p>

          <li class="info-content">Local</li>

          <li class="info-content">Global</li>

          <li class="info-content">Static</li>

          <hr>

          <h1>Domeniul de aplicare local</h1>

          <p class="info-content">Pentru funcția respectivă, variabilele care sunt declarate în interiorul acesteia sunt denumite variabile locale. Numai funcția specifică în care sunt declarate poate utiliza aceste variabile locale. Ca urmare a domeniului lor de aplicare local, aceste variabile nu pot fi accesibile din afara funcției.</p>

          <p class="info-content">Variabila declarată în interiorul funcției diferă semnificativ de orice declarație cu același nume făcută în afara funcției.</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">function variabilaLocala() {</span>

            <span class="php-syntax-code">&nbsp;$numar = 10;</span>

            <span class="php-syntax-code">&nbsp;echo "Variabila locala declarata inauntrul functiei este: ". $numar;</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">variabilaLocala();</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2 class="info-content">Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Variabila locala declarata inauntrul functiei este: 10</span>
          </div>

          <hr>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">function variabilaLocala() {</span>

            <span class="php-syntax-code">&nbsp;$limbaj = "PHP";</span>

            <span class="php-syntax-code">&nbsp;echo "Limbajul de programare este: ". $limbaj;</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">variabilaLocala();</span>

            <span class="php-syntax-code">echo $limbaj;</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2 class="info-content">Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Limbajul de programare este: PHP</span>
            <span class="php-syntax-code">Notice: Undefined variable: limbaj in C:\xampp\htdocs\program\program.php on line 28</span>
          </div>

          <hr>

          <h1>Domeniul de aplicare Static</h1>

          <p class="info-content">PHP are capacitatea de a șterge variabila atunci când execuția este finalizată și memoria a fost eliberată. Uneori este necesar să se păstreze o variabilă chiar și după ce execuția unei funcții s-a încheiat. Variabilele statice sunt, astfel, o componentă crucială a încadrării variabilelor. Atunci când se definește o variabilă, cuvântul cheie static este utilizat înaintea variabilei, iar variabila rezultată este cunoscută sub numele de variabilă statică.</p>

          <p class="info-content">Variabilele statice sunt prezente doar în funcțiile locale, dar nu își eliberează memoria după ce programul a terminat execuția.</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">function variabilaStatica() {</span>

            <span class="php-syntax-code">&nbsp;static $numar1 = 3; //variabila statica</span>

            <span class="php-syntax-code">&nbsp;$numar2 = 6;</span>

            <span class="php-syntax-code">&nbsp;// incrementam variabila statica</span>

            <span class="php-syntax-code">&nbsp;$numar1++;</span>

            <span class="php-syntax-code">&nbsp;// incrementam variabila non statica</span>

            <span class="php-syntax-code">&nbsp;$numar2++;</span>

            <span class="php-syntax-code">&nbsp;echo "Static:" . $numar1 .;</span>

            <span class="php-syntax-code">&nbsp;echo "Non-Static:" . $numar2 .;</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">variabilaGlobala();</span>

            <span class="php-syntax-code">// al 2-lea apel de functie</span>

            <span class="php-syntax-code">variabilaGlobala();</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2 class="info-content">Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Static: 4</span>

            <span class="php-syntax-code">Non-Static: 7</span>

            <span class="php-syntax-code">Static: 5</span>

            <span class="php-syntax-code">Non-Static: 7</span>
          </div>

          <hr>

          <h1>Domeniul de aplicare Global</h1>

          <p class="info-content">Variabilele care sunt definite în afara funcției sunt cunoscute sub numele de variabile globale. Aceste variabile sunt accesibile în întregul program. Utilizați cuvântul cheie GLOBAL înaintea variabilei pentru a accesa variabila globală în interiorul unei funcții. Cu toate acestea, fără cuvântul cheie, aceste variabile pot fi utilizate sau accesate direct în afara funcției. În consecință, nu este necesar niciun cuvânt cheie pentru a accesa o variabilă globală în afara funcției.</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$nume = "John Doe";</span>

            <span class="php-syntax-code">function variabilaGlobala() {</span>

            <span class="php-syntax-code">&nbsp;global $nume;</span>

            <span class="php-syntax-code">&nbsp;echo "Variabila globala declarata inauntrul functiei este: ". $nume;</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">variabilaGlobala();</span>

            <span class="php-syntax-code">echo "Variabila globala declarata in afara functiei este: ". $nume;</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2 class="info-content">Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Variabila globala declarata inauntrul functiei este: John Doe</span>

            <span class="php-syntax-code">Variabila globala declarata in afara functiei este: John Doe</span>
          </div>

          <hr>

          <h2>Nota: Un avertisment care indică faptul că variabila este nedefinită va apărea dacă încercați să accesați o variabilă globală în interiorul funcției fără a utiliza cuvântul cheie global.</h2>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$nume = "John Doe";</span>

            <span class="php-syntax-code">function variabilaGlobala() {</span>

            <span class="php-syntax-code">&nbsp;echo "Variabila globala declarata inauntrul functiei este: ". $nume;</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">variabilaGlobala();</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2 class="info-content">Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Notice: Undefined variable: name in C:\xampp\htdocs\program\program.php on line 6</span>

            <span class="php-syntax-code">Variabila globala declarata in afara functiei este:</span>
          </div>
        </div>

        <h1>Utilizarea $GLOBALS in loc de global</h1>

        <p class="info-content">Array-ul predefinit $GLOBALS este o altă abordare pentru a utiliza variabila globală în interiorul funcției.</p>

        <h2>Exemplu:</h2>

        <div class="static-code-example">
          <span class="php-syntax-example">&lt;?php</span>

          <span class="php-syntax-code">$numar1 = 5;</span>

          <span class="php-syntax-code">$numar2 = 13;</span>

          <span class="php-syntax-code">function variabilaGlobala() {</span>

          <span class="php-syntax-code">&nbsp;&nbsp;$suma = $GLOBALS['numar1'] + $GLOBALS['numar2'];</span>

          <span class="php-syntax-code">&nbsp;&nbsp;echo "Suma varibilelor globale este: ". $suma;</span>

          <span class="php-syntax-code">}</span>

          <span class="php-syntax-code">variabilaGlobala();</span>

          <span class="php-syntax-example">?></span>
        </div>

        <h2 class="info-content">Rezultat:</h2>

        <div class="static-code-example">
          <span class="php-syntax-code">Suma variabilelor globale este: 18</span>
        </div>

        <p class="info-content">În cazul în care o variabilă locală și o variabilă globală au același nume, variabila locală va avea prioritate față de variabila globală în cadrul funcției.</p>

        <div class="static-code-example">
          <span class="php-syntax-example">&lt;?php</span>

          <span class="php-syntax-code">$a = 5;</span>

          <span class="php-syntax-code">$numar2 = 13;</span>

          <span class="php-syntax-code">function test() {</span>

          <span class="php-syntax-code">&nbsp;&nbsp;$a = 7;</span>

          <span class="php-syntax-code">&nbsp;&nbsp;echo "Valoarea lui a este: ". $a;</span>

          <span class="php-syntax-code">}</span>

          <span class="php-syntax-code">test();</span>

          <span class="php-syntax-example">?></span>
        </div>

        <h2 class="info-content">Rezultat:</h2>

        <div class="static-code-example">
          <span class="php-syntax-code">Valoarea lui a este: 7</span>
        </div>

        <h2>Nota: O variabila locala are prioritate mai mare decat o variabila globala.</h2>

        <hr>
        
        <div class="info-content-container">

          <h2>Aici puteti testa exemplele prezentate</h2>

          <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
  function variabilaLocala() {
    $numar = 10;
    echo "Variabila locala declarata inauntrul functiei este: ". $numar;
  }
  variabilaLocala();
?>
          </div>
          <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
        </div>
      </div>
    </div>

  </div>
</body>

<?php
include("footer.php");
?>

</html>