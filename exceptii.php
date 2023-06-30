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
      <div class="presentation-title">Excepții</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Ce este o excepție?</h1>

          <p class="info-content">Un obiect care descrie o eroare sau un comportament neașteptat al unui script PHP se numește excepție.</p>

          <p class="info-content">Un număr mare de funcții și clase PHP aruncă excepții.</p>

          <p class="info-content">Clasele și funcțiile scrise de utilizator pot, de asemenea, să arunce excepții.</p>

          <p class="info-content">Atunci când o funcție întâlnește date pe care nu le poate utiliza, excepțiile reprezintă o tehnică eficientă de încheiere a funcției.</p>


          <h1>De ce este nevoie de tratarea excepțiilor?</h1>
          
          <p class="info-content">Gestionarea excepțiilor este un mecanism robust pe care îl oferă PHP. Acesta vă permite să rezolvați diverse probleme în timpul execuției, inclusiv IOException, ClassNotFoundException și SQLException. Excepția de împărțire la zero, o excepție aritmetică, este unul dintre cele mai cunoscute exemple de tratare a excepțiilor.</p>
  
          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">function impartire($dividend, $divizor) {</span>
              
            <span class="php-syntax-code">&nbsp;if($divizor == 0) {</span>
              
            <span class="php-syntax-code">&nbsp;&nbsp;throw new Exception("Impartire prin zero");</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">&nbsp;return $dividend / $divisor;</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">echo impartire(5, 0);</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">PHP Fatal error:  Uncaught Exception: Impartire prin zero in /home/exemplu.php:5</span>
          </div>

          <p class="info-content">Aproape toate limbajele de programare au în comun o abordare similară a gestionării excepțiilor. Atunci când se manifestă o anumită condiție de eroare, aceasta modifică fluxul normal al programului, iar această circumstanță este denumită excepție. Pentru aceasta, PHP oferă următoarele cuvinte cheie:</p>

          <li class="info-content">try</li>

          <li class="info-content">catch</li>

          <li class="info-content">throw</li>

          <li class="info-content">finally</li>
            
          <h1>Declarația try...catch</h1>
       
          <p class="info-content">Putem folosi instrucțiunea try...catch pentru a prinde excepțiile și a continua procesul pentru a preveni o eroare.</p>
  
          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">try {</span>

            <span class="php-syntax-code">&nbsp;Cod ce poate arunca o exceptie</span>

            <span class="php-syntax-code">} catch(Exception $e) {</span>

            <span class="php-syntax-code">&nbsp;Codul care se execută atunci când se prinde o excepție</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">function impartire($dividend, $divizor) {</span>
              
            <span class="php-syntax-code">&nbsp;if($divizor == 0) {</span>
              
            <span class="php-syntax-code">&nbsp;&nbsp;throw new Exception("Impartire prin zero");</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">&nbsp;return $dividend / $divisor;</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">try {</span>

            <span class="php-syntax-code">&nbsp;echo impartire(5, 0);</span>

            <span class="php-syntax-code">} catch(Exception $e) {</span>

            <span class="php-syntax-code">&nbsp;echo "Nu se poate imparti.";</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Nu se poate imparti.</span>
          </div>

          <h1>Declarația try...catch...finally</h1>

          <p class="info-content">Folosind declarația try...catch...finally, excepțiile pot fi capturate. Indiferent dacă o excepție a fost prinsă sau nu, codul din blocul finally va fi întotdeauna executat. Blocul catch nu este necesar dacă este specificat finally.</p>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">try {</span>

            <span class="php-syntax-code">&nbsp;Cod ce poate arunca o exceptie</span>

            <span class="php-syntax-code">} catch(Exception $e) {</span>

            <span class="php-syntax-code">&nbsp;Codul care se execută atunci când se prinde o excepție</span>

            <span class="php-syntax-code">} finally {</span>

            <span class="php-syntax-code">&nbsp;cod care se execută întotdeauna indiferent dacă a fost prinsă sau nu o excepție</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">function impartire($dividend, $divizor) {</span>
              
            <span class="php-syntax-code">&nbsp;if($divizor == 0) {</span>
              
            <span class="php-syntax-code">&nbsp;&nbsp;throw new Exception("Impartire prin zero");</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">&nbsp;return $dividend / $divisor;</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">try {</span>

            <span class="php-syntax-code">&nbsp;echo impartire(5, 0);</span>

            <span class="php-syntax-code">} catch(Exception $e) {</span>

            <span class="php-syntax-code">&nbsp;echo "Nu se poate imparti.";</span>

            <span class="php-syntax-code">} finally {</span>

            <span class="php-syntax-code">&nbsp;echo "Proces complet";</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Nu se poate imparti.</span>
          </div>

          <h1>Obiectul Exception</h1>

          <p class="info-content">Informațiile despre problema sau comportamentul neașteptat pe care l-a avut funcția sunt conținute în obiectul Exception.</p>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">new Exception(message, code, previous)</span>
          </div>

          <li class="info-content"><b>message</b>: Opțional. Un șir de caractere care descrie motivul pentru care a fost lansată excepția</li>

          <li class="info-content"><b>code</b>: Opțional. Un număr întreg care poate fi utilizat pentru a distinge cu ușurință această excepție de altele de același tip.</li>
          
          <li class="info-content"><b>previous</b>: Opțional. Dacă această excepție a fost lansată într-un bloc de captură al unei alte excepții, se recomandă să se treacă acea excepție în acest parametru.</li>

          <p class="info-content">Metode</p>

          <li class="info-content"><b>getMessage()</b>: Returnează un șir de caractere care descrie motivul pentru care a fost aruncată excepția</li>

          <li class="info-content"><b>getPrevious()</b>: Dacă această excepție a fost declanșată de o altă excepție, această metodă returnează excepția anterioară. În caz contrar, se returnează null </li>

          <li class="info-content"><b>getCode()</b>: Returnează codul de excepție</li>

          <li class="info-content"><b>getFile()</b>: Returnează calea completă a fișierului în care a fost lansată excepția</li>

          <li class="info-content"><b>getLine()</b>: Returnează numărul de linie al liniei de cod care a generat excepția</li>


        </div>
      </div>
      <div class="info-container">
        <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
function impartire($dividend, $divizor) {
  if($divizor == 0) {
    throw new Exception("Impartire prin zero");
  }
  return $dividend / $divisor;
}

try {
  echo impartire(5, 0);
} catch(Exception $e) {
  echo "Nu se poate imparti.";
}
?>
        </div>
        <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
      </div>
    </div>
  </div>
</body>

<?php include("footer.php"); ?>

</html>