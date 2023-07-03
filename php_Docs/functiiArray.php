<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>AI - Aplicatii Internet</title>
  <link href="../reusable_tut_php.css" rel="stylesheet" />
</head>

<?php include('../header.php');?>

<body>
  <div class="main-content">
    <div class="side-navbar-container">
      <?php include('../sidenavbar.php');?>
    </div>

    <div class="main-content-container">
      <div class="presentation-title">Functii Array</div>

      <div class="next-previous-buttons-container">
        <?php include('../next_previous_buttons.php');?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Diverse functii pentru array-uri</h1>
          
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">PHP oferă o serie de funcții pentru array-uri care pot fi utilizate pentru a accesa și modifica elementele unui matrice. Mai jos sunt enumerate principalele funcții de matrice PHP.</p>

          <h1>Funcția array()</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>
          
          <li class="info-content">Un array este creat și returnat de funcția array() din PHP. Cu ajutorul acestuia se pot crea tablouri indexate, asociative și multidimensionale.</li>

          <h2>Sintaxa:</h2>
          <div class="static-code-example">
            <span class="php-syntax-code">array array([mixed $...])</span>
          </div>
          
          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$limbajeProgramare = array("Javascript", "Python", "Java", "PHP");</span>

            <span class="php-syntax-code">echo "Limbaje de programare: " . $limbajeProgramare[0] . ", " . $limbajeProgramare[1] . ", " . $limbajeProgramare[2] . ", " . $limbajeProgramare[3];</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Javascript, Python, Java, PHP</span>
          </div>

          <h1>Funcția array_change_key_case()</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>
          
          <li class="info-content">Funcția array_change_key_case() din PHP modifică cazul fiecărei chei din matrice.</li>

          <li class="info-content">Rețineți că aceasta modifică doar cazul cheii.</li>

          <h2>Sintaxa:</h2>
          <div class="static-code-example">
            <span class="php-syntax-code">array array_change_key_case ( array $array [, int $case = CASE_LOWER ] )</span>
          </div>
          
          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$varsta = array("John"=>"20", "Mike"=>"21", "Trevor"=>"25");</span>

            <span class="php-syntax-code">print_r(array_change_key_case($varsta,CASE_UPPER));</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Array([JOHN] => 20 [MIKE] => 21 [TREVOR] => 25)</span>
          </div>

          <h1>Funcția array_chunk()</h1>
          
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>
          
          <li class="info-content">Metoda PHP array_chunk() împarte un array în bucăți. Puteți împărți un array în mai multe bucăți cu ajutorul metodei array_chunk().</li>

          <h2>Sintaxa:</h2>
          <div class="static-code-example">
            <span class="php-syntax-code">array array_chunk ( array $array , int $size [, bool $preserve_keys = false ] )</span>
          </div>
          
          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$varsta = array("John"=>"20", "Mike"=>"21", "Trevor"=>"25");</span>

            <span class="php-syntax-code">print_r(array_chunk($varsta,2));</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Array([0] => Array ([0] => 20 [1] => 21) [1] => Array ([0] => 25))</span>
          </div>

          <h1>Funcția count()</h1>
          
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <li class="info-content">Metoda count() numără fiecare element dintr-o matrice.</li>

          <h2>Sintaxa:</h2>
          <div class="static-code-example">
            <span class="php-syntax-code">int count ( mixed $array_or_countable [, int $mode = COUNT_NORMAL ] )</span>
          </div>
          
          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$culori = array("rosu", "verde", "albastru", "galben");</span>

            <span class="php-syntax-code">echo count($culori);</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">4</span>
          </div>

          <h1>Funcția array_reverse()</h1>
          
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <li class="info-content">Funcția PHP array_reverse() returnează o matrice cu intrări în ordine inversă.</li>

          <h2>Sintaxa:</h2>
          <div class="static-code-example">
            <span class="php-syntax-code">array array_reverse ( array $array [, bool $preserve_keys = false ] )</span>
          </div>
          
          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$culori = array("rosu", "verde", "albastru", "galben");</span>

            <span class="php-syntax-code">$culoriReversed = array_reverse($culori);</span>

            <span class="php-syntax-code">foreach($culoriReversed as $culoare) {</span>

            <span class="php-syntax-code">&nbsp;echo $culoare. " ";</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">galben albastru verde rosu</span> 
          </div>

          <h1>Funcția array_search()</h1>
          
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <li class="info-content">Metoda array_search() din PHP caută în array valoarea furnizată. În cazul în care căutarea are succes, aceasta returnează cheia.</li>

          <h2>Sintaxa:</h2>
          <div class="static-code-example">
            <span class="php-syntax-code">mixed array_search ( mixed $needle , array $haystack [, bool $strict = false ] )</span>
          </div>
          
          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$culori = array("rosu", "verde", "albastru", "galben");</span>

            <span class="php-syntax-code">$cheie = array_search("verde", $culori);</span>
            
            <span class="php-syntax-code">echo $cheie;</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">1</span> 
          </div>

          <h1>Funcția array_intersect()</h1>
          
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <li class="info-content">Intersecția a două array-uri este returnată de funcția PHP array_intersect(). Cu alte cuvinte, aceasta returnează elementele din două array-uri care se potrivesc.</li>

          <h2>Sintaxa:</h2>
          <div class="static-code-example">
            <span class="php-syntax-code">array array_intersect ( array $array1 , array $array2 [, array $... ] )</span>
          </div>
          
          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$culori_1 = array("rosu", "verde", "albastru", "galben");</span>

            <span class="php-syntax-code">$culori_2 = array("violet", "albastru", "roz", "verde");</span>

            <span class="php-syntax-code">$culori_3 = array_intersect($culori_1, $culori_2);</span>

            <span class="php-syntax-code">foreach($culori_3 as $culoare) {</span>

            <span class="php-syntax-code">&nbsp;echo $culoare. " ";</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">verde albastru</span> 
          </div>
        </div>
      </div>
      <div class="info-container">
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>
        <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
  $limbajeProgramare = array("Javascript", "Python", "Java", "PHP");
  echo "Limbaje de programare: " . $limbajeProgramare[0] . ", " . $limbajeProgramare[1] . ", " . $limbajeProgramare[2] . ", " . $limbajeProgramare[3] . "\n";

  echo "\n\n";

  $varsta = array("John"=>"20", "Mike"=>"21", "Trevor"=>"25");
  print_r(array_change_key_case($varsta,CASE_UPPER));

  echo "\n\n";

  $varsta = array("John"=>"20", "Mike"=>"21", "Trevor"=>"25");
  print_r(array_chunk($varsta,2));

  echo "\n\n";
  $culori = array("rosu", "verde", "albastru", "galben");
  echo count($culori);

  echo "\n\n";
  $culoriReversed = array_reverse($culori);
  foreach($culoriReversed as $culoare) {
    echo $culoare. " ";
  }

  echo "\n\n";
  $cheie = array_search("verde", $culori);
  echo $cheie;

  echo "\n\n";
  $culori_1 = array("rosu", "verde", "albastru", "galben");
  $culori_2 = array("violet", "albastru", "roz", "verde");
  $culori_3 = array_intersect($culori_1, $culori_2);
  foreach($culori_3 as $culoare) {
    echo $culoare. " ";
  }

?>
        </div>
        <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
      </div>
    </div>
  </div>
</body>

<?php
include('../footer.php');
?>

</html>