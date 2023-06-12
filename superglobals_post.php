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
      <div class="presentation-title">$_POST</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <p class="info-content">PHP $_POST este o variabilă super-globală care este utilizată pentru a stoca datele unui formular atunci când un formular HTML cu metoda="post" a fost trimis.</p>

          <p class="info-content">În exemplul de mai jos este afișat un formular cu un câmp de intrare și un buton de trimitere. Atributul action al etichetei &lt;form> specifică fișierul în care sunt transferate datele din formular atunci când utilizatorul face clic pe "Submit" pentru a-l trimite. În scopul prelucrării datelor din formular în acest exemplu, ne referim la fișierul în sine.</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;form method="post" action="&lt;?php echo $_SERVER['PHP_SELF'];?>"</span>
          
            <span class="php-syntax-code">&nbsp;Nume: &lt;input type="text" name="fname"></span>

            <span class="php-syntax-code">&nbsp;&lt;input type="submit"></span>

            <span class="php-syntax-example">&lt;/form></span>

            <span class="php-syntax-example"></span>

            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">if ($_SERVER["REQUEST_METHOD"] == "POST") {</span>

            <span class="php-syntax-code">&nbsp;//colectam valorile din campul input</span>

            <span class="php-syntax-code">&nbsp;$nume = $_POST['fname'];</span>

            <span class="php-syntax-code">&nbsp;&nbsp;if(empty($nume)) {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;&nbsp;echo "Campul a fost lasat necompletat!";</span>

            <span class="php-syntax-code">&nbsp;&nbsp;}else {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;&nbsp;echo $nume;</span>

            <span class="php-syntax-code">&nbsp;&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>
        </div>
      </div>
    </div>

  </div>
</body>

<?php include("footer.php"); ?>

</html>