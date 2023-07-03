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
      <div class="presentation-title">Functii</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Ce este o functie?</h1>

          <p class="info-content">O funcție este o secțiune de cod numită care îndeplinește o anumită sarcină. Aceasta poate accepta o listă de argumente ca intrare și poate returna o valoare. Funcțiile încorporate în PHP se numără cu miile.</p>

          <p class="info-content">Funcțiile condiționale, funcțiile cu funcție în funcție și funcțiile recursive sunt toate definite în PHP.</p>

          <h1>Avantajele functiilor in PHP</h1>

          <li class="info-content">Reutilizarea codului: La fel ca în cazul altor limbaje de programare, funcțiile PHP sunt definite o singură dată și pot fi apelate în mod repetat.</li>

          <li class="info-content">Cod mai puțin: Nu trebuie să scrieți logica de mai multe ori, ceea ce economisește o cantitate semnificativă de cod. Puteți refolosi logica care a fost scrisă o singură dată prin utilizarea funcțiilor.</li>

          <li class="info-content">Simplu de înțeles: Funcțiile PHP împart logica de codare. Ca urmare a faptului că toată logica este împărțită în funcții, este mai simplu de înțeles cum funcționează aplicația.</li>

          <h1>Funcții definite de utilizator</h1>

          <p class="info-content">Termenul <b>"function"</b> apare la începutul declarației unei funcții definite de utilizator:</p>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">function numeleFunctiei() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;// codul care urmează să fie executat</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <p class="info-content"><b>Notă:</b> La fel ca în cazul altor etichete din PHP, numele funcțiilor trebuie să înceapă doar cu o literă și o subliniere. Nu poate începe cu un număr sau cu un alt semn neobișnuit.</p>

          <p class="info-content"><b>Sfat:</b> Dați funcției un nume care să reflecte ceea ce face funcția!</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">function scriereMesaj() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp; echo "Salutare, asta este prima mea functie!";</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">scriereMesaj(); //apelam functia</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Salutare, asta este prima mea functie!</span>
          </div>

          <h1>Argumentele funcției</h1>

          <p class="info-content">Funcțiile pot primi date prin intermediul argumentelor. O variabilă și un argument sunt același lucru.</p>
          
          <p class="info-content">Numele funcției este urmat de paranteze care conțin argumentele. Este suficient să separați fiecare argument cu o virgulă pentru a adăuga câte argumente doriți.</p>

          <p class="info-content">PHP acceptă apelul prin valoare (implicit), apelul prin referință, valorile implicite ale argumentelor și lista de argumente cu lungime variabilă.</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">function scriereMesaj_1($nume, $varsta) {</span>

            <span class="php-syntax-code">&nbsp;&nbsp; echo "Salutare $nume, ai $varsta de ani! \n";</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">scriereMesaj_1("John", 20);</span>

            <span class="php-syntax-code">scriereMesaj_1("Mike", 23);</span>

            <span class="php-syntax-code">scriereMesaj_1("Trevor", 25);</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h1>Apel prin referință</h1>

          <p class="info-content">În mod implicit (call by value), funcția nu modifică valoarea reală care îi este furnizată. Cu toate acestea, putem realiza acest lucru trimițând valoarea ca referință.</p>

          <p class="info-content">Valoarea este apelată implicit prin valoare atunci când se apelează o funcție. Simbolul ampersandă (&) trebuie să apară înaintea numelui parametrului pentru a furniza valoarea ca referință.</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">function adaugare(&$mesaj) {</span>

            <span class="php-syntax-code">&nbsp;&nbsp; $mesaj .= 'Apel prin referinta';</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">$mesaj = 'Salutare ';</span>

            <span class="php-syntax-code">adaugare($mesaj);</span>

            <span class="php-syntax-code">echo $mesaj;</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Salutare Apel prin referinta</span>
          </div>

          <h1>Valoarea implicită a argumentului</h1>

          <p class="info-content">Într-o funcție, putem defini o valoare implicită a argumentului. Dacă nu furnizați un argument atunci când apelați o funcție PHP, aceasta va utiliza parametrul implicit. Iată un exemplu simplu de utilizare a valorii implicite a parametrului într-o funcție PHP.</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">function scriereMesaj_2($nume="John") {</span>

            <span class="php-syntax-code">&nbsp;&nbsp; echo "Salutare $nume \n";</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">scriereMesaj_2("Mike");</span>

            <span class="php-syntax-code">scriereMesaj_2();</span>

            <span class="php-syntax-code">scriereMesaj_2("Trevor");</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Salutare Mike</span>

            <span class="php-syntax-code">Salutare John</span>

            <span class="php-syntax-code">Salutare Trevor</span>
          </div>

          <h1>Functie ce returneaza o valoroare</h1>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">function ridicaLaPatrat($numar) {</span>

            <span class="php-syntax-code">&nbsp;&nbsp; return $numar * $numar;</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">echo "5 la patrat este: " .ridicaLaPatrat(5);</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">5 la patrat este: 25</span>
          </div>
        </div>

      </div>
      <div class="info-container">
        <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
  function scriereMesaj_1($nume, $varsta) {
    echo "Salutare $nume, ai $varsta de ani! \n";
  }
  scriereMesaj_1("John", 20);
  scriereMesaj_1("Mike", 23);
  scriereMesaj_1("Trevor", 25);

  echo "\n\n";

  function adaugare(&$mesaj) {  
    $mesaj .= 'Apel prin referinta';  
  }  
  $mesaj = 'Salutare ';  
  adaugare($mesaj);  
  echo $mesaj;  

  echo "\n\n";
  
  function scriereMesaj_2($nume="John") {
    echo "Salutare $nume \n";
  }

  scriereMesaj_2("Mike");
  scriereMesaj_2();
  scriereMesaj_2("Trevor");

  echo "\n";

  function ridicaLaPatrat($numar) {
    return $numar * $numar;
  }
  echo "5 la patrat este: " .ridicaLaPatrat(5);
?>
        </div>
        <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
      </div>
    </div>
  </div>
</body>

<?php include("footer.php"); ?>

</html>