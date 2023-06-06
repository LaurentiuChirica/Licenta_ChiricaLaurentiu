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
            <div class="presentation-title">Tipuri de date</div>

            <div class="next-previous-buttons-container">
              <?php include ("next_previous_buttons.php"); ?>
            </div>

            <div class="info-container">
              <div class="content-box">
                <div class="info-content-container">
                  <p class="info-content">Utilizarea unei variabile este principala metodă de stocare a datelor într-un program PHP.</p>

                  <p class="info-content">Următoarele tipuri de date sunt acceptate de PHP:</p>

                  <li class="info-content">String</li>

                  <li class="info-content">Integer (număr întreg)</li>

                  <li class="info-content">Float (numere cu virgulă mobilă - numite și numere duble)</li>

                  <li class="info-content">Boolean</li>

                  <li class="info-content">Array (vector)</li>

                  <li class="info-content">Obiect</li>

                  <li class="info-content">NULL</li>

                  <li class="info-content">Resursa</li>
                </div>

                <hr>

                <div class="info-content-container">
                  <h1>String</h1>

                  <p class="info-content">Un string este o secvență de caractere între ghilimele simple (') sau duble (").</p>
                  
                  <p class="info-content">Șirurile cu un singur ghilimele sunt aproape în totalitate literale, în timp ce șirurile cu două ghilimele înlocuiesc variabilele cu valorile lor și dau o semnificație suplimentară unor combinații de caractere.</p>

                  <h2>Exemplu:</h2>
                  <div class="static-code-example">
                    <div>
                      <span class="php-syntax-example"><</span>

                      <span class="php-syntax-example">?php</span>
                    </div>

                    <span class="php-syntax-code">$variabila = "nume";</span>

                    <span class="php-syntax-code">$literal = '$variabila nu se va printa!';</span>

                    <span class="php-syntax-code">print($literal);</span>

                    <span class="php-syntax-code">$literal = "$variabila se va printa!";</span>

                    <span class="php-syntax-code">print($literal);</span>
                      
                    <span class="php-syntax-example">?></span>
                  </div>

                  <p class="info-content">Acest lucru va avea ca rezultat următoarele:</p>

                  <div class="static-code-example">                    
                    <span class="php-syntax-code">$variabila nu se va printa!</span>

                    <span class="php-syntax-code">nume se va printa!</span>
                  </div>
                </div>

                <hr>

                <div class="info-content-container">
                  <h1>Integer (număr întreg)</h1>

                  <p class="info-content">Numărul întreg se referă la informații numerice cu semn pozitiv sau negativ. Acesta stochează numai numere întregi, care sunt cele fără fracții sau zecimale.</p>
                  
                  <p class="info-content">Reguli pentru numere întregi:</p>

                  <li class="info-content">Un număr întreg trebuie să aibă cel puțin o cifră</li>

                  <li class="info-content">Un număr întreg nu trebuie să aibă punct zecimal</li>

                  <li class="info-content">Un număr întreg poate fi fie pozitiv, fie negativ</li>
                  
                  <li class="info-content">Intervalul unui număr întreg trebuie să fie cuprins între -2,147,483,648 și 2,147,483,647, adică între -2^31 și 2^31.</li>

                  <li class="info-content">Numerele întregi pot fi specificate în: zecimal (baza 10), hexazecimal (baza 16), octal (baza 8), sau binar (baza 2).</li>

                  <h2>Exemplu:</h2>

                  <div class="static-code-example">
                    <div>
                      <span class="php-syntax-example"><</span>

                      <span class="php-syntax-example">?php</span>
                    </div>
  
                    <span class="php-syntax-code">$decimal = 34;</span>

                    <span class="php-syntax-code">$octal = 0243;</span>

                    <span class="php-syntax-code">$hexadecimal = 0x45;</span>

                    <span class="php-syntax-code">echo "Numar decimal: " . $decimal .;</span>

                    <span class="php-syntax-code">echo "Numar octal: " . $octal .;</span>

                    <span class="php-syntax-code">echo "Numar hexadecimal: " . $hexadecimal .;</span>
                      
                    <span class="php-syntax-example">?></span>
                  </div>

                  <h2>Rezultat:</h2>

                  <div class="static-code-example">                    
                    <span class="php-syntax-code">Numar decimal: 34</span>

                    <span class="php-syntax-code">Numar octal: 163</span>

                    <span class="php-syntax-code">Numar hexadecimal: 69</span>
                  </div>
                </div>

                <hr>

                <div class="info-content-container">
                  <h1>Float</h1>

                  <p class="info-content">Un număr în virgulă mobilă este un număr cu punct zecimal. Spre deosebire de numerele întregi, acesta poate conține numere cu virgulă fracționară sau zecimală, inclusiv un semn negativ sau pozitiv.</p>
                  
                  <h2>Exemplu:</h2>

                  <div class="static-code-example">
                    <div>
                      <span class="php-syntax-example"><</span>

                      <span class="php-syntax-example">?php</span>
                    </div>
  
                    <span class="php-syntax-code">$float1 = 36.85;</span>

                    <span class="php-syntax-code">$float2 = 13.42;</span>

                    <span class="php-syntax-code">$suma = $float1 + $float2;</span>

                    <span class="php-syntax-code">echo "Suma celor doua numere: " .$suma;</span>

                    <span class="php-syntax-example">?></span>
                  </div>

                  <h2 class="info-content">Rezultat:</h2>

                  <div class="static-code-example">                    
                    <span class="php-syntax-code">Suma celor doua numere: 50,27</span>
                  </div>
                </div>

                <hr>

                <div class="info-content-container">
                  <h1>Boolean</h1>

                  <p class="info-content">O valoare de adevăr care poate fi fie adevărată (true), fie falsă (false) este reprezentată de un boolean. Tipul boolean este reprezentat în PHP prin cuvântul cheie bool.</p>
                  
                  <p class="info-content">Adevărat și fals sunt cele două valori ale tipului bool. Puteți utiliza true, True, True, TRUE, false, False și False pentru a indica valorile booleene, deoarece cuvintele cheie nu țin cont de majuscule și minuscule.</p>

                  <h2>Exemplu:</h2>

                  <div class="static-code-example">
                    <div>
                      <span class="php-syntax-example"><</span>

                      <span class="php-syntax-example">?php</span>
                    </div>
  
                    <span class="php-syntax-code">if (TRUE) </span>

                    <span class="php-syntax-code">&nbsp;echo "Conditia este TRUE.";</span>

                    <span class="php-syntax-code">if (FALSE)</span>

                    <span class="php-syntax-code">&nbsp;echo "Conditia este FALSE.";</span>

                    <span class="php-syntax-example">?></span>
                  </div>

                  <h2 class="info-content">Rezultat:</h2>

                  <div class="static-code-example">                    
                    <span class="php-syntax-code">Conditia este TRUE</span>
                  </div>
                </div>

                <hr>

                <div class="info-content-container">
                  <h1>Array (Vector)</h1>

                  <p class="info-content">Array-urile sunt un tip de date compuse. Acesta permite stocarea mai multor valori de același tip de date într-o singură variabilă.</p>
                  
                  <h2>Exemplu:</h2>

                  <div class="static-code-example">
                    <div>
                      <span class="php-syntax-example"><</span>

                      <span class="php-syntax-example">?php</span>
                    </div>
  
                    <span class="php-syntax-code">$masini = array ("Audi", "Suzuki", "Toyota");</span>

                    <span class="php-syntax-code">var_dump($masini); //functia var_dump() returneaza tipul de data si valorile </span>

                    <span class="php-syntax-code">echo "Elementul 1 din array: $masini[0]";</span>

                    <span class="php-syntax-code">echo "Elementul 2 din array: $masini[1]";</span>

                    <span class="php-syntax-code">echo "Elementul 3 din array: $masini[2]";</span>

                    <span class="php-syntax-example">?></span>
                  </div>

                  <h2 class="info-content">Rezultat:</h2>

                  <div class="static-code-example">
                    <span class="php-syntax-code">array(3) { [0]=> string(4) "Audi" [1]=> string(6) "Suzuki" [2]=> string(6) "Toyota" }</span>

                    <span class="php-syntax-code">Elementul 1 din array: Audi</span>

                    <span class="php-syntax-code">Elementul 2 din array: Suzuki</span>

                    <span class="php-syntax-code">Elementul 3 din array: Toyota</span>
                  </div>
                </div>

                <hr>

                <div class="info-content-container">
                  <h1>Obiect</h1>

                  <p class="info-content">Obiectele sunt instanțe ale claselor definite de utilizator care pot avea atât valori, cât și funcții. Acestea trebuie să fie declarate în mod explicit.</p>
                  
                  <h2>Exemplu:</h2>

                  <div class="static-code-example">
                    <div>
                      <span class="php-syntax-example"><</span>

                      <span class="php-syntax-example">?php</span>
                    </div>
  
                    <span class="php-syntax-code"><b>class</b> masina { </span>

                    <span class="php-syntax-code">&nbsp;function model() {</span>

                    <span class="php-syntax-code">&nbsp;&nbsp;$numeModel = "Toyota";</span>

                    <span class="php-syntax-code">&nbsp;&nbsp;echo "Model masina: " .$numeModel;</span>

                    <span class="php-syntax-code">&nbsp;}</span>

                    <span class="php-syntax-code">$obiect = new masina();</span>

                    <span class="php-syntax-code">$obiect -> model(); </span>

                    <span class="php-syntax-example">?></span>
                  </div>

                  <h2 class="info-content">Rezultat:</h2>

                  <div class="static-code-example">
                    <span class="php-syntax-code">Model masina: Toyota</span>
                  </div>

                  <h2>Acesta este un subiect avansat al PHP, pe care îl vom discuta mai târziu în detaliu.</h2>
                </div>

                <hr>

                <div class="info-content-container">
                  <h1>NULL</h1>

                  <p class="info-content">Un tip unic numit NULL are ca valoare doar cuvântul "NULL". Atribuiți pur și simplu o valoare NULL unei variabile, scriind-o după cum urmează:</p>
                  
                  <h2>Exemplu:</h2>

                  <div class="static-code-example">
                    <div>
                      <span class="php-syntax-example"><</span>

                      <span class="php-syntax-example">?php</span>
                    </div>
  
                    <span class="php-syntax-code">$varilabilaMea = NULL;</span>

                    <span class="php-syntax-code">$varilabilaMea = null;</span>

                    <span class="php-syntax-example">?></span>
                  </div>

                  <p class="info-content">Convenția impune ca constanta specială NULL să fie scrisă cu majusculă, dar în realitate nu ține cont de majuscule și minuscule, astfel că ați fi putut scrie la fel de ușor <code class="code-elements">null.</code></p>

                  <p class="info-content">Caracteristicile unei variabile care a fost setată la NULL sunt următoarele:</p>
                    
                  <li class="info-content">Într-un context boolean, este evaluată la FALSE.</li>

                  <li class="info-content">Atunci când este testată cu ajutorul funcției IsSet(), aceasta returnează FALSE.</li>
                </div>

                <hr>

                <div class="info-content-container">
                  <h1>Resursa</h1>

                  <p class="info-content">În PHP, resursele nu sunt un tip de date precis. Acestea sunt utilizate în esență pentru a stoca referințe la resurse PHP externe sau la apeluri de funcții. Luați în considerare efectuarea unui apel la o bază de date. Aceasta este o resursă terță.</p>

                  <p class="info-content">Deoarece acesta este un subiect PHP mai complex, vom vorbi despre el mai în detaliu și cu exemple mai târziu.</p>
                </div>

                <hr>

                <div class="info-content-container">

                  <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

                  <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php"><span><</span>?php

$decimal = 34;
$octal = 0243;
$hexadecimal = 0x46;
echo "Numar decimal: " . $decimal . "\n";
echo "Numar octal: " . $octal . "\n";
echo "Numar hexadecimal: " . $hexadecimal . "\n";

$masini = array ("Audi", "Suzuki", "Toyota");
var_dump($masini); //functia var_dump() returneaza tipul de data si valorile
echo "Elementul 1 din array: {$masini[0]} \n";
echo "Elementul 2 din array: {$masini[1]} \n";
echo "Elementul 3 din array: {$masini[2]} \n";
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
