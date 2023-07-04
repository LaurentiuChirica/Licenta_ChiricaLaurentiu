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
      <div class="presentation-title">Standard de codare</div>

      <div class="next-previous-buttons-container">
        <?php include('../next_previous_buttons.php');?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <p class="info-content">Pe baza celor mai bune practici, fiecare organizație aderă la un standard de codare separat. Standardele de codificare sunt necesare deoarece pot exista numeroși dezvoltatori care lucrează la diferite module; prin urmare, dacă aceștia încep să își creeze propriile standarde, codul sursă ar deveni foarte greu de gestionat și imposibil de întreținut în viitor.</p>

          <p class="info-content">Iată câteva justificări pentru utilizarea specificațiilor de codare:</p>

          <li class="info-content">Codul pe care îl scrieți trebuie să fie ușor de înțeles de către colegii dumneavoastră programatori. Un standard de codificare servește drept ghid al echipei pentru a descifra codul.</li>

          <li class="info-content">Codificarea consecventă are ca rezultat simplitatea și claritatea, protejându-vă de erori comune.</li>

          <li class="info-content">Dacă în timp aduceți modificări codului dumneavoastră, acesta devine mai simplu de înțeles.</li>

          <li class="info-content">Este o practică a industriei de a adera la un anumit standard pentru a îmbunătăți calitatea software-ului.</li>

          <br>

          <h1>Fisiere</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <li class="info-content">Trebuie să existe o linie goală la sfârșitul fiecărui fișier PHP.</li>

          <li class="info-content">Fișierele care conțin numai PHP NU TREBUIE să aibă o etichetă de închidere?>.</li>

          <br>

          <h1>Linii</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <li class="info-content">NU se poate impune o restricție strictă privind lungimea liniei.</li>

          <li class="info-content">Liniile nu trebuie să depășească 120 de caractere; verificatoarele automate de stil trebuie să emită avertismente, dar nu erori la această lungime.</li>

          <li class="info-content">Liniile NU TREBUIE să depășească 80 de caractere; cele care depășesc 80 de caractere TREBUIE să fie împărțite în mai multe linii care să nu depășească 80 de caractere fiecare.</li>

          <li class="info-content">Sfârșitul unei linii care nu este în alb NU TREBUIE să aibă spații albe la sfârșit.</li>

          <li class="info-content">Pentru a crește lizibilitatea și pentru a identifica fragmente de cod conexe, se POT introduce linii goale.</li>

          <li class="info-content">O linie NU poate conține mai mult de o declarație.</li>

          <br>

          <h1>Identare</h1>
          
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <li class="info-content">Indentarea în cod TREBUIE să fie de 4 spații, iar tabulatoarele NU TREBUIE să fie folosite.</li>

          <li class="info-content">Pentru a preveni problemele legate de diferențe, patch-uri, istoric și adnotări, asigurați-vă că folosiți numai spații și nu tabulauri. De asemenea, este simplu să introduceți o subindentare fină pentru alinierea între linii atunci când se utilizează spații.</li>

          <br>

          <h1>Cuvinte-cheie și Adevărat/False/Null</h1>
          
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <li class="info-content">Pentru cuvintele cheie PHP, literele mici sunt OBLIGATORII.</li>

          <li class="info-content">Adevărat, Fals și Null în PHP TREBUIE să fie scrise cu minuscule.</li>

          <br>

          <h1>Namespaces si folosirea declaratiilor</h1>
          
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <li class="info-content">Atunci când este prezentă, declarația spațiului de nume TREBUIE să fie urmată de o singură linie goală.</li>

          <li class="info-content">Toate declarațiile de utilizare TREBUIE să vină după declarația namespace atunci când sunt prezente.</li>

          <li class="info-content">Pentru fiecare declarație, trebuie să existe un singur cuvânt-cheie use.</li>

          <li class="info-content">După blocul use, TREBUIE să existe o linie goală.</li>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">namespace Exemplu;</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">use ClasaExemplu;</span>

            <span class="php-syntax-code">use ClasaExemplu2 as Exemplu;</span>

            <span class="php-syntax-code">use Exemplu1\Exemplu2\Exemplu3;</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">// cod PHP</span>

            <span class="php-syntax-example">?></span>
          </div>

          <br>
          
          <h1>Clase</h1>
          
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <li class="info-content">Numele clasei și cuvintele cheie extends și implements TREBUIE să fie specificate pe aceeași linie.</li>
          
          <li class="info-content">Paranteza de închidere a clasei TREBUIE să urmeze corpul pe linia de după paranteza de deschidere, care TREBUIE să fie pe propria linie.</li>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">namespace Exemplu;</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">use ClasaExemplu;</span>

            <span class="php-syntax-code">use ClasaExemplu2 as Exemplu;</span>

            <span class="php-syntax-code">use Exemplu1\Exemplu2\Exemplu3;</span>
           
            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">class NumeClasa extends ClasaParinte implements \ArrayAccess, \Countable</span>

            <span class="php-syntax-code">{</span>

            <span class="php-syntax-code">// constante, metode, proprietati</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <br>

          <h1>Proprietati</h1>
          
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <li class="info-content">Toate proprietățile TREBUIE să își indice vizibilitatea.</li>

          <li class="info-content">O proprietate NU poate fi declarată cu ajutorul cuvântului cheie var.</li>

          <li class="info-content">Fiecare declarație NU poate declara mai mult de o proprietate.</li>

          <li class="info-content">În cazul în care doriți să indicați vizibilitatea protejată sau privată, numele proprietăților NU TREBUIE să fie precedate de o singură subliniere.</li>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">namespace Exemplu;</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">class NumeClasa</span>

            <span class="php-syntax-code">{</span>

            <span class="php-syntax-code">&nbsp;&nbsp;&nbsp;&nbsp;public $exemplu = null;</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h1>Metode</h1>
          
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <li class="info-content">Toate metodele TREBUIE să își precizeze vizibilitatea.</li>
          
          <li class="info-content">Numele metodelor care indică vizibilitatea protejată sau privată NU TREBUIE să fie precedate de o singură subliniere.</li>
          
          <li class="info-content">La declararea metodelor NU se poate lăsa un spațiu după numele metodei. Paranteza de închidere TREBUIE să urmeze corpul pe linia de după paranteza de deschidere, care TREBUIE să fie pe propria linie. Nu se poate lăsa niciun spațiu după paranteza de deschidere și niciun spațiu nu poate preceda paranteza de închidere.</li>
          
          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">namespace Exemplu;</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">class NumeClasa</span>

            <span class="php-syntax-code">{</span>

            <span class="php-syntax-code">&nbsp;&nbsp;&nbsp;&nbsp;public $exemplu = null;</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h1>Abstract, final, si static</h1>
                    
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <li class="info-content">Declarația de vizibilitate TREBUIE să apară înaintea declarațiilor abstractă și finală, atunci când acestea sunt prezente.</li>

          <li class="info-content">Declarația statică TREBUIE să apară după declarația de vizibilitate, atunci când este prezentă.</li>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">namespace Exemplu;</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">abstract class NumeClasa</span>

            <span class="php-syntax-code">{</span>

            <span class="php-syntax-code">&nbsp;&nbsp;&nbsp;&nbsp;public static $exemplu = null;</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">&nbsp;&nbsp;&nbsp;&nbsp;abstract protected function exempluFunctie();</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">&nbsp;&nbsp;&nbsp;&nbsp;final public static function exempluFunctie()</span>

            <span class="php-syntax-code">&nbsp;&nbsp;&nbsp;&nbsp;{</span>

            <span class="php-syntax-code">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// corpul metodei</span>

            <span class="php-syntax-code">&nbsp;&nbsp;&nbsp;&nbsp;}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <br>

          <h1>Apeluri de metode și funcții</h1>
          
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <li class="info-content">Atunci când se apelează o metodă sau o funcție, NU TREBUIE să existe un spațiu între numele metodei sau al funcției și paranteza de deschidere, după paranteza de deschidere sau înainte de paranteza de închidere. Trebuie să existe un spațiu după fiecare virgulă din lista de argumente, dar NU TREBUIE să existe un spațiu înaintea acestora.</li>

          <li class="info-content">Declarația statică TREBUIE să apară după declarația de vizibilitate, atunci când este prezentă.</li>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">exemplu();</span>

            <span class="php-syntax-code">$variabile->exemplu($arg1);</span>

            <span class="php-syntax-code">Exemplu::exemplu($arg2, $arg3);</span>

            <span class="php-syntax-example">?></span>
          </div>

          <br>

          <h1>Structuri de control</h1>
          
          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">Orientările generale privind stilul structurii de control</p>

          <li class="info-content">Un spațiu TREBUIE să urmeze cuvântul cheie "structură de control".</li>

          <li class="info-content">NU SE PERMITE un spațiu după paranteza de deschidere.</li>

          <li class="info-content">Un spațiu NU POATE veni înainte de paranteza de închidere.</li>

          <li class="info-content">Paranteza de închidere și paranteza de deschidere TREBUIE să fie separate de un spațiu.</li>

          <li class="info-content">Corpul construcției TREBUIE să fie indentat o dată.</li>

          <li class="info-content">Linia care urmează imediat după corp TREBUIE să conțină paranteza de închidere.</li>

          <li class="info-content">Corpul fiecărei structuri TREBUIE să fie înconjurat de o paranteză. Acest lucru armonizează aspectul structurilor și reduce posibilitatea introducerii de erori pe măsură ce se adaugă linii suplimentare la corp.</li>

        </div>
      </div>
    </div>
  </div>
</body>

<?php
include('../footer.php');
?>

</html>