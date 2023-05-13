<?php
//dezactiveaza avertismentimentele de tip warning si notice (a se folosi doar daca nu sunt facute initializari)
//error_reporting (E_ALL ^ E_NOTICE); 

//func.php -> includere a tuturor functiilor si initializarilor
	include('func.php');

/////////////////////////////////////MENIU/////////////////////////////////////
//$pag -> adauga/modifica/sterge din meniu
	$pag = array(
				 'index',
				 'curs',
				 'laborator',
				 'evaluare',
				 'utile',
				 'contact',
				 'tut_JS',
				 'tut_PHP'
				 );

/////////////////////////////////////ANUNTURI/////////////////////////////////////
//$anunturi -> adauga/modifica/sterge anunturile
	$anunturi = array(
//					'<u>11 septembrie 2015:</u><br>Reexaminarea la disciplina AI a fost programata pentru 16.09.2015. Pentru mai multe detalli, vizitati sectiunea <a href="evaluare.php" title="Evaluare">EVALUARE</a>.',
//					'<u>27 iunie 2012:</u><br>Au fost afisate rezultatele finale la reexaminarea la AI din data de 27.06.2012. Pentru a le vizualiza, vizitati sectiunea <a href="evaluare.php" title="Evaluare">EVALUARE</a>.',
//					'<u>20 iunie 2013:</u><br>La cererea studentilor, re-examinarea la AI este reprogramata de pe data de 28.06.2013 pe data de 27.06.2013.',
//					'<u>19 iunie 2013:</u><br>Au fost afisate rezultatele finale la restanta la AI din data de 18.06.2013. Pentru a le vizualiza, vizitati sectiunea <a href="evaluare.php" title="Evaluare">EVALUARE</a>. Orice nelamuriri/neconcordante le puteti anunta pe email, pana miercuri, 19.06.2013, ora 16.',
//					'<u>14 iunie 2013:</u><br>Au fost afisate rezultatele finale la examenul din data de 12.06.2013. Pentru a le vizualiza, vizitati sectiunea <a href="evaluare.php" title="Evaluare">EVALUARE</a>. Orice nelamuriri/neconcordante le puteti anunta pe email, pana simbata, 15.06.2013, ora 10.',
//					'<u>24 iunie 2019:</u><br>Au fost afisate rezultatele la reexaminarea din 24.06.2019. Pentru a le vizualiza, vizitati sectiunea <a href="evaluare.php" title="Evaluare">EVALUARE</a>.',
//					'<u>16 iunie 2015:</u><br>Reexaminarea la disciplina AI a fost programata pentru 23.06.2015. Pentru mai multe detalli, vizitati sectiunea <a href="evaluare.php" title="Evaluare">EVALUARE</a>.',
//					'<u>23 iunie 2019:</u><br>Au fost afisate rezultatele la restanta din 23.06.2019. Pentru a le vizualiza, vizitati sectiunea <a href="evaluare.php" title="Evaluare">EVALUARE</a>.',
//					'<u>18 iunie 2019:</u><br>Au fost afisate rezultatele la examenul la disciplina AI. Pentru a le vizualiza, vizitati sectiunea <a href="evaluare.php" title="Evaluare">EVALUARE</a>.',
//					'<u>3 iunie 2018:</u><br>Rezultatele semestriale la disciplina AI au fost afisate. Pentru mai multe detalli, vizitati sectiunea <a href="evaluare.php" title="Evaluare">EVALUARE</a>.',				
//					'<u>8 iunie 2016:</u><br>Restanta la disciplina AI a fost reprogramata pentru 13.06.2016. Pentru mai multe detalli, vizitati sectiunea <a href="evaluare.php" title="Evaluare">EVALUARE</a>.'				
				  );

/////////////////////////////////////HOME/////////////////////////////////////
//$tag -> adauga/modifica/sterge pozele din galerie
	$tag = array(
			 'Pagina 1','Pagina 2','Pagina 3',
			 'Pagina 4','Pagina 5'
			 );

/////////////////////////////////////CURS/////////////////////////////////////
//$temeC -> adauga/modifica/sterge temele de la curs
	$temeC = array(
					1,'27.10.2009',NULL,
					2,'10.11.2009',NULL,
//					3,'25.11.2009','Implementați în C funcțiile 1 și 3  ale driverului PCL812',
					3,'25.11.2009',NULL,
					4,'08.12.2009',NULL
				  );

/////////////////////////////////////LABORATOR/////////////////////////////////////
//$lab -> adauga/modifica/sterge laboratoarele
//	$lab = array(
//					'Introducere',
//					'Limbajul HTML (Introducere)',
//					'Limbajul HTML (Legături, imagini, liste, tabele şi cadre)',
//					'Limbajul HTML (Formulare)',
//					'Stiluri cascadate (CSS)',
//					'Stiluri cascadate (CSS)',
//					'Prezentare tema',
//					'Limbajul Java Script (I)',
//					'Limbajul Java Script (II)',
//					'Limbajul Java Script (III)',
//					'Limbajul PHP (I)',
//					'Limbajul PHP (II)',
//					'Limbajul PHP (III)',
//					'Prezentare tema',
//					NULL
//			  	);

	$lab = array(
					'Introducere',
					'Laborator 1',
					'Laborator 2',
					'Laborator 3',
					'Laborator 4',
					'Laborator 5',
					'Prezentare tema',
					'Laborator 6',
					'Laborator 7',
					'Laborator 8',
					'Laborator 9',
					'Laborator 10',
					'Laborator 11',
					'Prezentare tema',
					NULL
			  	);
	
