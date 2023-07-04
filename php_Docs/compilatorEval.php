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
      <div class="presentation-title">Compilator folosind functia eval()</div>

      <div class="info-container">
        <div class="info-content-container">

        <h1>Ce este functia eval()?</h1>

        <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
        </div>

          <p class="info-content">Funcția eval din PHP este o funcționalitate robustă și utilă care permite executarea dinamică a codului PHP în cadrul unui șir de caractere. Aceasta evaluează un argument de tip șir de caractere format din cod PHP ca și cum ar fi o componentă a scriptului PHP original. Scenariile avansate de scripting, fluxul dinamic al programului și generarea de cod în timp de execuție sunt toate posibile datorită funcției eval.</p>

          <p class="info-content">Principalul scop al funcției eval este de a analiza și de a executa codul PHP în mod dinamic. Aceasta poate fi utilizată pentru a executa scripturi de configurare dinamică, pentru a evalua expresii matematice, pentru a produce cod din mers sau pentru a implementa limbaje de scripting personalizate. Codul evaluat este tratat și executat de funcția eval ca și cum ar fi fost scris direct în scriptul PHP.</p>

          <?php include("live_compiler.php")?>

          <p class="info-content">O tehnică eficientă pentru a construi un mediu de execuție a codului online este implementarea unui compilator cu funcția eval în PHP. Utilizarea eval într-o implementare a compilatorului necesită următoarele considerații:</p>

          <li class="info-content"><b>Executarea dinamică a codului:</b> Funcția eval permite compilatorului să ruleze codul PHP în mod dinamic, oferind utilizatorilor un feedback imediat.</li>

          <li class="info-content"><b>Validarea intrărilor:</b> Este esențial să se verifice și să se igienizeze temeinic datele de intrare ale utilizatorului, deoarece funcția eval execută codul direct dintr-un șir de caractere.</li>

          <li class="info-content"><b>Gestionarea erorilor:</b> Este esențial să se creeze tehnici fiabile de tratare a erorilor atunci când se utilizează eval într-un compilator. Set_error_handler și error_reporting sunt două funcții PHP de tratare a erorilor care pot fi utilizate.</li>

          <li class="info-content"><b>Considerații privind securitatea:</b> Atunci când se utilizează eval, este esențial să se dispună de controale de securitate adecvate, deoarece există pericole implicate de rularea de cod arbitrar. Pentru a reduce orice riscuri potențiale de securitate, limitați domeniul de aplicare a codului evaluat.</li>

          <li class="info-content"><b>Performanță și optimizare:</b> În comparație cu execuția convențională a codului, funcția de evaluare are un oarecare suprapreț de performanță. Pentru a spori eficiența în timpul execuției, gândiți-vă la optimizarea prin utilizarea unor strategii alternative, cum ar fi compilarea Just-in-Time (JIT).</li>

          <p class="info-content">Nu uitați că, deși funcția eval oferă flexibilitate și posibilitatea de a rula cod dinamic, aceasta trebuie utilizată cu moderație și cu atenție. Pentru a garanta funcționarea sigură și fiabilă a implementării compilatorului, trebuie să existe o validare adecvată, măsuri de precauție în materie de securitate și de tratare a erorilor.</p>

          <h1>Definirea unei Clase</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">Cuvântul cheie class este utilizat pentru a defini o clasă, care este urmată de numele clasei și de două paranteze {}. Între paranteze se află toate atributele și operațiile sale:</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">class Masini {</span>

            <span class="php-syntax-code">&nbsp;// Proprietati ale clasei</span>

            <span class="php-syntax-code">&nbsp;public $brand;</span>

            <span class="php-syntax-code">&nbsp;public $culoare;</span>

            <span class="php-syntax-code">&nbsp;public $categorie;</span>

            <span class="php-syntax-code">&nbsp;// Metode</span>

            <span class="php-syntax-code">&nbsp; function setare_brand($brand) {</span>

            <span class="php-syntax-code">&nbsp;&nbsp; $this->brand = $brand;</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">&nbsp; function obtine_brand() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp; return $this->brand;</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-example">?></span>
          </div>

          <p class="info-content"><b>Nota:</b> O variabila locala are prioritate mai mare decat o variabila globala.</p>

          <h1>Definirea obiectelor</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">Fără obiecte, clasele sunt inutile. O clasă poate fi utilizată pentru a crea mai multe obiecte. Toate atributele și metodele definite de clasă sunt prezente în fiecare obiect, dar valorile lor vor varia.</p>

          <p class="info-content">Cuvântul cheie new este utilizat pentru a crea obiecte care aparțin unei clase.</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">class Masini {</span>

            <span class="php-syntax-code">&nbsp;// Proprietati ale clasei</span>

            <span class="php-syntax-code">&nbsp;public $brand;</span>

            <span class="php-syntax-code">&nbsp;public $culoare;</span>

            <span class="php-syntax-code">&nbsp;public $categorie;</span>

            <span class="php-syntax-code">&nbsp;// Metode</span>

            <span class="php-syntax-code">&nbsp; function setare_brand($brand) {</span>

            <span class="php-syntax-code">&nbsp;&nbsp; $this->brand = $brand;</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">&nbsp; function obtine_brand() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp; return $this->brand;</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">$mercedes = new Masini();</span>

            <span class="php-syntax-code">$audi = new Masini();</span>

            <span class="php-syntax-code">$mercedes->setare_brand('Mercedes-Benz');</span>

            <span class="php-syntax-code">$audi->setare_brand('Audi');</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">echo $mercedes->obtine_brand();</span>

            <span class="php-syntax-code">echo $audi->obtine_brand();</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">Mercedes-Benz</span>

            <span class="php-syntax-code">Audi</span>
          </div>

          <h1>Cuvântul cheie $this</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">Cuvântul cheie $this, care apare numai în interiorul metodelor, se referă la obiectul curent.</p>

          <h1>Instanceof</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">Cuvântul cheie instanceof poate fi utilizat pentru a determina dacă un element aparține unei anumite clase:</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$mercedes = new Masini();</span>

            <span class="php-syntax-code">var_dump($mercedes instanceof Masini);</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">bool(true)</span>
          </div>
        </div>
      </div>
      <div class="info-container">
        <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
        </div>
        
        <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
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