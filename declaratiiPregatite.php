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
      <div class="presentation-title">Declaratii Pregatite</div>

      <div class="next-previous-buttons-container">
        <?php include("next_previous_buttons.php"); ?>
      </div>

      <div class="info-container">
        <div class="info-content-container">
          <h1>Ce este o declaratie pregatita?</h1>

          <p class="info-content">O declaratie pregătită este o caracteristică care vă permite să executați în mod eficient aceleași comenzi SQL (sau comenzi similare) din nou și din nou.</p>

          <p class="info-content">Declarațiile pregătite funcționează după cum urmează:</p> 

          <p class="info-content"><b>1.</b> Pregătiți: Un șablon pentru o instrucțiune SQL este creat și livrat bazei de date. Valorile incomplete sunt cunoscute sub numele de parametri și sunt indicate prin semnul întrebării ("?")</p>
          
          <p class="info-content">Exemplu: INSERT INTO MyGuests VALUES(?,?,?,?)</p>

          <p class="info-content"><b>2.</b> Șablonul de instrucțiuni SQL este analizat, compilat și optimizat de baza de date, care stochează apoi rezultatul fără a-l executa efectiv.</p>

          <p class="info-content"><b>3.</b> Se execută: Baza de date execută instrucțiunea după ce aplicația leagă valorile parametrilor la un moment dat. Instrucțiunea poate fi executată de program de câte ori este necesar cu diverse valori.</p>

          <p class="info-content">Avantaje:</p>

          <li class="info-content">Deoarece interogarea este pregătită doar o singură dată (în ciuda faptului că instrucțiunea este executată de mai multe ori), instrucțiunile pregătite accelerează analiza.</li>

          <li class="info-content">Parametrii legați reduc cantitatea de date trimise către server, deoarece trebuie să transmiteți doar parametrii de fiecare dată, în loc de întreaga interogare.</li>
          
          <li class="info-content">Deoarece valorile parametrilor care sunt transferate ulterior cu ajutorul unui protocol separat nu trebuie să fie scăpate în mod corespunzător, declarațiile pregătite sunt extrem de utile în protejarea împotriva injecțiilor SQL. Injectarea SQL este imposibilă dacă șablonul declarației inițiale nu este derivat din date externe.</li>


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
            
            <span class="php-syntax-code">$sql = "INSERT INTO Student (prenume, nume, email)</span>

            <span class="php-syntax-code">&nbsp;VALUES ('John', 'Doe', 'john@example.com')";</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">$sql .= "INSERT INTO Student (prenume, nume, email)</span>

            <span class="php-syntax-code">&nbsp;VALUES ('Trevor', 'Anderson', 'trevor@example.com')";</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">$sql .= "INSERT INTO Student (prenume, nume, email)</span>

            <span class="php-syntax-code">&nbsp;VALUES ('Michael', 'Davis', 'michael@example.com')";</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">&nbsp;if ($conn->query($sql) === TRUE) {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo "Înregistrări noi create cu succes";</span>

            <span class="php-syntax-code">&nbsp;} else {</span>

            <span class="php-syntax-code">&nbsp;&nbsp;echo "Eroare: " . $sql . " " . $conn->error;</span>

            <span class="php-syntax-code">&nbsp;}</span>

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

            <span class="php-syntax-code">&nbsp;// Inceperea tranzactiei</span>

            <span class="php-syntax-code">&nbsp;$conn->beginTransaction();</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">&nbsp;// Declaratiile SQL</span>

            <span class="php-syntax-code">&nbsp;$conn->exec("INSERT INTO Student (nume, prenume, email)</span>

            <span class="php-syntax-code">&nbsp;VALUES ('John', 'Doe', 'john@example.com')");</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">&nbsp;$conn->exec("INSERT INTO Student (nume, prenume, email)</span>

            <span class="php-syntax-code">&nbsp;VALUES ('Trevor', 'Anderson', 'trevor@example.com')");</span>

            <span class="php-syntax-code"></span>
            
            <span class="php-syntax-code">&nbsp;$conn->exec("INSERT INTO Student (nume, prenume, email)</span>

            <span class="php-syntax-code">&nbsp;VALUES ('Michael', 'Davis', 'michael@example.com')");</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">&nbsp;// confirmă tranzacția</span>

            <span class="php-syntax-code">&nbsp;$conn->commit();</span>

            <span class="php-syntax-code">&nbsp;echo "Noi înregistrări create cu succes";</span>

            <span class="php-syntax-code"></span>

            <span class="php-syntax-code">} catch(PDOException $e) {</span>

            <span class="php-syntax-code">&nbsp;// întoarce tranzacția dacă ceva a eșuat</span>

            <span class="php-syntax-code">&nbsp;$conn->rollback();</span>

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