//$temeL -> adauga/modifica/sterge temele de la laborator
//	$temeL = array(
//				   1,3,	// numarul temei = numarul laboratorului, numarul problemei
//				   2,4,
//				   3,5,
//				   4,6,
//				   5,4,
//				   6,3,
//				   8,3,
//				   9,3
//					);
	
//$testLab -> fisierul cu notele de la testul 1
	//$testlab = 'Note test laborator.pdf';
	
/////////////////////////////////////EVALUARE/////////////////////////////////////
//$verificari -> adauga/modifica/sterge verificarile de la testul 2
//	$verificari = array (
//						  'arhitectura IBM PC/întreruperi/BIOS, biblioteca Dos.H, tehnici de programare in intreruperi',
//						  programare(29,10,2009,9,00,'AC01'),
//						  'programare 8253 si 8259',
//						  programare(13,11,2009,9,00,'AC01'),
//						  'programare 8259,  Achizitii de date - generalitati, programare DAC,  programare PCL812 (la nivel registri)',
//						  programare(26,11,2009,13,00,'AC01'),
//						  'programare PCL812 (la nivel registri si folosind driver)',
//						  programare(10,12,2009,13,00,'AC01'),
//						  'achiziții de date, placa ATMIO16E10 - achiziții AD',	
//						  programare(10,12,2008,16,00,'AC01')					  
//						  );
//$ProgTF -> adauga/modifica/sterge data si ora de testul 3
	//$ProgTF = programare(13,6,2019,12,0,'AC01');
	
//$saliEx -> adauga/modifica/sterge sali pentru examen
	$saliEx = array('AC01','AC02','AC03');
	
//$ProgEx -> adauga/modifica/sterge data si ora de examen
	//$ProgEx = programare(13,6,2019,12,00,"AC01-AC02");
	//$ProgEx2 = programare(16,6,2015,9,00,"AC3-1");
//$ProgReEx -> adauga/modifica/sterge data si ora de re-examimare
	//$ProgRest = programare(23,6,2019,12,00,"A1-9");

//$ProgReEx -> adauga/modifica/sterge data si ora de re-examimare
	//$ProgReEx = programare(24,6,2019,11,00,"A1-9");

//$ProgReEx -> adauga/modifica/sterge data si ora de re-examimare
	//$ProgReExSept = programare(6,9,2017,11,00,"AC01");
	
//$semestru -> fisierul cu media testelor si echivalarile
	//$semestru = 'Rez_Sem.pdf';

//$examen -> fisierul cu notele de la examen
	//$examen = 'Rez_examen.pdf';
	//$examen2 = 'Rez_examen_2.pdf';
	//$examen3 = 'Rez_examen.pdf';
	
//$examen -> fisierul cu notele din restanta
	//$restanta = 'Rez_restante.pdf';

//$examen -> fisierul cu notele din restanta
	//$reexam = 'Rez_reexam.pdf';

//$examen -> fisierul cu notele din restanta
	//$reexamsept = 'Rez_reexam_sept.pdf';
	
/////////////////////////////////////UTILE/////////////////////////////////////
//$thelp -> fisierul cu THelp
	$thelp4 = Thelp4('TeachHelp4.ZIP');
	$thelp6 = Thelp6('TeachHelp6.ZIP');
	$ziplab = ZipLab('lab_2009-2010.ZIP');
	$zipcurs = ZipCurs('curs_2009-2010.ZIP');
	
//$Uimg -> numele, poza mare, poza mica, lungimea si inaltimea imaginei din dreapta
	$Uimg = img('Lift','lift.jpg','lift.png','100%',480);
	
/////////////////////////////////////CONTACT/////////////////////////////////////
//$Cimg-> numele, poza mare, poza mica, lungimea si inaltimea imaginei din dreapta
	$Cimg = img('CONTACT','email.png','email.png',200,150);

//$$L -> email, nume cu titulatura, nume si prenume al titularului de curs
	$L = contact('cbraescu@ac.tuiasi.ro',' Ş.l.dr.ing. Catalin Braescu ','Catalin Braescu');
	
//$$A -> email, nume cu titulatura, nume si prenume asistent lucrari de laborator
	//$A = contact('apricop@ac.tuiasi.ro',' Conf.dr.ing. Andrei Pricop ','Andrei Pricop');
	
//$$C -> email, nume cu titulatura, nume si prenume asistent lucrari de laborator
	//$C = contact('cbraescu@ac.tuiasi.ro',' Asist.drd.ing. Florin-Cătălin Brăescu ','Florin-Cătălin Brăescu');

//$titular si $asist -> numele rubricilor de la Contact
	$titular = 'Titular disciplină';
	//$asist = 'Titular sedinte de laborator';

?>