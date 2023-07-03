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
      <div class="presentation-title">Validare Formulare</div>

      <div class="next-previous-buttons-container">
        <?php include('../next_previous_buttons.php');?>      
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Ce este validarea unui formular?</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">Este esențial să validați datele introduse de utilizator în timpul procesării unui formular pentru a vă asigura că datele sunt într-un format corect.</p>

          <p class="info-content">Validările de pe partea clientului și de pe partea serverului sunt de două feluri:</p>

          <p class="info-content">Validarea pe partea clientului este realizată de browserele web ale utilizatorilor. Validarea JavaScript sau HTML5 poate fi utilizată pentru a verifica datele pe partea clientului. Înainte de a trimite datele către server, validarea pe partea clientului urmărește să ajute utilizatorii de încredere să le introducă în formatul corect.</p>

          <li class="info-content">Cu toate acestea, validarea pe partea clientului nu împiedică utilizatorii rău intenționați să introducă date care ar putea fi folosite pentru a ataca programul.</li>

          <li class="info-content">Utilizând PHP, validarea pe partea serverului verifică datele pe serverul web. Metodele PHP <code class="code-elements">filter_var()</code> și <code class="code-elements">filter_input()</code> pot fi utilizate pentru a valida datele.</li>

          <p class="info-content">Unele dintre regulile de validare pentru câmp:</p>

          <div class="table-container">
            <table>
              <tr>
                <th>Câmp</th>
                <th>Reguli de validare</th>
              </tr>
              <tr>
                <td>Nume</td>
                <td>Ar trebui să fie necesare litere și spații albe</td>
              </tr>
              <tr>
                <td>Email</td>
                <td>Ar trebui să fie necesar @ și .</td>
              </tr>
              <tr>
                <td>Site Web</td>
                <td>Ar trebui să fie necesar un URL valid</td>
              </tr>
              <tr>
                <td>Radio</td>
                <td>Trebuie să poată fi selectat cel puțin o dată</td>
              </tr>
              <tr>
                <td>Check Box</td>
                <td>Valoarea unei variabile poate fi schimbata</td>
              </tr>
              <tr>
                <td>Meniu drop-down</td>
                <td>Trebuie să poată fi selectată cel puțin o dată</td>
              </tr>
            </table>
          </div>

          <h1>Exemplu de validare URL</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <br>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$website = input($_POST["site"]);</span>

            <span class="php-syntax-code">if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {</span>

            <span class="php-syntax-code">&nbsp;$websiteErr = "URL Invalid"; </span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">&lt;?></span>
          </div>

          <p class="info-content"><b>Nota:</b> Sintaxa de mai sus va determina dacă URL-ul furnizat este legitim sau nu. Ar trebui să permită termeni precum https, ftp, www, a-z, 0-9, etc.</p>
          
          <h1>Exemplu de validare email</h1>
          
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <br>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$email = input($_POST["email"]);</span>

            <span class="php-syntax-code">if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {</span>

            <span class="php-syntax-code">&nbsp;$eroareEmail = "Format invalid și vă rugăm să reintroduceți un e-mail valid";</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">&lt;?></span>
          </div>

          <p class="info-content"><b>Nota:</b> Codul de mai sus va verifica dacă adresa de e-mail furnizată este formatată corespunzător.În caz contrar, va afișa o notificare de eroare.</p>

          <h1>Exemplu de validare nume</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <br>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$nume = test_input($_POST["name"]);</span>

            <span class="php-syntax-code">if (!preg_match("/^[a-zA-Z-' ]*$/",$ume)) {</span>

            <span class="php-syntax-code">&nbsp;$eroareNume = "Only letters and white space allowed";</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">&lt;?></span>
          </div>

          <p class="info-content"><b>Nota:</b> Codul de mai sus arată o modalitate simplă de a verifica dacă câmpul "nume" conține numai litere, liniuțe, apostrofuri și spații albe. În cazul în care valoarea câmpului "name" nu este validă, se afișează un mesaj de eroare</p>

          <h1>Elementul Form</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <br>
          
          <div class="static-code-example">
            <span class="php-syntax-example">&lt;form method="post" action="&lt;?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"></span>
          </div>

          <p class="info-content">Datele formularului sunt transmise cu method="post" atunci când acesta este trimis.</p>

          <h2>Ce este variabila $_SERVER["PHP_SELF"]?</h2>

          <li class="info-content">Numele de fișier al scriptului care rulează în prezent este returnat de super-variabila globală $_SERVER["PHP_SELF"]].</li>

          <li class="info-content">Prin urmare, în loc să navigheze către o altă pagină, $_SERVER["PHP_SELF"] transmite datele din formularul trimis către pagina în sine. În această abordare, utilizatorul va vedea notificările de eroare alături de formular pe aceeași pagină.</li>

          <h2>Ce este variabila $_SERVER["PHP_SELF"]?</h2>

          <li class="info-content">Caracterele speciale sunt convertite în entități HTML cu ajutorul metodei htmlspecialchars(). </li>
          
          <li class="info-content">Ca urmare, se va utiliza și în loc de alte caractere HTML, cum ar fi and. Acest lucru împiedică atacatorii să folosească codul HTML sau Javascript (atacuri Cross-site Scripting) pentru a abuza de codul din formulare.</li>
        </div>
      </div>
    </div>
  </div>
</body>

<?php
include('../footer.php');
?>
</html>