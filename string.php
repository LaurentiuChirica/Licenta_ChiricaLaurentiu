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
      <div class="presentation-title">String - Sir de caractere</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Diverse functii pentru array-uri</h1>

          <p class="info-content">Un șir de caractere PHP este o colecție de caractere care poate fi utilizată pentru a stoca și modifica conținutul. Deoarece PHP acceptă numai 256 de caractere, nu este disponibil suportul nativ Unicode. În PHP, un literal de șir de caractere poate fi specificat în 4 moduri diferite:</p>
          
          <li class="info-content">Ghilimele simple</li>
          
          <li class="info-content">Ghilimele duble</li>
          
          <li class="info-content">Sintaxa heredoc</li>
          
          <li class="info-content">Sintaxa newdoc (incepand cu versiunea PHP 5.3)</li>

          <h1>Ghilimele simple</h1>
          
          <p class="info-content">PHP ne permite să construim șiruri de caractere prin includerea textului în ghilimele simple. Cel mai simplu mod de a specifica un șir de caractere în PHP este următorul.</p>
  
          <p class="info-content">Folosiți o bară oblică inversă (\) pentru a scăpa de un ghilimele simplu literal și o bară oblică inversă dublă (\\) pentru a desemna o bară oblică inversă literală. Toate celelalte caractere backslash, cum ar fi \r și \n, vor fi produse în forma lor originală, fără nicio semnificație suplimentară.</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$numar1=10;</span>

            <span class="php-syntax-code">$sir1Simplu='Variabila $numar1';</span>

            <span class="php-syntax-code">$sir2Simplu='Sir de caractere folosind bara oblica inversa cu n si t \n \t si cu "citat" inauntru';</span>

            <span class="php-syntax-code">$sir3Simplu='Sir de caractere cu  \'citat\' si \\dubla linia oblica';</span>

            <span class="php-syntax-code">echo "$sir1Simplu";</span>
            
            <span class="php-syntax-code">echo "$sir2Simplu";</span>
            
            <span class="php-syntax-code">echo "$sir3Simplu";</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Variabila $numar1</span>

            <span class="php-syntax-code">Sir de caractere folosind bara oblica inversa cu n si t \n \t si cu "citat" inauntru</span>

            <span class="php-syntax-code">Sir de caractere cu 'citat' si \dubla linia oblica</span>
          </div>

          <p class="info-content"><b>Notă:</b> În șirurile PHP cu ghilimele simple, majoritatea secvențelor de scăpare și a variabilelor nu vor fi interpretate. Dar, putem folosi ghilimele simple prin \' și backslash prin \\ în interiorul șirurilor PHP cu ghilimele simple.</p>
          
          <h1>Ghilimele duble</h1>
          
          <p class="info-content">În PHP, putem, de asemenea, să definim un șir de caractere prin introducerea textului în interiorul unui ghilimele duble. Cu toate acestea, șirurile PHP cu ghilimele duble vor fi utilizate pentru a înțelege secvențele de evacuare și variabilele.</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$numar1=10;</span>

            <span class="php-syntax-code">echo "Numarul este: $numar1";</span>

            <span class="php-syntax-code">$sir1Dublu="Ghilimele duble cu \"citat\" cu linie oblica inauntru";</span>

            <span class="php-syntax-code">$sir2Dublu="Ghilimele duble folosind linie oblica n \n inauntru";</span>

            <span class="php-syntax-code">echo "$sir1Dublu";</span>
            
            <span class="php-syntax-code">echo "$sir2Dublu";</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Numarul este: 10</span>

            <span class="php-syntax-code">Ghilimele duble cu "citat" cu linie oblica inauntru</span>

            <span class="php-syntax-code">Ghilimele duble folosind linie oblica n </span>

            <span class="php-syntax-code">inauntru</span>
          </div>

          <h1>Sintaxa heredoc</h1>
          
          <p class="info-content">A treia metodă de delimitare a șirurilor de caractere este sintaxa heredoc (<<). Atunci când operatorul heredoc este urmat de un identificator, se începe imediat scrierea unui nou rând de text. Șirul propriu-zis este urmat de ghilimele pentru a-l încheia, urmat de același identificator încă o dată. Nu trebuie să existe nici o tabulație sau spațiu în alb înainte de identificatorul final, care trebuie să înceapă pe noua linie.</p>

          <h2>Reguli de denumire</h2>

          <p class="info-content">Identificarea ar trebui să respecte convenția de denumire care prevede că începe cu o subliniere sau cu un caracter care nu este o cifră și conține numai litere alfanumerice și sublinieri.</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$sirHeredoc = &lt;&lt;&lt;Demonstratie</span>

            <span class="php-syntax-code">Exemplu valid</span>

            <span class="php-syntax-code">Demonstratie;</span>

            <span class="php-syntax-code">echo $sirHeredoc;</span>
            
            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Numarul este: 10</span>

            <span class="php-syntax-code">Ghilimele duble cu "citat" cu linie oblica inauntru</span>

            <span class="php-syntax-code">Ghilimele duble folosind linie oblica n </span>

            <span class="php-syntax-code">inauntru</span>
          </div>
          <p class="info-content"><b>Notă:</b> Identificatorul nu poate fi indentat, deoarece nu pot fi folosite spații albe sau file înainte și după punct și virgulă și identificator. Noua linie trebuie să fie acolo unde începe identificarea.</p>

          <h1>Sintaxa newdoc</h1>
          
          <p class="info-content">La fel ca în cazul heredoc, newdoc nu efectuează analiza analitică. În plus, are o identificare urmată de trei simboluri less than. Dar, în acest caz, identificatorul este înconjurat de un singur ghilimele, ca "EXP." Aceleași linii directoare ca și în cazul heredoc se aplică pentru newdoc.</p>
          
          <p class="info-content">Distincția dintre newdoc și heredoc este că primul folosește ghilimele simple, în timp ce al doilea folosește ghilimele duble.</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$sirNewDoc = &lt;&lt;&lt;'Demonstratie'</span>

            <span class="php-syntax-code">Exemplu de sintaxa newdoc.</span>

            <span class="php-syntax-code">&nbsp;Urmatorul rand.</span>

            <span class="php-syntax-code">Demonstratie;</span>

            <span class="php-syntax-code">echo $sirNewDoc;</span>
            
            <span class="php-syntax-code">echo &lt;&lt;&lt;'DEMONSTRATIE' // nu stocam continutul sirului de caractere intr-o variabila</span> 

            <span class="php-syntax-code">Exemplu de sintaxa newdoc.</span> 

            <span class="php-syntax-code">&nbsp;Urmatorul rand.</span>

            <span class="php-syntax-code">DEMONSTRATIE;</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">

            <span class="php-syntax-code">Exemplu de sintaxa newdoc. Urmatorul rand.</span>

            <span class="php-syntax-code">Exemplu de sintaxa newdoc. Urmatorul rand.</span>
          </div>
        </div>
      </div>
      <div class="info-container">
        <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
  $numar1=10;
  $sir1Simplu='Variabila $numar1';
  $sir2Simplu='Sir de caractere folosind bara oblica inversa cu n si t \n \t si cu "citat" inauntru';
  $sir3Simplu='Sir de caractere cu \'citat\' si \\dubla linia oblica';
  echo "$sir1Simplu";
  echo "\n";

  echo "$sir2Simplu";
  echo "\n";

  echo "$sir3Simplu";
  echo "\n\n";

  echo "Numarul este: $numar1";
  echo "\n\n";

  $sir1Dublu="Ghilimele duble cu \"citat\" cu linie oblica inauntru";
  $sir2Dublu="Ghilimele duble folosind linie oblica n \n inauntru";
  echo "$sir1Dublu";
  echo "\n\n";
  echo "$sir2Dublu";

  echo "\n\n";
  $sirHeredoc = &lt;&lt;&lt;Demonstratie
  Exemplu valid
Demonstratie;
echo $sirHeredoc;
?>
        </div>
        <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
      </div>
    </div>
  </div>
</body>

<?php include("footer.php"); ?>

</html>