<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>AI - Aplicatii Internet</title>
    <link href="reusable_tut_php.css" rel="stylesheet" />
</head>

<?php include ("header.php"); ?>
<body>
    <div class="main-content">
      <div class="side-navbar-container">
			  <?php include('sidenavbar.php'); ?>
      </div>

      <div class="main-content-container">
            <div class="presentation-title">Operatori PHP</div>

            <div class="next-previous-buttons-container">
              <?php include ("next_previous_buttons.php"); ?>
            </div>

            <div class="info-container">
              <div class="content-box">
                <div class="info-content-container">
                  <h1>Ce este un operator?</h1>

                  <p class="info-content">Operațiile asupra variabilelor și valorilor se efectuează cu ajutorul <b>operatorilor.</b></p>
                  
                  <p class="info-content">Următoarele categorii descriu diferitele tipuri de operatori PHP:</p>
                
                  <li class="info-content">Operatori aritmetici</li>

                  <li class="info-content">Operatori de atribuire</li>

                  <li class="info-content">Operatori pe biti</li>

                  <li class="info-content">Operatori de comparare</li>

                  <li class="info-content">Operatori de incrementare/decrementare</li>

                  <li class="info-content">Operatori logici</li>

                  <li class="info-content">Operatori de șiruri de caractere</li>

                  <li class="info-content">Operatori de vectori</li>

                  <li class="info-content">Operatori de atribuire condiționată</li>

                  <li class="info-content">Operatori de execuție</li>

                  <p class="info-content">În plus, putem clasifica operatorii în locul operanzilor. Aceștia pot fi împărțiți în 3 categorii:</p>

                  <li class="info-content">Operatorii unari, care operează asupra unui singur operand, includ ++, -- etc.</li>

                  <li class="info-content">Operatori binari, care operează pe doi operanzi și includ operatorii binari +, -, * și /.</li>

                  <li class="info-content">Operatorii ternari sunt cei care funcționează pe trei operanzi, cum ar fi "?:".</li>

                  <h1>Operatori aritmetici</h1>

                  <p class="info-content">Operatorii aritmetici PHP sunt utilizați cu date numerice pentru a efectua operații matematice de bază, cum ar fi adunarea, scăderea, înmulțirea etc.</p>
  
                  <div class="table-container">
                    <table>
                      <tr>
                          <th>Operator</th>
                          <th>Nume</th>
                          <th>Exemplu</th>
                          <th>Rezultat</th>
                      </tr>
                      <tr>
                          <td>+</td>
                          <td>Adunare</td>
                          <td>$a + $b</td>
                          <td>Suma operanzilor</td>
                      </tr>
                      <tr>
                          <td>-</td>
                          <td>Scădere</td>
                          <td>$a - $b</td>
                          <td>Diferenta operanzilor</td>
                      </tr>
                      <tr>
                          <td>*</td>
                          <td>Înmulțire</td>
                          <td>$a * $b</td>
                          <td>Produsul operanzilor</td>
                      </tr>
                      <tr>
                          <td>/</td>
                          <td>Diviziunea</td>
                          <td>$a / $b</td>
                          <td>Câtul impartirii operanzilor</td>
                      </tr>
                      <tr>
                          <td>%</td>
                          <td>Modulo</td>
                          <td>$a % $b</td>
                          <td>Restul impartirii operanzilor</td>
                      </tr>
                      <tr>
                          <td>**</td>
                          <td>Exponential</td>
                          <td>$a ** $b</td>
                          <td>$a ridicat la puterea $b</td>
                      </tr>
                  </table>
                  </div>

                  <hr>

                  <h1>Operatori de atribuire</h1>

                  <p class="info-content">Diferitelor variabile li se pot atribui valori cu ajutorul operatorilor de atribuire. "=" este cel mai simplu operator de atribuire.</p>

                  <div class="table-container">
                    <table>
                      <tr>
                          <th>Operator</th>
                          <th>Nume</th>
                          <th>Exemplu</th>
                          <th>Rezultat</th>
                      </tr>
                      <tr>
                          <td>=</td>
                          <td>Atribuie</td>
                          <td>$a = $b</td>
                          <td>Valoarea operandului din dreapta este atribuită operandului din stânga.</td>
                      </tr>
                      <tr>
                          <td>+=</td>
                          <td>Adăugați, apoi atribuiți</td>
                          <td>$a += $b</td>
                          <td>Adunare la fel ca $a = $a + $b</td>
                      </tr>
                      <tr>
                          <td>-=</td>
                          <td>Scădeți apoi atribuiți</td>
                          <td>$a -= $b</td>
                          <td>Scădere la fel ca $a = $a - $b</td>
                      </tr>
                      <tr>
                          <td>*=</td>
                          <td>Înmulțiți și apoi atribuiți</td>
                          <td>$a *= $b</td>
                          <td>Înmulțire la fel ca $a = $a * $b</td>
                      </tr>
                      <tr>
                          <td>/=</td>
                          <td>Câtul impartirii și apoi atribuiți</td>
                          <td>$a /= $b</td>
                          <td>Câtul impartirii la fel ca $a = $a / $b</td>
                      </tr>
                      <tr>
                          <td>%=</td>
                          <td>Restul impartirii și apoi atribuiți</td>
                          <td>$a </td>
                          <td>Restul impartirii la fel ca $a = $a % $b</td>
                      </tr>
                    </table>
                  </div>

                  <h1>Operatori pe biti</h1>

                  <p class="info-content">Operațiile la nivel de bit asupra operanzilor se efectuează cu ajutorul operatorilor bitwise. Acești operatori permit analiza și manipularea anumitor biți de numere întregi.</p>

                  <div class="table-container">
                    <table>
                      <tr>
                          <th>Operator</th>
                          <th>Nume</th>
                          <th>Exemplu</th>
                          <th>Rezultat</th>
                      </tr>
                      <tr>
                          <td>&</td>
                          <td>Și</td>
                          <td>$a & $b	</td>
                          <td>Biții care au valoarea 1 atât în $a, cât și în $b sunt setați la 1, în caz contrar la 0</td>
                      </tr>
                      <tr>
                          <td>|</td>
                          <td>Sau (Inclusiv sau)</td>
                          <td>$a | $b</td>
                          <td>Bitii care sunt 1 în $a sau $b sunt setați la 1</td>
                      </tr>
                      <tr>
                          <td>^</td>
                          <td>Xor (Exclusiv sau)</td>
                          <td>$a ^ $b</td>
                          <td>Biții care au valoarea 1 fie în $a, fie în $b sunt setați la 0</td>
                      </tr>
                      <tr>
                          <td>~</td>
                          <td>Not (negat)</td>
                          <td>~$a</td>
                          <td>Biții care sunt 1 setează la 0 și biții care sunt 0 setează la 1</td>
                      </tr>
                      <tr>
                          <td><<</td>
                          <td>Deplasare la stânga</td>
                          <td>$a << $b</td>
                          <td>Decalarea la stânga a biților din operandul $a cu un număr de locuri $b</td>
                      </tr>
                      <tr>
                          <td>>></td>
                          <td>Restul impartirii și apoi atribuiți</td>
                          <td>$a >> $b</td>
                          <td>Decalarea la dreapta a biților din operandul $a cu un număr de locuri $b</td>
                      </tr>
                    </table>
                  </div>

                  <h1>Operatori de comparare</h1>

                  <p class="info-content">Operatorii de comparare permit compararea a două valori, cum ar fi șiruri de caractere sau numere. Următorii operatori de comparație sunt enumerați mai jos în tabel:</p>

                  <div class="table-container">
                    <table>
                      <tr>
                          <th>Operator</th>
                          <th>Nume</th>
                          <th>Exemplu</th>
                          <th>Rezultat</th>
                      </tr>
                      <tr>
                          <td>==</td>
                          <td>Egalitate</td>
                          <td>$a == $b</td>
                          <td>Returnează TRUE dacă $a este egal cu $b</td>
                      </tr>
                      <tr>
                          <td>===</td>
                          <td>Identic</td>
                          <td>$a === $b</td>
                          <td>Se returnează TRUE dacă $a este egal cu $b, iar acestea sunt de același tip de date</td>
                      </tr>
                      <tr>
                          <td>!==</td>
                          <td>Nu sunt identice</td>
                          <td>$a !== $b</td>
                          <td>Se returnează TRUE dacă $a nu este egal cu $b și dacă acestea nu sunt de același tip de date</td>
                      </tr>
                      <tr>
                          <td>!=</td>
                          <td>Nu este egal</td>
                          <td>$a != $b</td>
                          <td>Returnează TRUE dacă $a nu este egal cu $b</td>
                      </tr>
                      <tr>
                          <td><></td>
                          <td>Nu este egal</td>
                          <td>$a <> $b</td>
                          <td>Returnează TRUE dacă $a nu este egal cu $b</td>
                      </tr>
                      <tr>
                          <td><</td>
                          <td>Mai puțin decât</td>
                          <td>$a < $b</td>
                          <td>Returnează TRUE dacă $a este mai mic decât $b</td>
                      </tr>
                      <tr>
                          <td>></td>
                          <td>Mai mare decât</td>
                          <td>$a > $b</td>
                          <td>Returnează TRUE dacă $a este mai mare decât $b</td>
                      </tr>
                      <tr>
                          <td><=</td>
                          <td>Mai mic sau egal decât</td>
                          <td>$a <= $b</td>
                          <td>Returnează TRUE dacă $a este mai mic sau egal cu $b</td>
                      </tr>
                      <tr>
                          <td>>=</td>
                          <td>Mai mare sau egal decât</td>
                          <td>$a >= $b</td>
                          <td>Returnează TRUE dacă $a este mai mare sau egal cu $b</td>
                      </tr>
                      <tr>
                          <td><=></td>
                          <td>Nava spațială (Spaceship)</td>
                          <td>$a <=> $b</td>
                          <td>Returnează -1 dacă $a este mai mic decât $b <br> Se returnează 0 dacă $a este egal cu $b <br>Se returnează 1 dacă $a este mai mare decât $b</td>
                      </tr>
                    </table>
                  </div>


                  <h1>Operatori de incrementare/decrementare</h1>

                  <p class="info-content">Valoarea unei variabile poate fi mărită sau micșorată cu ajutorul operatorilor de creștere și descreștere.</p>

                  <div class="table-container">
                    <table>
                      <tr>
                          <th>Operator</th>
                          <th>Nume</th>
                          <th>Exemplu</th>
                          <th>Rezultat</th>
                      </tr>
                      <tr>
                          <td rowspan="2">++</td>
                          <td rowspan="2">Incrementare</td>
                          <td>++$a</td>
                          <td>Crește valoarea lui $a cu unu, apoi returnează $a</td>
                      </tr>
                      <tr>
                          <td>$a++</td>
                          <td>Returnează $a, apoi crește valoarea lui $a cu unu</td>
                      </tr>
                      <tr>
                          <td rowspan="2">--</td>
                          <td rowspan="2">Decrementare</td>
                          <td>--$a</td>
                          <td>Scade valoarea lui $a cu unu, apoi returnează $a</td>
                      </tr>
                      <tr>
                          <td>$a--</td>
                          <td>Returnează $a, apoi scade valoarea lui $a cu unu</td>
                      </tr>
                    </table>
                  </div>

                  <h1>Operatori logici</h1>

                  <p class="info-content">Operațiile la nivel de bit asupra operanzilor se efectuează cu ajutorul operatorilor logici. Acești operatori permit analiza și manipularea anumitor biți de numere întregi.</p>

                  <div class="table-container">
                    <table>
                      <tr>
                          <th>Operator</th>
                          <th>Nume</th>
                          <th>Exemplu</th>
                          <th>Rezultat</th>
                      </tr>
                      <tr>
                          <td>and</td>
                          <td>Și</td>
                          <td>$a and $b</td>
                          <td>Returnează TRUE dacă atât $a cât și $b sunt adevărate</td>
                      </tr>
                      <tr>
                          <td>Or</td>
                          <td>Sau</td>
                          <td>$a or $b</td>
                          <td>Returnează TRUE dacă fie $a, fie $b este adevărat</td>
                      </tr>
                      <tr>
                          <td>xor</td>
                          <td>Xor (Exclusiv sau)</td>
                          <td>$a xor $b</td>
                          <td>Întoarce TRUE dacă fie $, fie $b este adevărat, dar nu ambele.</td>
                      </tr>
                      <tr>
                          <td>!</td>
                          <td>Nu este egal</td>
                          <td>!$a</td>
                          <td>Returnează TRUE dacă $a nu este egal cu $b</td>
                      </tr>
                      <tr>
                          <td>&&</td>
                          <td>Nu este egal</td>
                          <td>$a && $b</td>
                          <td>Returnează TRUE dacă $a nu este egal cu $b</td>
                      </tr>
                      <tr>
                          <td>||</td>
                          <td>Mai puțin decât</td>
                          <td>$a || $b</td>
                          <td>Returnează TRUE dacă $a este mai mic decât $b</td>
                      </tr>
                    </table>
                  </div>

                  <h1>Operatori de șiruri de caractere</h1>

                  <p class="info-content">Pentru a opera cu șiruri de caractere, se utilizează operatorii de șiruri de caractere. Următorii sunt cei doi operatori de șiruri de caractere disponibili în PHP:</p>

                  <div class="table-container">
                    <table>
                      <tr>
                          <th>Operator</th>
                          <th>Nume</th>
                          <th>Exemplu</th>
                          <th>Rezultat</th>
                      </tr>
                      <tr>
                          <td>.</td>
                          <td>Concatenare</td>
                          <td>$a . $b</td>
                          <td>Concatenează atât $a cât și $b</td>
                      </tr>
                      <tr>
                          <td>.=</td>
                          <td>Concatenarea și atribuirea</td>
                          <td>$a .= $b</td>
                          <td>Mai întâi concatenați $a și $b, apoi atribuiți șirul concatenat la $a, de exemplu: $a = $a . $b</td>
                      </tr>
                    </table>
                  </div>

                  <h1>Operatori de vectori</h1>

                  <p class="info-content">În cazul unui vector, se utilizează operatorii de vectori. Acești operatori sunt folosiți în principal pentru a compara valorile unui vector:</p>

                  <div class="table-container">
                    <table>
                      <tr>
                          <th>Operator</th>
                          <th>Nume</th>
                          <th>Exemplu</th>
                          <th>Rezultat</th>
                      </tr>
                      <tr>
                          <td>+</td>
                          <td>Uniune</td>
                          <td>$a + $b</td>
                          <td>Uniunea dintre $a și $b</td>
                      </tr>
                      <tr>
                          <td>==</td>
                          <td>Egalitate</td>
                          <td>$a == $b</td>
                          <td>Se returnează TRUE dacă $a și $b au aceeași pereche cheie/valoare</td>
                      </tr>
                      <tr>
                          <td>!=</td>
                          <td>Inegalitate</td>
                          <td>$a != $b</td>
                          <td>Returnează TRUE dacă $a nu este egal cu $b</td>
                      </tr>
                      <tr>
                          <td>===</td>
                          <td>Identic</td>
                          <td>$a === $b</td>
                          <td>Se returnează TRUE dacă $a și $b au aceeași pereche cheie/valoare de același tip și în aceeași ordine</td>
                      </tr>
                      <tr>
                          <td>!==</td>
                          <td>Neidentic</td>
                          <td>$a !== $b</td>
                          <td>Se returnează TRUE dacă $a nu este identic cu $b</td>
                      </tr>
                      <tr>
                          <td><></td>
                          <td>Inegalitate</td>
                          <td>$a <> $b</td>
                          <td>Returnează TRUE dacă $a nu este egal cu $b</td>
                      </tr>
                    </table>
                  </div>

                  <h1>Operatori de atribuire condiționată</h1>

                  <p class="info-content">Operatorii de atribuire condiționată din PHP sunt utilizați pentru a seta o valoare în funcție de anumite condiții:</p>

                  <div class="table-container">
                    <table>
                      <tr>
                          <th>Operator</th>
                          <th>Nume</th>
                          <th>Exemplu</th>
                          <th>Rezultat</th>
                      </tr>
                      <tr>
                          <td>?:</td>
                          <td>Ternar</td>
                          <td>$a = $b ? $c: $d</td>
                          <td>Returnează valoarea lui $a. Valoarea lui $a este $c dacă $b = TRUE. Valoarea lui $x este $d dacă $b = FALSE.</td>
                      </tr>
                      <tr>
                          <td>??</td>
                          <td>Coalescență nulă</td>
                          <td>$a = $b ?? $c</td>
                          <td>Returnează valoarea lui $x. Valoarea lui $x este $b dacă $b există și nu este NULL. În cazul în care $b nu există sau este NULL, valoarea lui $x este $c. Introdus în PHP 7</td>
                      </tr>
                    </table>
                  </div>

                  <h1>Operatori de execuție</h1>

                  <p class="info-content">PHP are un operator de execuție backticks (``). Conținutul backtick-urilor este procesat de PHP ca o comandă shell. Operatorul de execuție și shell_exec() dau același rezultat.</p>

                  <div class="table-container">
                    <table>
                      <tr>
                          <th>Operator</th>
                          <th>Nume</th>
                          <th>Exemplu</th>
                          <th>Rezultat</th>
                      </tr>
                      <tr>
                          <td>``</td>
                          <td>Backticks</td>
                          <td>echo `dir`;	</td>
                          <td>Execută comanda shell și returnează rezultatul. Aici, se vor afișa directoarele disponibile în folderul curent.</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="info-content-container">

                  <h2 class="info-content">Puteti testa mai jos ce a fost prezentat pana acum</h2>

                  <div data-pym-src='https://www.jdoodle.com/plugin' data-language="php"><span><</span>?php
?>
</div>
                    <script src="https://www.jdoodle.com/assets/jdoodle-pym.min.js" type="text/javascript"></script>
                  </div>
              </div>
            </div>
        </div>

    </div>
</body>

<?php	include ("footer.php"); ?>
</html>
