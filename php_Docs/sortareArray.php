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
      <div class="presentation-title">Sortare Array</div>

      <div class="next-previous-buttons-container">
        <?php include('../next_previous_buttons.php');?>      
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Functii de Sortare pentru un Array</h1>
          
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">Elementele unui array pot fi aranjate în ordine alfabetică sau numerică ascendentă sau descendentă.</p>

          <p class="info-content">Urmatoarele functii sunt folosite pentru sortarea unui array: </p>

          <li class="info-content">sort() - sortează array-urile în ordine crescătoare</li>

          <li class="info-content">rsort() - sortează array-urile în ordine descrescătoare</li>

          <li class="info-content">asort() - sortează array-urile asociative în ordine crescătoare, în funcție de valoare</li>

          <li class="info-content">ksort() - sortează array-urile asociative în ordine crescătoare, în funcție de cheie</li>

          <li class="info-content">arsort() - sortează array-urile asociative în ordine descrescătoare, în funcție de valoare</li>

          <li class="info-content">krsort() - sortează array-urile asociative în ordine descrescătoare, în funcție de cheie</li>

          <h1><li>sort()</li></h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">Sortează array-urile în ordine crescătoare</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$limbajeProgramare = array("PHP", "C++", "Java", "Python");</span>

            <span class="php-syntax-code">sort($limbajeProgramare);</span>

            <span class="php-syntax-code">$lungimeArray = count($limbajeProgramare);</span>

            <span class="php-syntax-code">for($i = 0; $i < $lungimeArray; $i++) {</span>

            <span class="php-syntax-code">&nbsp;echo $limbajeProgramare[$i] . " "</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">C++ Java PHP Python</span>
          </div>

          <h1><li>rsort()</li></h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">Sortează array-urile în ordine descrescătoare</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$limbajeProgramare = array("PHP", "C++", "Java", "Python");</span>

            <span class="php-syntax-code">rsort($limbajeProgramare);</span>

            <span class="php-syntax-code">$lungimeArray = count($limbajeProgramare);</span>

            <span class="php-syntax-code">for($i = 0; $i < $lungimeArray; $i++) {</span>

            <span class="php-syntax-code">&nbsp;echo $limbajeProgramare[$i] . " "</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Python PHP Java C++</span>
          </div>

          <h1><li>asort()</li></h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">Sortează array-urile asociative în ordine crescătoare, în funcție de valoare</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$varsta = array("John"=>"20", "Mike"=>"40", "Trevor"=>"18");</span>

            <span class="php-syntax-code">asort($varsta);</span>

            <span class="php-syntax-code">foreach($varsta as $cheie => $valoare) {</span>

            <span class="php-syntax-code">&nbsp;echo "Cheie: " . $cheie . " Valoare: " .$valoare . "\n";</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Cheie: Trevor Valoare: 18</span>
            
            <span class="php-syntax-code">Cheie: John Valoare: 20</span>

            <span class="php-syntax-code">Cheie: Mike Valoare: 40</span>
          </div>


          <h1><li>ksort()</li></h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">Sortează array-urile asociative în ordine crescătoare, în funcție de cheie</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$varsta = array("John"=>"20", "Mike"=>"40", "Trevor"=>"18");</span>

            <span class="php-syntax-code">asort($varsta);</span>

            <span class="php-syntax-code">foreach($varsta as $cheie => $valoare) {</span>

            <span class="php-syntax-code">&nbsp;echo "Cheie: " . $cheie . " Valoare: " .$valoare . "\n";</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Cheie: John Valoare: 20</span>
            
            <span class="php-syntax-code">Cheie: Mike Valoare: 40</span>
            
            <span class="php-syntax-code">Cheie: Trevor Valoare: 18</span>
          </div>


          <h1><li>arsort()</li></h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">Sortează array-urile asociative în ordine descrescătoare, în funcție de valoare</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$varsta = array("John"=>"20", "Mike"=>"40", "Trevor"=>"18");</span>

            <span class="php-syntax-code">arsort($varsta);</span>

            <span class="php-syntax-code">foreach($varsta as $cheie => $valoare) {</span>

            <span class="php-syntax-code">&nbsp;echo "Cheie: " . $cheie . " Valoare: " .$valoare . "\n";</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Cheie: Mike Valoare: 40</span>
            
            <span class="php-syntax-code">Cheie: John Valoare: 20</span>
            
            <span class="php-syntax-code">Cheie: Trevor Valoare: 18</span>
          </div>
          
          <h1><li>krsort()</li></h1>
          
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">Sortează array-urile asociative în ordine descrescătoare, în funcție de cheie</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$varsta = array("John"=>"20", "Mike"=>"40", "Trevor"=>"18");</span>

            <span class="php-syntax-code">arsort($varsta);</span>

            <span class="php-syntax-code">foreach($varsta as $cheie => $valoare) {</span>

            <span class="php-syntax-code">&nbsp;echo "Cheie: " . $cheie . " Valoare: " .$valoare . "\n";</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Cheie: Trevor Valoare: 18</span>

            <span class="php-syntax-code">Cheie: Mike Valoare: 40</span>

            <span class="php-syntax-code">Cheie: John Valoare: 20</span>
          </div>

        </div>
      </div>
      <div class="info-container">

        <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
        </div>
        
        <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
  $limbajeProgramare = array("PHP", "C++", "Java", "Python");
  $lungimeArray = count($limbajeProgramare);

  //sort()
  sort($limbajeProgramare);
  for($i = 0; $i < $lungimeArray; $i++) {
    echo $limbajeProgramare[$i] . " "; 
  }

  echo "\n\n";

  //rsort()
  rsort($limbajeProgramare);
  for($i = 0; $i < $lungimeArray; $i++) {
    echo $limbajeProgramare[$i] . " "; 
  }

  echo "\n\n";

  //asort()
  $varsta = array("John"=>"20", "Mike"=>"40", "Trevor"=>"18");
  asort($varsta);
  foreach($varsta as $cheie => $valoare) {
    echo "Cheie: " . $cheie . " Valoare: " .$valoare . "\n";
  }

  echo "\n\n";

  //ksort()
  ksort($varsta);
  foreach($varsta as $cheie => $valoare) {
    echo "Cheie: " . $cheie . " Valoare: " .$valoare . "\n";
  }

  echo "\n\n";

  //arsort()
  arsort($varsta);
  foreach($varsta as $cheie => $valoare) {
    echo "Cheie: " . $cheie . " Valoare: " .$valoare . "\n";
  }

  echo "\n\n";

  //krsort()
  krsort($varsta);
  foreach($varsta as $cheie => $valoare) {
    echo "Cheie: " . $cheie . " Valoare: " .$valoare . "\n";
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