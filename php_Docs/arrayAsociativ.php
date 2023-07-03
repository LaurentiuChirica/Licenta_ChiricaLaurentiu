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
      <div class="presentation-title">Array Asociativ</div>

      <div class="next-previous-buttons-container">
        <?php include('../next_previous_buttons.php');?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Ce este un array asociativ?</h1>

          <div class="horizontal-line-container">
                <div class="horizontal-line"></div>
          </div>

          <p class="info-content">Array-urile care utilizează chei numite pe care le atribuiți sunt cunoscute sub numele de array-uri asociative.</p>

          <p class="info-content">Array-urile asociative pot fi declarate în două moduri:</p>

          <li class="info-content">Primul mod</li>

          <div class="static-code-example">
            <span class="php-syntax-example">$varsta = array("John"=>"20", "Mike"=>"21", "Trevor"=>"25");</span>          
          </div>

          <li class="info-content">Al 2-lea mod</li>

          <div class="static-code-example">
            <span class="php-syntax-example">$varsta['John']="20";</span>          

            <span class="php-syntax-example">$varsta['Mike']="21";</span>          

            <span class="php-syntax-example">$varsta['Trevor']="25";</span>          
          </div>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$varsta = array("John"=>"20", "Mike"=>"21", "Trevor"=>"25");</span>

            <span class="php-syntax-code">echo "Varsta lui John este: " .$varsta['John'];</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Varsta lui John este: 20</span>
          </div>
          
          <h1>Bucla printr-un array asociativ</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">Putem traversa cu ușurință array-ul folosind bucla foreach.</p>

          <h2>Exemplu:</h2>
          
          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$varsta = array("John"=>"20", "Mike"=>"21", "Trevor"=>"25");</span>

            <span class="php-syntax-code">foreach($varsta as $cheie => $valoare) {</span>
            
            <span class="php-syntax-code">&nbsp;&nbsp;echo "Cheie: ".$cheie." Valoare: ". $valoare ."\n";</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Cheie: John Valoare: 20</span>

            <span class="php-syntax-code">Cheie: Mike Valoare: 21</span>

            <span class="php-syntax-code">Cheie: Trevor Valoare: 25</span>
          </div>
          
        </div>
      </div>
      <div class="info-container">
        
        <div class="horizontal-line-container">
          <div class="horizontal-line"></div>
        </div>

        <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
  $varsta = array("John"=>"20", "Mike"=>"21", "Trevor"=>"25");
  foreach($varsta as $cheie => $valoare) {
    echo "Cheie: ".$cheie." Valoare: ". $valoare ."\n";
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