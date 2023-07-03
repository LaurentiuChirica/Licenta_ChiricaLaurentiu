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
      <div class="presentation-title">Array Indexat</div>

      <div class="next-previous-buttons-container">
        <?php include('../next_previous_buttons.php');?>
      </div>
      
      <div class="info-container">
        <div class="info-content-container">
        <h1>Ce este un array indexat?</h1>

        <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
        </div>

        <p class="info-content">Obiectele, caracterele și numerele întregi pot fi stocate într-un array indexat. Un array numeric în PHP este denumită și array indexat.</p>

        <p class="info-content">Array-urile indexate pot fi produse în două moduri:</p>

        <li class="info-content">Indicele poate fi atribuit automat (începe întotdeauna la 0):</li>

        <div class="static-code-example">
          <span class="php-syntax-example">$limbajeProgramare = array("Javascript", "Python", "Java", "PHP");</span>          
        </div>

        <br>

        <li class="info-content">O altă opțiune este de a atribui manual indexul</li>

        <div class="static-code-example">
          <span class="php-syntax-example">$limbajeProgramare[0] = "Javascript";</span>

          <span class="php-syntax-example">$limbajeProgramare[1] = "Python";</span>

          <span class="php-syntax-example">$limbajeProgramare[2] = "Java";</span>

          <span class="php-syntax-example">$limbajeProgramare[3] = "PHP";</span>
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

        <h1>Bucla printr-un array indexat</h1>

        <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
        </div>

        <p class="info-content">Putem traversa cu ușurință array-ul folosind bucla foreach si for.</p>

        <h2>Exemplu:</h2>

        <div class="static-code-example">
          <span class="php-syntax-example">&lt;?php</span>

          <span class="php-syntax-code">$portii = array("Mica", "Medie", "Mare");</span>

          <span class="php-syntax-code">foreach($portii as $portie) {</span>
          
          <span class="php-syntax-code">&nbsp;&nbsp;echo "Portie: $portie \n";</span>

          <span class="php-syntax-code">}</span>

          <span class="php-syntax-example">?></span>
        </div>

        <h2>Rezultat:</h2>

        <div class="static-code-example">
          <span class="php-syntax-code">Portie: Mica</span>
          
          <span class="php-syntax-code">Portie: Medie</span>

          <span class="php-syntax-code">Portie: Mare</span>
        </div>

        <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$portii = array("Mica", "Medie", "Mare");</span>

            <span class="php-syntax-code">$lungimeArray = count($portii);</span>

            <span class="php-syntax-code">for($i = 0 ; $i < $lungimeArray; $i++) {</span>
            
            <span class="php-syntax-code">&nbsp;&nbsp;echo "Portie: " . $portii[$i] . "\n";</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Portie: Mica</span>
            
            <span class="php-syntax-code">Portie: Medie</span>

            <span class="php-syntax-code">Portie: Mare</span>
          </div>
        </div>
        <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>
      </div>
      <div class="info-container">
        <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
  $limbajeProgramare = array("Javascript", "Python", "Java", "PHP");
  echo "Limbaje de programare: " . $limbajeProgramare[0] . ", " . $limbajeProgramare[1] . ", " . $limbajeProgramare[2] . ", " . $limbajeProgramare[3];

  echo "\n\n";

  $portii = array("Mica", "Medie", "Mare");
  foreach($portii as $portie) {
    echo "Portie: $portie \n";
  }

  echo "\n";

  $lungimeArray = count($portii);
  for($i = 0 ; $i < $lungimeArray; $i++) {
    echo "Portie: " . $portii[$i] . "\n";
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