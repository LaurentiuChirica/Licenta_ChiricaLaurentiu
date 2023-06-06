<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AI - Aplicatii Internet</title>
    <link href="reusable_tut_php.css" rel="stylesheet" />
</head>

<?php include ("header.php"); ?>
<body>
    <div class="main-content">
      <div class="side-navbar-container">
			  <?php include('sidenavbar.php'); ?>
      </div>

      <div class="main-content-container">
            <div class="presentation-title">Constante PHP</div>

            <div class="next-previous-buttons-container">
              <?php include ("next_previous_buttons.php"); ?>
            </div>

            <div class="info-container">
              <div class="content-box">
                <div class="info-content-container">
                  <h1>Ce este o constantă?</h1>

                  <hr>

                  <p class="info-content">O constantă PHP este un nume sau un identificator care nu poate fi modificat în timp ce scriptul este executat, cu excepția constantelor magice, care nu sunt adevărate constante. Se pot utiliza două metode pentru a defini constantele PHP:</p>
                  
                  <li class="info-content">Utilizarea funcției define()</li>
                
                  <li class="info-content">Utilizarea cuvântului cheie const</li>
  
                  <h1>Define</h1>

                  <h2>Sintaxa:</h2>
                  <div class="static-code-example">
                    <span class="php-syntax-code">define(nume, valoare, case-insensitive *nu ține cont de majuscule și minuscule*)</span>
                  </div>

                  <p class="info-content">Parametri</p>
                  
                  <li class="info-content">nume: Specifica numele constantei</li>
                
                  <li class="info-content">valoare: Specifica valoarea constantei</li>

                  <li class="info-content">case-insensitive: Specifica daca numele constantei ar trebui sa tina cont de majuscule si minuscule, implicit este fals</li>
                  
                  <h2>Exemplu de constante cu nume case-sensitive:</h2>

                  <div class="static-code-example">
                    <div>
                      <span class="php-syntax-example"><</span>

                      <span class="php-syntax-example">?php</span>
                    </div>
  
                    <span class="php-syntax-code">&nbsp;echo define('MESAJ', 'Salutare!');</span>

                    <span class="php-syntax-code">&nbsp;echo MESAJ;</span>

                    <span class="php-syntax-example">?></span>
                  </div>

                  <h2>Rezultat:</h2>

                  <div class="static-code-example">                    
                    <span class="php-syntax-code">Salutare!</span>
                  </div>

                  <h2>Exemplu de constante cu nume case-insensitive:</h2>

                  <div class="static-code-example">
                    <div>
                      <span class="php-syntax-example"><</span>

                      <span class="php-syntax-example">?php</span>
                    </div>
  
                    <span class="php-syntax-code">&nbsp;echo define('MESAJ', 'Salutare!', true);</span>

                    <span class="php-syntax-code">&nbsp;echo MESAJ;</span>

                    <span class="php-syntax-code">&nbsp;echo mesaj;</span>

                    <span class="php-syntax-example">?></span>
                  </div>

                  <h2>Rezultat:</h2>

                  <div class="static-code-example">                    
                    <span class="php-syntax-code">Salutare!</span>

                    <span class="php-syntax-code">Salutare!</span>
                  </div>
                </div>

                <hr>

                <h1>Cuvântul cheie const</h1>

                <p class="info-content">Pentru a crea o constantă, PHP a adăugat cuvântul cheie const. Constantele sunt definite în momentul construirii prin cuvântul cheie const. Acesta nu este o funcție, ci o construcție lingvistică. Case afectează modul în care cuvântul cheie const este case-sensitive.</p>
                
                <h2>Exemplu:</h2>
                  <div class="static-code-example">
                    <div>
                      <span class="php-syntax-example"><</span>

                      <span class="php-syntax-example">?php</span>
                    </div>
  
                    <span class="php-syntax-code">&nbsp;const mesaj = "Text definit cu const!"</span>

                    <span class="php-syntax-code">&nbsp;echo mesaj;</span>

                    <span class="php-syntax-example">?></span>
                  </div>

                  <h2>Rezultat:</h2>

                  <div class="static-code-example">                    
                    <span class="php-syntax-code">Text definit cu const!</span>
                  </div>

                  <br>
                  <hr>

                  <h1>Functia constant()</h1>

                  <p class="info-content">În loc de a utiliza comanda echo, există o altă abordare pentru a printa valoarea constantelor: utilizarea funcției constant().</p>
                  
                  <h2>Sintaxa:</h2>
                  <div class="static-code-example">
                    <span class="php-syntax-code">constant(numeVariabila)</span>
                  </div>

                  <h2>Exemplu:</h2>
                    <div class="static-code-example">
                      <div>
                        <span class="php-syntax-example"><</span>

                        <span class="php-syntax-example">?php</span>
                      </div>
    
                      <span class="php-syntax-code">&nbsp;define("MESAJ", "Salutare!"");</span>

                      <span class="php-syntax-code">&nbsp;// Ambele sunt similare</span>

                      <span class="php-syntax-code">&nbsp;echo MESAJ;</span>

                      <span class="php-syntax-code">&nbsp;echo constant("MESAJ");</span>

                      <span class="php-syntax-example">?></span>
                    </div>

                    <h2>Rezultat:</h2>

                    <div class="static-code-example">                    
                      <span class="php-syntax-code">Salutare!</span>

                      <span class="php-syntax-code">Salutare!</span>
                    </div>

                    <div class="table-container">
                      <table>
                        <tr>
                            <th>Constante</th>
                            <th>Variabile</th>
                        </tr>
                        <tr>
                            <td>Constanta nu poate fi redefinită după ce a fost definită.</td>
                            <td>O variabilă poate fi redefinită pur și simplu sau poate fi lăsată nedefinită.</td>
                        </tr>
                        <tr>
                            <td>O constantă poate fi definită numai cu ajutorul funcției define(). Ea nu poate fi definită prin orice atribuire simplă.	</td>
                            <td>Operatorul de atribuire (=) poate fi utilizat pentru a defini o variabilă.</td>
                        </tr>
                        <tr>
                            <td>În timpul atribuirii, nu este necesar să se utilizeze simbolul dolarului ($) înaintea unei constante.</td>
                            <td>Întotdeauna puneți semnul dolar ($) înaintea variabilei atunci când o declarați.</td>
                        </tr>
                        <tr>
                            <td>Constantele pot fi definite și accesate de oriunde și nu respectă nicio cerință de încadrare a variabilelor în domeniul de accesare.</td>
                            <td>Variabilele pot fi definite oriunde în program, dar ele trebuie să respecte cerințele de încadrare a variabilelor în domeniul de accesare.</td>
                        </tr>
                        <tr>
                            <td>Constantele sunt variabile ale căror valori rămân neschimbate pe tot parcursul programului.</td>
                            <td>Valoarea unei variabile poate fi schimbata</td>
                        </tr>
                        <tr>
                            <td>Constantele sunt globale în mod implicit.</td>
                            <td>Variabilele pot fi: locale, globale sau statice.</td>
                        </tr>
                    </table>
                    </div>

                <div class="info-content-container">

                  <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

                  <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php"><span><</span>?php
  const mesaj = "Text definit cu const! \n";
  echo mesaj;
  define("CONSTANTA", "Salutare!");
  echo CONSTANTA;
?>
</div>
                    <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
                  </div>
              </div>
            </div>
        </div>

    </div>
</body>

<?php	include ("footer.php"); ?>
</html>
