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
      <div class="presentation-title">Iterabili</div>

      <div class="next-previous-buttons-container">
        <?php include('../next_previous_buttons.php');?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Ce este un iterabil?</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">Orice valoare care poate fi parcursă în buclă cu ajutorul unei bucle foreach() este un iterabil.</p>

          <p class="info-content">Iterabilul este un pseudotip care poate fi utilizat ca tip de date pentru parametrii funcțiilor și valorile de returnare ale funcțiilor. Acesta a fost introdus pentru prima dată în PHP 7.1.</p>

          <p class="info-content">Cuvantul cheie <code class="code-elements">iterable</code> poate fi utilizat ca tip de date al unui argument de funcție sau ca tip de retur al unei funcții</p>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">function afisareIterabil(iterable $iterabili) {</span>

            <span class="php-syntax-code">&nbsp;foreach($iterabili as $iterabil) {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo $iterabil ." ";</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">$array_exemplu = ["1", "2", "3", "4"];</span>

            <span class="php-syntax-code">afisareIterabil($array_exemplu);</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">1 2 3 4</span>
          </div>

          <h1>Creare de iterabili</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">O funcție care are nevoie de un iterabil poate primi ca parametru orice obiect, atâta timp cât acesta implementează interfața <code class="code-elements">Iterator</code>.</p>

          <p class="info-content">O listă de elemente este inclusă într-un iterator, care oferă, de asemenea, modalități de parcurgere a obiectelor. Acesta păstrează un pointer către unul dintre elementele listei. Trebuie furnizată o cheie care poate fi utilizată pentru a localiza fiecare element din listă.</p>

          <p class="info-content">Un iterator trebuie să aibă aceste metode:</p>

          <li class="info-content">current() - Returnează elementul spre care indică în prezent pointerul. Acesta poate fi orice tip de date</li>

          <li class="info-content">key() Returnează cheia asociată cu elementul curent din listă. Aceasta poate fi doar un număr întreg, float, boolean sau șir de caractere.</li>

          <li class="info-content">next() Deplasează pointerul la următorul element din listă.</li>

          <li class="info-content">rewind() Deplasează pointerul la primul element din listă.</li>

          <li class="info-content">valid() În cazul în care pointerul intern nu este îndreptat către nici un element (de exemplu, dacă next() a fost apelat la sfârșitul listei), acest lucru ar trebui să returneze false. În orice alt caz, returnează true</li>

          <h2>Exemplu:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">class ExempluIterator implements Iterator {</span>

            <span class="php-syntax-code">&nbsp;private $elemente = [];</span>

            <span class="php-syntax-code">&nbsp;private $pointer = 0;</span>

            <span class="php-syntax-code">&nbsp;public function __construct($elemente) {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;// array_values() se asigură că cheile sunt numere</span>

            <span class="php-syntax-code">&nbsp;&nbsp;$this->elemente = array_values($elemente);</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">&nbsp;public function current() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;return $this->elemente[$this->pointer];</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <br>

            <span class="php-syntax-code">&nbsp;public function key() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;return $this->pointer;</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <br>

            <span class="php-syntax-code">&nbsp;public function next() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;$this->pointer++;</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <br>

            <span class="php-syntax-code">&nbsp;public function rewind() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;$this->pointer = 0;</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <br>

            <span class="php-syntax-code">&nbsp;public function valid() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;return $this->pointer < count($this->elemente);</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">function printare(iterable $myIterable) {</span>

            <span class="php-syntax-code">&nbsp;foreach($myIterable as $item) {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo $item . " ";</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">// Use the iterator as an iterable</span>

            <span class="php-syntax-code">$iterator = new ExempluIterator(["a", "b", "c", "d"]);</span>

            <span class="php-syntax-code">printare($iterator);</span>

            <span class="php-syntax-example">?></span>
          </div>

          <h2>Rezultat:</h2>

          <div class="static-code-example">
            <span class="php-syntax-code">a b c d</span>
          </div>
        </div>
      </div>
      <div class="info-container">
        <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
        </div>
        
        <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

        <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php">&lt;?php
function afisareIterabil(iterable $iterabili) {
  foreach($iterabili as $iterabil) {
    echo $iterabil ." ";
  }
}

$array_exemplu = ["1", "2", "3", "4"];
afisareIterabil($array_exemplu);

echo "\n";

class ExempluIterator implements Iterator {
  private $elemente = [];
  private $pointer = 0;

  public function __construct($elemente) {
    // array_values() se asigură că cheile sunt numere
    $this->elemente = array_values($elemente);
  }

  public function current() {
    return $this->elemente[$this->pointer];
  }

  public function key() {
    return $this->pointer;
  }

  public function next() {
    $this->pointer++;
  }

  public function rewind() {
    $this->pointer = 0;
  }

  public function valid() {
    return $this->pointer < count($this->elemente);
  }
}

function printare(iterable $myIterable) {
  foreach($myIterable as $item) {
    echo $item . " ";
  }
}

$iterator = new ExempluIterator(["a", "b", "c", "d"]);
printare($iterator);
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