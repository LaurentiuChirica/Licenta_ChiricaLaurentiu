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
      <div class="presentation-title">Creare Tabel</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Crearea unui tabel MySQL folosind MySQLi și PDO</h1>

          <p class="info-content">Pentru a construi un tabel, se utilizează funcția mysql_query() din PHP. Metoda mysql_query() nu mai este de actualitate din PHP 5.5. În prezent, se recomandă utilizarea uneia dintre cele două opțiuni.</p>

          <li class="info-content">mysqli_query()</li>

          <li class="info-content">PDO::__query()</li>

          <p class="info-content">Instrucțiunea CREATE TABLE este utilizată pentru a crea un tabel în MySQL.</p>

          <p class="info-content">Vom crea un tabel numit "Student", cu cinci coloane: "id", "firstname", "lastname", "email" și "reg_date":</p>

          <br>

          <div class="static-code-example">
            <span class="php-syntax-example">CREATE TABLE Student (</span>
            
            <span class="php-syntax-code">&nbsp;id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,</span>
            
            <span class="php-syntax-code">&nbsp;prenume VARCHAR(30) NOT NULL,</span>
            
            <span class="php-syntax-code">&nbsp;nume VARCHAR(30) NOT NULL,</span>
            
            <span class="php-syntax-code">&nbsp;email VARCHAR(50),</span>
            
            <span class="php-syntax-code">&nbsp;data_inregistrare TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP</span>
            
            <span class="php-syntax-example">)</span>
          </div>

          <p class="info-content">Tipurile de date admisibile ale coloanei sunt specificate de tipul de date.</p>

          <p class="info-content">După tipul de date, puteți specifica și alte atribute opționale pentru fiecare coloană:</p>

          <li class="info-content">NOT NULL - Fiecare rând trebuie să conțină o valoare pentru coloana respectivă, nu sunt permise valorile nule.</li>

          <li class="info-content">DEFAULT value - Stabilește o valoare implicită care este adăugată atunci când nu este transmisă nicio altă valoare.</li>

          <li class="info-content">UNSIGNED - Utilizat pentru tipurile de numere, limitează datele stocate la numere pozitive și zero</li>

          <li class="info-content">AUTO INCREMENT - MySQL crește automat valoarea câmpului cu 1 de fiecare dată când se adaugă o nouă înregistrare</li>

          <li class="info-content">PRIMARY KEY - Se utilizează pentru a identifica în mod unic rândurile dintr-o tabelă. Coloana cu setarea PRIMARY KEY este adesea un număr de identificare și este adesea utilizată cu AUTO_INCREMENT</li>

          <p class="info-content">Fiecare tabel trebuie să aibă o coloană cheie primară (în acest caz: coloana "id"). Valoarea acesteia trebuie să fie unică pentru fiecare înregistrare din tabel.</p>

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

            <span class="php-syntax-code">>&nbsp;die("Conexiunea a esuat: " . $conn->connect_error);</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">// SQL pentru a crea tabelul</span>

            <span class="php-syntax-code">$sql = "CREATE TABLE Student (</span>

            <span class="php-syntax-code">&nbsp;id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,</span>

            <span class="php-syntax-code">&nbsp;nume VARCHAR(30) NOT NULL,</span>

            <span class="php-syntax-code">&nbsp;prenume VARCHAR(30) NOT NULL,</span>

            <span class="php-syntax-code">&nbsp;email VARCHAR(50),</span>

            <span class="php-syntax-code">&nbsp;data_inregistrare TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP</span>

            <span class="php-syntax-code">)";</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">if ($conn->query($sql) === TRUE) {</span>

            <span class="php-syntax-code">&nbsp;echo "Tabel Student creat cu sucess";</span>

            <span class="php-syntax-code">} else {</span>

            <span class="php-syntax-code">&nbsp;echo "Eroarea la crearea tabelului: " . $conn->error;</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">$conn->close();</span>

            <span class="php-syntax-example">?></span>
          </div>
          
          <br>

          <h2>Exemplu PDO</h2>

          <div class="static-code-example">
            <span class="php-syntax-example">&lt;?php</span>

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

            <span class="php-syntax-code">&nbsp;// SQL pentru a crea tabelul</span>

            <span class="php-syntax-code">&nbsp;$sql = "CREATE TABLE Student (</span>

            <span class="php-syntax-code">&nbsp;&nbsp;id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,</span>

            <span class="php-syntax-code">&nbsp;&nbsp;prenume VARCHAR(30) NOT NULL,</span>

            <span class="php-syntax-code">&nbsp;&nbsp;nume VARCHAR(30) NOT NULL,</span>

            <span class="php-syntax-code">&nbsp;&nbsp;email VARCHAR(50),</span>

            <span class="php-syntax-code">&nbsp;&nbsp;data_inregistrare TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP</span>

            <span class="php-syntax-code">&nbsp;)";</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">&nbsp;// utilizați exec() deoarece nu sunt returnate rezultate</span>

            <span class="php-syntax-code">&nbsp;$conn->exec($sql);</span>

            <span class="php-syntax-code">&nbsp;echo "Tabelul Student creat cu succes";</span>

            <span class="php-syntax-code">} catch(PDOException $e) {</span>

            <span class="php-syntax-code">&nbsp;echo $sql . " " . $e->getMessage();</span>

            <span class="php-syntax-code">}</span>

            <span class="php-syntax-code">$conn = null;</span>

            <span class="php-syntax-example">?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<?php include("footer.php"); ?>

</html>