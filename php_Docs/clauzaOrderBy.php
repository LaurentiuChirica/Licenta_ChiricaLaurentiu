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
      <div class="presentation-title">Clauza Order By</div>

      <div class="next-previous-buttons-container">
        <?php include('../next_previous_buttons.php');?>      
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>La ce este folosita clauza Order By?</h1>

          <div class="horizontal-line-container">
            <div class="horizontal-line"></div>
          </div>

          <p class="info-content">Setul de rezultate poate fi sortat în ordine crescătoare sau descrescătoare cu ajutorul clauzei ORDER BY.</p>

          <p class="info-content">În mod implicit, înregistrările sunt sortate prin clauza ORDER BY în ordine crescătoare. Utilizați cuvântul cheie DESC pentru a sorta înregistrările în ordine descrescătoare.</p>

          <h2>Sintaxa:</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">SELECT numeColoane FROM numeTabel ORDER BY numeColoane ASC|DESC</span>
          </div>

          <h2>Exemplu MySQLi</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">$servername = "localhost";</span>

            <span class="php-syntax-code">$username = "numeUtilizator";</span>

            <span class="php-syntax-code">$password = "parola";</span>

            <span class="php-syntax-code">$dbname = "exempluBazaDate";</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">// Crearea conexiunii</span>

            <span class="php-syntax-code">$conn = new mysqli($servername, $username, $password, $dbname);</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">// Verificarea conexiunii</span>

            <span class="php-syntax-code">if ($conn->connect_error) {</span>

            <span class="php-syntax-code">&nbsp;die("Conexiunea a esuat: " . $conn->connect_error);</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">$sql = "SELECT id, prenume, nume FROM Student ORDER BY nume";</span>

            <span class="php-syntax-code">$result = $conn->query($sql);</span>

            <span class="php-syntax-code"></span>   

            <span class="php-syntax-code">if ($result->num_rows > 0) {</span>

            <span class="php-syntax-code">&nbsp;// datele de ieșire ale fiecărui rând</span>

            <span class="php-syntax-code">&nbsp;while($row = $result->fetch_assoc()) {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo "id: " . $row["id"]. " - Nume: " . $row["prenume"]. " " . $row["nume"]. ";</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code">} else {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo "0 rezultate";</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">$conn->close();</span>

            <span class="php-syntax-example">?></span>
          </div>
          
          <br>

          <h2>Explicatii</h2>

          <p class="info-content">În primul rând, configurăm interogarea SQL care extrage câmpurile id, firstname și lastname din tabelul Student. Coloana nume de familie va fi utilizată pentru a sorta datele. Interogarea este apoi executată, iar informațiile obținute sunt stocate într-o variabilă numită $result.</p>

          <p class="info-content">Apoi, metoda num_rows() determină dacă există mai multe rânduri returnate decât zero.</p>

          <p class="info-content">Funcția fetch_assoc() creează un tablou asociativ prin care putem trece în buclă dacă există mai multe rânduri returnate decât zero. Valorile din coloanele id, prenume și nume sunt tipărite de bucla while() pe măsură ce parcurge setul de rezultate.</p>

          <h2>Exemplu PDO cu declaratii pregatite</h2>

          <p class="info-content">Urmatorul exemplu selectează coloanele id, prenume și nume din tabelul Student, unde numele de familie este "Doe", și le afișează într-un tabel HTML</p>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

            <span class="php-syntax-code">echo "&lt;table style='border: solid 1px black;'>";</span>

            <span class="php-syntax-code">echo "&lt;tr>&lt;th>Id&lt;/th>&lt;th>Prenume&lt;/th>&lt;th>Nume&lt;/th>&lt;/tr>";</span>

            <span class="php-syntax-code">class RanduriTabel extends RecursiveIteratorIterator {</span>

            <span class="php-syntax-code"></span>
            
            <span class="php-syntax-code">&nbsp;function __construct($it) {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;parent::__construct($it, self::LEAVES_ONLY);</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">&nbsp;function current() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;return "&lt;td style='width:150px;border:1px solid black;'>" . parent::current(). "&lt;/td>";</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">&nbsp;function beginChildren() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo "&lt;tr>";</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">&nbsp;function endChildren() {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo "&lt;/tr>" . "\n";</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">$servername = "localhost";</span>

            <span class="php-syntax-code">$username = "numeUtilizator";</span>

            <span class="php-syntax-code">$password = "parola";</span>

            <span class="php-syntax-code">$dbname = "exempluBazaDate";</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">try {</span>

            <span class="php-syntax-code">&nbsp;$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">&nbsp;// setează modul de eroare PDO la excepție</span>

            <span class="php-syntax-code">&nbsp;$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">&nbsp;// pregătiți sql și legați parametrii</span>

            <span class="php-syntax-code">&nbsp;$stmt = $conn->prepare("SELECT id, prenume, nume FROM Student ORDER BY nume");</span>

            <span class="php-syntax-code">&nbsp;$stmt->execute();</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">// setați matricea rezultată ca fiind asociativă</span>

            <span class="php-syntax-code">&nbsp;$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);</span>

            <span class="php-syntax-code">&nbsp;foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $cheie => $valoare) {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo $valoare;</span>

            <span class="php-syntax-code">&nbsp;}</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">} catch(PDOException $e) {</span>

            <span class="php-syntax-code">&nbsp;echo "Eroare: " . $e->getMessage();</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">$conn = null;</span>

            <span class="php-syntax-code">echo "&lt;/table>"</span>

            <span class="php-syntax-example">?></span>
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