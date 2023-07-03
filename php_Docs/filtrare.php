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
    <div class="presentation-title">Filtrare</div>

    <div class="next-previous-buttons-container">
      <?php include('../next_previous_buttons.php');?>
    </div>

    <div class="info-container">
      <div class="info-content-container">
        <h1>Ce este o filtrare?</h1>

        <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
        </div>

        <p class="info-content">Datele de intrare externe sunt validate și purificate cu ajutorul filtrelor PHP.</p>

        <p class="info-content">Multe dintre funcțiile necesare pentru validarea datelor de intrare ale utilizatorului sunt incluse în extensia PHP filter, care este realizată pentru a accelera și simplifica procesul.</p>

        <li class="info-content">Validarea datelor = Determină dacă datele sunt în forma corectă</li>

        <li class="info-content">Sanitizarea datelor = Elimină orice caracter ilegal din date</li>

        <h1>De ce să folosiți filtre?</h1>

        <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
        </div>

        <p class="info-content">Multe aplicații web primesc intrări externe. Datele/intrările externe pot fi:</p>

        <li class="info-content">Intrarea utilizatorului dintr-un formular</li>

        <li class="info-content">Cookie-uri</li>

        <li class="info-content">date din serviciile web</li>

        <li class="info-content">variabile de server</li>

        <li class="info-content">Rezultatele interogării bazei de date</li>

        <h1>Funcția filter_var()</h1>

        <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
        </div>

        <p class="info-content">Datele sunt verificate și curățate cu ajutorul funcției filter_var().</p>

        <p class="info-content">Funcția filter_var() aplică un filtru specificat unei singure variabile. Aceasta are nevoie de două tipuri de informații:</p>

        <li class="info-content">Parametrul pe care doriți să îl examinați</li>

        <li class="info-content">Tipul corespunzător de verificare</li>

        <h2>Exemplu:</h2>

        <div class="static-code-example">
          <span class="php-syntax-example">&lt;?php></span>

          <span class="php-syntax-code">$exemplu = "&lt;h1>Salutare Lume&lt;?h1>";</span>

          <span class="php-syntax-code">$exempluNou = filter_var($exemplu, FILTER_SANITIZE_STRING);</span>

          <span class="php-syntax-code">echo $exempluNou;</span>

          <span class="php-syntax-example">?></span>
        </div>

        <h2>Rezultat:</h2>

        <div class="static-code-example">
          <span class="php-syntax-code">Salutare Lume</span>
        </div>

        <br>

        <h1>Validarea unui număr întreg</h1>

        <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
        </div>

        <p class="info-content">Metoda filter_var() este utilizată în exemplul următor pentru a determina dacă variabila $numarIntreg este un număr întreg.</p>

        <h2>Exemplu:</h2>

        <div class="static-code-example">
          <span class="php-syntax-example">&lt;?php></span>

          <span class="php-syntax-code">$numarIntreg = 100;</span>

          <span class="php-syntax-code">if (filter_var($numarIntreg, FILTER_VALIDATE_INT) === 0 || !filter_var($numarIntreg, FILTER_VALIDATE_INT) === false) {</span>

          <span class="php-syntax-code">&nbsp;echo("Numărul întreg este valid");</span>

          <span class="php-syntax-code">} else {</span>

          <span class="php-syntax-code">&nbsp;echo("Numărul întreg este valid");</span>

          <span class="php-syntax-code">}</span>

          <span class="php-syntax-example">?></span>
        </div>

        <h2>Rezultat:</h2>

        <div class="static-code-example">
          <span class="php-syntax-code">Numărul întreg este valid</span>
        </div>

        <br>
        <h1>Validarea unui adrese IP</h1>

        <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
        </div>

        <p class="info-content">Metoda filter_var() este utilizată în exemplul următor pentru a determina dacă variabila $ip este o adresă validă</p>

        <h2>Exemplu:</h2>

        <div class="static-code-example">
          <span class="php-syntax-example">&lt;?php></span>

          <span class="php-syntax-code">$ip = "127.0.0.1";</span>

          <span class="php-syntax-code">if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {</span>

          <span class="php-syntax-code">&nbsp;echo("$ip este o adresă validă");</span>

          <span class="php-syntax-code">} else {</span>

          <span class="php-syntax-code">&nbsp;echo("$ip nu este o adresă validă");</span>

          <span class="php-syntax-code">}</span>

          <span class="php-syntax-example">?></span>
        </div>

        <h2>Rezultat:</h2>

        <div class="static-code-example">
          <span class="php-syntax-code">127.0.0.1 este o adresă validă</span>
        </div>

        <br>

        <h1>Igienizarea și validarea unei adrese de e-mail</h1>

        <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
        </div>

        <p class="info-content">Metoda filter_var() este utilizată în exemplul următor pentru a elimina mai întâi toate caracterele ilegale din variabila $email, apoi pentru a verifica dacă este o adresă de e-mail validă</p>

        <h2>Exemplu:</h2>

        <div class="static-code-example">
          <span class="php-syntax-example">&lt;?php></span>

          <span class="php-syntax-code">$email = "john.doe@example.com";</span>

          <span class="php-syntax-code"></span>

          <span class="php-syntax-code">// Elimină toate caracterele ilegale din e-mail</span>

          <span class="php-syntax-code">$email = filter_var($email, FILTER_SANITIZE_EMAIL);</span>

          <span class="php-syntax-code"></span>

          <span class="php-syntax-code">// Validare</span>

          <span class="php-syntax-code">if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {</span>

          <span class="php-syntax-code">&nbsp;echo("$email este o adresă validă");</span>

          <span class="php-syntax-code">} else {</span>

          <span class="php-syntax-code">&nbsp;echo("$email nu este o adresă validă");</span>

          <span class="php-syntax-code">}</span>

          <span class="php-syntax-example">?></span>
        </div>

        <h2>Rezultat:</h2>

        <div class="static-code-example">
          <span class="php-syntax-code">john.doe@example.com este o adresă validă</span>
        </div>

        <br>

        <h1>Igienizarea și validarea unui URL</h1>

        <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
        </div>

        <p class="info-content">Metoda filter_var() este utilizată pentru a elimina mai întâi toate caracterele ilegale dintr-un URL, apoi pentru a verifica dacă $url este un URL valid</p>

        <h2>Exemplu:</h2>

        <div class="static-code-example">
          <span class="php-syntax-example">&lt;?php></span>

          <span class="php-syntax-code">$url = "https://www.google.com";</span>

          <span class="php-syntax-code"></span>

          <span class="php-syntax-code">// Elimină toate caracterele ilegale din URL</span>

          <span class="php-syntax-code">$url = filter_var($url, FILTER_SANITIZE_URL);</span>

          <span class="php-syntax-code"></span>

          <span class="php-syntax-code">// Validare URL</span>

          <span class="php-syntax-code">if (!filter_var($url, FILTER_VALIDATE_URL) === false) {</span>

          <span class="php-syntax-code">&nbsp;echo("$url este un URL valid");</span>

          <span class="php-syntax-code">} else {</span>

          <span class="php-syntax-code">&nbsp;echo("$url nu este un URL valid");</span>

          <span class="php-syntax-code">}</span>

          <span class="php-syntax-example">?></span>
        </div>

        <h2>Rezultat:</h2>

        <div class="static-code-example">
          <span class="php-syntax-code">https://www.google.com este un URL valid</span>
        </div>
        <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>
        </div>
        <div class="info-container">
          <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
  $exemplu = "&lt;h1>Salutare Lume&lt;?h1>";
  $exempluNou = filter_var($exemplu, FILTER_SANITIZE_STRING);
  echo $exempluNou;
  
  echo "\n\n";
  
  $numarIntreg = 100;
  
  if (filter_var($numarIntreg, FILTER_VALIDATE_INT) === 0 || !filter_var($numarIntreg, FILTER_VALIDATE_INT) === false) {
    echo("Numărul întreg este valid");
  } else {
    echo("Numărul întreg este valid");
  }
  
  echo "\n\n";
  
  $ip = "127.0.0.1";
  if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
   echo("$ip este o adresă validă");
  } else {
   echo("$ip nu este o adresă validă");
  }
  
  echo "\n\n";
  
  $email = "john.doe@example.com";
  
  // Elimină toate caracterele ilegale din e-mail
  $email = filter_var($email, FILTER_SANITIZE_EMAIL);
  
  // Validare
  if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
   echo("$email este o adresă validă");
  } else {
   echo("$email nu este o adresă validă");
  }
  
  echo "\n\n";
  
  $url = "https://www.google.com";
  
  // Elimină toate caracterele ilegale din URL
  $url = filter_var($url, FILTER_SANITIZE_URL);
  
  // Validare URL
  if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
   echo("$url este un URL valid");
  } else {
   echo("$url nu este un URL valid");
  }
  
  
          </div>
          <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
        </div>

      </div>
    </div>
  </div>
</div>
</body>

<?php
include('../footer.php');
?>

</html>