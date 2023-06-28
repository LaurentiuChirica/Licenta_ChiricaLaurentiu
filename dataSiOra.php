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
      <div class="presentation-title">Data & Ora</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Funcția PHP Date()</h1>

          <p class="info-content">PHP oferă caracteristici solide de aritmetică a datelor care simplifică manipularea datelor.</p>

          <p class="info-content">Funcția PHP date() formatează un timestamp la o dată și o oră mai ușor de citit.</p>

          <p class="info-content">Un timestamp este o secvență de caractere care indică data și/sau ora la care a avut loc un eveniment.</p>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">date(format,timestamp)</span>
            
            <span class="php-syntax-example">?></span>
          </div>

          <p class="info-content">Parametri:</p>

          <li class="info-content">format: Este necesar. Specifică formatul timestamp-ului *marcaj de timp*</li>

          <li class="info-content">timestamp: Opțional. Specifică un timestamp. Valoarea implicită este data și ora curente. </li>
          
          <h1>Obțineți o dată</h1>

          <p class="info-content">Parametrul format al funcției date(), care este necesar, descrie modul de formatare a datei (sau a orei).</p>

          <p class="info-content">Iată câteva exemple de caractere utilizate frecvent pentru date:</p>

          <li class="info-content">d - Reprezintă ziua lunii (de la 01 la 31).</li>

          <li class="info-content">m - Reprezintă o lună (de la 01 la 12)</li>

          <li class="info-content">Y - Reprezintă un an (în patru cifre)</li>

          <li class="info-content">l (L literă mică) - Reprezintă ziua săptămânii</li>

          <p class="info-content">Pentru a adăuga o formatare suplimentară, se pot pune caractere suplimentare între caractere, cum ar fi "/", "." sau "-".</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">echo "Astazi este " . date("Y/m/d");</span>

            <span class="php-syntax-code">echo "Astazi este " . date("Y.m.d");</span>

            <span class="php-syntax-code">echo "Astazi este " . date("Y-m-d");</span>

            <span class="php-syntax-code">echo "Astazi este " . date("l");</span>
            
            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Astazi este 2023/06/28</span>

            <span class="php-syntax-code">Astazi este 2023.06.28</span>

            <span class="php-syntax-code">Astazi este 2023-06-28</span>

            <span class="php-syntax-code">Astazi este Wednesday</span>
          </div>

          <h1>Obținerea timestamp-ului cu time()</h1>

          <p class="info-content">Metoda time() din PHP oferă toate detaliile necesare despre data și ora curentă. Aceasta returnează un număr întreg, dar nu necesită niciun parametru.</p>

          <p class="info-content">Numărul de secunde care au trecut de la 1 ianuarie la miezul nopții GMT este reprezentat de numărul întreg returnat de funcția time(). Cantitatea de secunde care au trecut din acest moment este menționată ca o marcă de timp, iar acest moment este cunoscut sub numele de epoca UNIX.</p>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">print time();</span>
            
            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">1687979245</span>
          </div>

          <p class="info-content">PHP are capacități deosebite pentru a transforma o marcă de timp într-un format pe care alții îl pot înțelege.</p>

          <h1>Conversia unui timestamp cu getdate()</h1>

          <p class="info-content">Matricea asociativă pe care funcția getdate() o returnează conține detalii despre dată și poate primi, opțional, o marcă de timp. În cazul în care ștampila de timp este omisă, time() returnează ștampila de timp curentă, care este funcțională.</p>

          <p class="info-content">Matricea pe care getdate() a produs-o conține componentele enumerate în tabelul următor.</p>

          <div class="table-container">
            <table>
              <tr>
                <th>Cheie</th>
                <th>Descriere</th>
                <th>Exemplu</th>
              </tr>
              <tr>
                <td>seconds</td>
                <td>Secunde după minute (0-59)</td>
                <td>20</td>
              </tr>
              <tr>
                <td>minutes</td>
                <td>Minutele trecute de oră (0 - 59)</td>
                <td>29</td>
              </tr>
              <tr>
                <td>hours</td>
                <td>Orele din zi (0 - 23)</td>
                <td>22</td>
              </tr>
              <tr>
                <td>mday</td>
                <td>Ziua lunii (1 - 31)</td>
                <td>11</td>
              </tr>
              <tr>
                <td>wday</td>
                <td>Ziua săptămânii (0 - 6)</td>
                <td>4</td>
              </tr>
              <tr>
                <td>mon</td>
                <td>Luna anului (1 - 12)</td>
                <td>7</td>
              </tr>
              <tr>
                <td>year</td>
                <td>Anul (4 cifre)</td>
                <td>1997</td>
              </tr>
              <tr>
                <td>yday</td>
                <td>Ziua din an ( 0 - 365 )</td>
                <td>19</td>
              </tr>
              <tr>
                <td>weekday</td>
                <td>Ziua săptămânii</td>
                <td>Joi</td>
              </tr>
              <tr>
                <td>month</td>
                <td>Luna anului</td>
                <td>Ianuarie</td>
              </tr>
              <tr>
                <td>0</td>
                <td>Timestamp</td>
                <td>948370048</td>
              </tr>
            </table>
          </div>
          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$arrayDate = getdate();</span>

            <span class="php-syntax-code">foreach ( $arrayDate as $cheie => $valoare ){</span>

            <span class="php-syntax-code">&nbsp;print "$cheie = $valoare \n";</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">$dataFormatata  = "Data de astazi: ";</span>

            <span class="php-syntax-code">$dataFormatata .= $arrayDate['mday'] . "/";</span>

            <span class="php-syntax-code">$dataFormatata .= $arrayDate['mon'] . "/";</span>

            <span class="php-syntax-code">$dataFormatata .= $arrayDate['year'];</span>

            <span class="php-syntax-code">print $dataFormatata;</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">seconds = 53</span>

            <span class="php-syntax-code">minutes = 24</span>

            <span class="php-syntax-code">hours = 19</span>

            <span class="php-syntax-code">mday = 28</span>

            <span class="php-syntax-code">wday = 3</span>

            <span class="php-syntax-code">mon = 6</span>

            <span class="php-syntax-code">year = 2023</span>

            <span class="php-syntax-code">yday = 178</span>

            <span class="php-syntax-code">weekday = Wednesday</span>

            <span class="php-syntax-code">month = June</span>

            <span class="php-syntax-code">0 = 1687980293</span>

            <span class="php-syntax-code">Data de astazi: 28/6/2023</span>
          </div>

          <h1>Crearea unei date cu mktime()</h1>

          <p class="info-content">Parametrul opțional timestamp din funcția date() specifică un timestamp. Dacă este omis, se vor utiliza data și ora curente (ca în exemplele de mai sus).</p>

          <p class="info-content">Funcția PHP mktime() returnează marca de timp Unix pentru o dată. Timestamp-ul Unix conține numărul de secunde dintre Epoch-ul Unix (1 ianuarie 1970 00:00:00:00 GMT) și ora specificată.            </p>
          
          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">mktime(hour, minute, second, month, day, year)</span>
            
            <span class="php-syntax-example">?></span>
          </div>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$data_1 = mktime(11, 14, 54, 8, 12, 2014);</span>

            <span class="php-syntax-code">echo "Data creata este: " . date("Y-m-d h:i:sa", $data_1);</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Data creata este: 2014-08-12 11:14:54am</span>
          </div>

          <h1>Crearea unei date cu strtotime()</h1>

          <p class="info-content">Funcția PHP strtotime() este utilizată pentru a converti un șir de date lizibile de către om într-un timestamp Unix (numărul de secunde de la 1 ianuarie 1970 00:00:00:00 GMT).</p>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">strtotime(time, now)</span>
            
            <span class="php-syntax-example">?></span>
          </div>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$data_2=strtotime("10:30pm April 15 2014");</span>

            <span class="php-syntax-code">echo "Data creata este: " . date("Y-m-d h:i:sa", $data_2);</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Data creata este: 2014-04-15 10:30:00pm</span>
          </div>

        </div>
      </div>
      <div class="info-container">
        <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
echo "Astazi este " . date("Y/m/d");

echo "\n\n";

echo "Astazi este " . date("Y.m.d");

echo "\n\n";

echo "Astazi este " . date("Y-m-d");

echo "\n\n";

echo "Astazi este " . date("l");

echo "\n\n";

print time();

echo "\n\n";

$arrayDate = getdate();
foreach ( $arrayDate as $cheie => $valoare ){
 print "$cheie = $valoare \n";
}
$dataFormatata = "Data de astazi: ";

$dataFormatata .= $arrayDate['mday'] . "/";

$dataFormatata .= $arrayDate['mon'] . "/";

$dataFormatata .= $arrayDate['year'];

print $dataFormatata;

echo "\n\n";

$data_1 = mktime(11, 14, 54, 8, 12, 2014);

echo "Data creata este: " . date("Y-m-d h:i:sa", $data_1);

echo "\n\n";

$data_2=strtotime("10:30pm April 15 2014");

echo "Data creata este: " . date("Y-m-d h:i:sa", $data_2);
?>
        </div>
        <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
      </div>
    </div>
  </div>
</body>

<?php include("footer.php"); ?>

</html>