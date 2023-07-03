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
    <div class="presentation-title">Filtrare Avansată</div>

    <div class="next-previous-buttons-container">
      <?php include('../next_previous_buttons.php');?>

    </div>

    <div class="info-container">
      <div class="info-content-container">

        <h1>Validarea unui număr întreg într-un interval</h1>

        <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
        </div>

        <p class="info-content">Metoda filter_var() este utilizată în exemplul următor pentru a determina dacă variabila este de tip int și este intre 1 și 100</p>

        <h2>Exemplu:</h2>

        <div class="static-code-example">
          <span class="php-syntax-example">&lt;?php></span>

          <span class="php-syntax-code">$numar = 47;</span>

          <span class="php-syntax-code">$minim = 1;</span>

          <span class="php-syntax-code">$maxim = 100;</span>

          <span class="php-syntax-code">if (filter_var($numar, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$minim, "max_range"=>$maxim))) === false) {</span>

          <span class="php-syntax-code">&nbsp;echo("Valoarea variabilei nu este in interval");</span>

          <span class="php-syntax-code">} else {</span>

          <span class="php-syntax-code">&nbsp;echo("Valoarea variabilei este in interval");</span>

          <span class="php-syntax-code">}</span>

          <span class="php-syntax-example">?></span>
        </div>

        <h2>Rezultat:</h2>

        <div class="static-code-example">
          <span class="php-syntax-code">Valoarea variabilei este in interval</span>
        </div>

        <br>

        <h1>Validarea unui adrese IPv6</h1>

        <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
        </div>

        <p class="info-content">Metoda filter_var() este utilizată în exemplul următor pentru a determina dacă variabila $numarIntreg este un număr întreg.</p>

        <h2>Exemplu:</h2>

        <div class="static-code-example">
          <span class="php-syntax-example">&lt;?php></span>

          <span class="php-syntax-code">$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";</span>

          <span class="php-syntax-code">if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {</span>

          <span class="php-syntax-code">&nbsp;echo("$ip este o adresa valida IPv6");</span>

          <span class="php-syntax-code">} else {</span>

          <span class="php-syntax-code">&nbsp;echo("$ip este o adresa valida IPv6");</span>

          <span class="php-syntax-code">}</span>

          <span class="php-syntax-example">?></span>
        </div>

        <h2>Rezultat:</h2>

        <div class="static-code-example">
          <span class="php-syntax-code">2001:0db8:85a3:08d3:1319:8a2e:0370:7334 este o adresa valida IPv6</span>
        </div>

        <br>

        <h1>Eliminare caractere cu valoare ASCII > 127</h1>

        <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
        </div>

        <p class="info-content">Metoda filter_var() este utilizată în exemplul următor pentru a curăța un șir de caractere. Aceasta va elimina din șir atât toate etichetele HTML, cât și toate caracterele cu valoare ASCII > 127</p>

        <h2>Exemplu:</h2>

        <div class="static-code-example">
          <span class="php-syntax-example">&lt;?php></span>

          <span class="php-syntax-code">$exemplu = "&lt;h1>Salutare lumeÆØÅ!&lt;/h1>";</span>

          <span class="php-syntax-code">$exempluNou = filter_var($exemplu, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);</span>

          <span class="php-syntax-code">echo $exempluNou;</span>

          <span class="php-syntax-example">?></span>
        </div>

        <h2>Rezultat:</h2>

        <div class="static-code-example">
          <span class="php-syntax-code">Salutare lume</span>
        </div>
        <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>
        </div>
      </div>
      <div class="info-container">
        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
$numar = 47;
$minim = 1;
$maxim = 100;

if (filter_var($numar, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$minim, "max_range"=>$maxim))) === false) {
 echo("Valoarea variabilei nu este in interval");
} else {
 echo("Valoarea variabilei este in interval");
}

echo "\n\n";

$ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
 echo("$ip este o adresa valida IPv6");
} else {
 echo("$ip este o adresa valida IPv6");
}

echo "\n\n";

$exemplu = "<h1>Salutare lumeÆØÅ!</h1>";
$exempluNou = filter_var($exemplu, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);

echo $exempluNou;
        </div>
        <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
      </div>
    </div>
  </div>
</div>
</body>

<?php
include('../footer.php');
?>

</html>