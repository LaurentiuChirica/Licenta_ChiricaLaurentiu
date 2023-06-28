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
    <div class="presentation-title">Cookie PHP</div>

    <div class="next-previous-buttons-container">
      <?php include("next_previous_buttons.php"); ?>
    </div>

    <div class="info-container">
      <div class="info-content-container">
        <h1>Ce este un cookie?</h1>

        <p class="info-content">Cookie-urile sunt fișiere text salvate în scopuri de urmărire care sunt stocate pe computerul clientului. Cookie-urile HTTP sunt acceptate în mod transparent de PHP.</p>

        <p class="info-content">Sunt necesari trei pași pentru a recunoaște utilizatorii care revin:</p>

        <li class="info-content">O colecție de cookie-uri este trimisă către browser de către scriptul serverului. Numele, vârsta, numărul de identificare etc. sunt câteva exemple.</li>

        <li class="info-content">Calculatorul local al browserului păstrează aceste date pentru utilizare ulterioară.</li>

        <li class="info-content">Serverul utilizează informațiile din cookie-uri pentru a recunoaște utilizatorul atunci când browserul face o cerere către serverul web data următoare.</li>

        <h1>Superglobalul $_COOKIE</h1>

        <p class="info-content">Variabila superglobală PHP $_COOKIE este utilizată pentru a obține cookie-uri.</p>

        <h2>Exemplu:</h2>

        <div class="static-code-example">
          <span class="php-syntax-code">$value=$_COOKIE["CookieName"];//returneaza valoarea cookie-ului</span>
        </div>
        
        <br>

        <h1>Setarea cookie-urilor cu PHP</h1>

        <p class="info-content">Pentru a seta un modul cookie, utilizați metoda setcookie() furnizată de PHP. Această funcție trebuie apelată înainte de tag-ul html> și acceptă până la șase argumente. Această funcție trebuie să fie apelată independent pentru fiecare cookie.</p>
        
        <h2>Sintaxa:</h2>
        
        <div class="static-code-example">
          <span class="php-syntax-code">setcookie(name, value, expire, path, domain, security);</span>
        </div>

        <br>

        <li class="info-content"><b>Name</b> - Aceasta stabilește numele cookie-ului și este stocată într-o variabilă de mediu numită HTTP_COOKIE_VARS. Această variabilă este utilizată în timpul accesării cookie-urilor.</li>

        <li class="info-content"><b>Value</b>  - Definește valoarea variabilei denumite și reprezintă conținutul pe care doriți să îl stocați efectiv.</li>

        <li class="info-content"><b>Expire</b> - Aceasta specifică un timp viitor în secunde de la 00:00:00 GMT la 1 ianuarie 1970. După această perioadă, cookie-ul va deveni inaccesibil. Dacă acest parametru nu este setat, atunci cookie-ul va expira automat la închiderea browserului web.</li>

        <li class="info-content"><b>Path</b> - Specifică directoarele pentru care este valabil cookie-ul. O singură bară oblică directă permite ca cookie-ul să fie valabil pentru toate directoarele.</li>

        <li class="info-content"><b>Domain</b> - Poate fi utilizat pentru a specifica numele domeniului în cazul domeniilor foarte mari și trebuie să conțină cel puțin două puncte pentru a fi valabil. Toate modulele cookie sunt valabile numai pentru gazda și domeniul care le-a creat.</li>

        <li class="info-content"><b>Security</b> - Acest parametru poate fi setat la 1 pentru a specifica faptul că cookie-ul trebuie să fie trimis numai prin transmisie securizată folosind HTTPS, altfel setat la 0, ceea ce înseamnă că cookie-ul poate fi trimis prin HTTP obișnuit.</li>

        <p class="info-content"><b>Nota:</b> Cookie-ul PHP trebuie utilizat înainte de eticheta &lt;html>.</p>

        <h2>Exemplu:</h2>

        <div class="static-code-example">
          <span class="php-syntax-example">&lt;?php</span>

          <span class="php-syntax-code">$cookie_name = "utilizator";</span>

          <span class="php-syntax-code">$cookie_value = "John Doe";</span>

          <span class="php-syntax-code">setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 zi</span>

          <span class="php-syntax-code">?></span>

          <span class="php-syntax-code"></span>

          <span class="php-syntax-example">&lt;html></span>

          <span class="php-syntax-example">&lt;body></span>

          <span class="php-syntax-code"></span>

          <span class="php-syntax-example">&lt;?php</span>

          <span class="php-syntax-code">if(!isset($_COOKIE[$cookie_name])) {</span>

          <span class="php-syntax-code">&nbsp;&nbsp;echo "Cookie-ul numit '" . $cookie_name . "' nu este setat!";</span>

          <span class="php-syntax-code">} else {</span>

          <span class="php-syntax-code">&nbsp;&nbsp;echo "Cookie-ul '" . $cookie_name . "' este setat!";</span>

          <span class="php-syntax-code">&nbsp;&nbsp;echo "Valoarea este: " . $_COOKIE[$cookie_name];</span>

          <span class="php-syntax-code">}</span>

          <span class="php-syntax-example">?></span>

          <span class="php-syntax-example">&lt;/body></span>

          <span class="php-syntax-example">&lt;/html></span>
        </div>

        <br>

        <h1>Ștergerea unui cookie</h1>

        <p class="info-content">Utilizați funcția setcookie() cu o dată de expirare trecută pentru a șterge cookie-urile</p>


        <div class="static-code-example">
          <span class="php-syntax-example">&lt;?php</span>

          <span class="php-syntax-code">// setează data de expirare la o oră în urmă</span>

          <span class="php-syntax-code">setcookie("utilizator", "", time() - 3600);</span>

          <span class="php-syntax-code">?></span>

          <span class="php-syntax-code"></span>

          <span class="php-syntax-example">&lt;html></span>

          <span class="php-syntax-example">&lt;body></span>

          <span class="php-syntax-code"></span>

          <span class="php-syntax-example">&lt;?php</span>

          <span class="php-syntax-code">echo "Cookie-ul 'utilizator' este sters.";</span>

          <span class="php-syntax-example">?></span>

          <span class="php-syntax-example">&lt;/body></span>

          <span class="php-syntax-example">&lt;/html></span>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>

<?php include("footer.php"); ?>

</html>