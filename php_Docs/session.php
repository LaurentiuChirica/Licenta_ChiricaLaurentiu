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
    <div class="presentation-title">Session PHP</div>

    <div class="next-previous-buttons-container">
      <?php include('../next_previous_buttons.php');?>
    </div>

    <div class="info-container">
      <div class="info-content-container">
        <h1>Ce este o sesiune?</h1>

        <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
        </div>

        <p class="info-content">O aplicație este deschisă, modificată și apoi închisă atunci când lucrați cu ea. Acest lucru este foarte asemănător cu o sesiune. Sunteți recunoscut de către computer. Acesta este conștient de momentul în care deschideți și închideți aplicația. Pe internet, însă, există o problemă: deoarece adresele HTTP nu păstrează starea, serverul web nu știe cine sunteți sau ce faceți.</p>

        <p class="info-content">Această problemă este rezolvată de variabilele de sesiune, care salvează datele utilizatorului pentru a fi utilizate pe numeroase pagini (cum ar fi numele de utilizator sau culoarea preferată). Variabilele de sesiune persistă de obicei până când utilizatorul iese din browser.</p>

        <p class="info-content">Prin urmare, variabilele de sesiune sunt vizibile pentru toate paginile dintr-o singură aplicație și salvează informații despre un singur utilizator.</p>

        <h1>Funcția session_start()</h1>

        <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
        </div>

        <p class="info-content">Sesiunea este lansată cu ajutorul metodei PHP session_start(). Aceasta începe o nouă sesiune sau o reia de unde a fost întreruptă. În cazul în care a fost deja formată o sesiune, se returnează sesiunea existentă. Creează și returnează o nouă sesiune dacă cea existentă nu este disponibilă.</p>

        <h2>Sintaxă:</h2>

        <div class="static-code-example">
          <span class="php-syntax-code">bool session_start ( void )</span>
        </div>
        
        <h2>Exemplu:</h2>

        <div class="static-code-example">
          <span class="php-syntax-code">session_start();</span>
        </div>
        
        <br>

        <h1>PHP $_SESSION</h1>

        <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
        </div>

        <p class="info-content">Toate variabilele de sesiune sunt stocate în tabloul asociativ $_SESSION din PHP. Valorile variabilelor de sesiune pot fi setate și recuperate cu ajutorul acestuia.</p>

        <h2>Exemplu de stocare informție:</h2>

        <div class="static-code-example">
          <span class="php-syntax-code">$_SESSION["user"] = "John";</span>
        </div>
        
        <h2>Exemplu de obținere informație:</h2>

        <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
        </div>

        <div class="static-code-example">
          <span class="php-syntax-code">echo $_SESSION["user"];</span>
        </div>

        <h2>Exemplu:</h2>

        <div class="static-code-example">
          <span class="php-syntax-code">// sesiune1.php</span>

          <span class="php-syntax-example">&lt;?php</span>

          <span class="php-syntax-code">session_start();</span>

          <span class="php-syntax-example">?></span>

          <span class="php-syntax-code"></span>

          <span class="php-syntax-example">&lt;html></span>

          <span class="php-syntax-example">&lt;body></span>

          <span class="php-syntax-code"></span>

          <span class="php-syntax-example">&lt;?php</span>

          <span class="php-syntax-code">$_SESSION["user"] = "John";</span>

          <span class="php-syntax-code">echo "Informația din sesiune a fost setată cu succes!";</span>

          <span class="php-syntax-example">?></span>

          <span class="php-syntax-code"></span>

          <span class="php-syntax-code">&lt;a href="sesiune2.php">Viziteaza urmatoarea pagina&lt;/a></span>

          <span class="php-syntax-code"></span>
          
          <span class="php-syntax-example">&lt;/body></span>

          <span class="php-syntax-example">&lt;/html></span>
        </div>
        
        <br>

        <div class="static-code-example">
          <span class="php-syntax-code">// sesiune2.php</span>

          <span class="php-syntax-example">&lt;?php</span>

          <span class="php-syntax-code">session_start();</span>

          <span class="php-syntax-example">?></span>

          <span class="php-syntax-code"></span>

          <span class="php-syntax-example">&lt;html></span>

          <span class="php-syntax-example">&lt;body></span>

          <span class="php-syntax-code"></span>

          <span class="php-syntax-example">&lt;?php</span>

          <span class="php-syntax-code">echo "Utilizatorul este: ".$_SESSION["user"];</span>

          <span class="php-syntax-example">?></span>

          <span class="php-syntax-code"></span>
          
          <span class="php-syntax-example">&lt;/body></span>

          <span class="php-syntax-example">&lt;/html></span>
        </div>

        <h1>Distrugerea unei sesiuni PHP</h1>

        <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
        </div>

        <p class="info-content">Utilizați <code class="code-elements">session_unset()</code> și <code class="code-elements">session_destroy()</code> pentru a șterge toate variabilele globale ale sesiunii și pentru a încheia sesiunea curentă.</p>

        <div class="static-code-example">
          <span class="php-syntax-example">&lt;?php</span>

          <span class="php-syntax-code">session_start();</span>

          <span class="php-syntax-example">?></span>

          <span class="php-syntax-code"></span>

          <span class="php-syntax-example">&lt;html></span>

          <span class="php-syntax-example">&lt;body></span>

          <span class="php-syntax-code"></span>

          <span class="php-syntax-example">&lt;?php</span>

          <span class="php-syntax-code">// eliminați toate variabilele de sesiune</span>

          <span class="php-syntax-code">session_unset();</span>

          <span class="php-syntax-code">// distruge sesiunea</span>

          <span class="php-syntax-code">session_destroy();</span>

          <span class="php-syntax-example">?></span>

          <span class="php-syntax-code"></span>

          <span class="php-syntax-code">&lt;a href="sesiune2.php">Viziteaza urmatoarea pagina&lt;/a></span>
        </div>
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