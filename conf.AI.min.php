<?php
//error_reporting (E_ALL ^ E_NOTICE); //dezactiveaza avertismentimentele de tip warning si notice (a se folosi doar daca nu sunt facute initializari)
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
				 'contact'
				 );

/*-----------------------------------------------------------------------------------------------------------
/////////////////////////////////////ANUNTURI/////////////////////////////////////

//$anunturi -> adauga/modifica/sterge anunturile

	$anunturi = array(
					'Au fost afișate rezultatele la examenul din data de 7 februarie 2009.',
					'Cei care sunt de acord cu echivalările propuse trebuie să își anunțe acceptul prin email până pe 6 februarie 2009 (la adresa <a href="mailto:lferaru@ac.tuiasi.ro" title="Lavinia Ferariu">lferaru@ac.tuiasi.ro</a>).',
					'Au fost afișate notele obținute în timpul semestrului.',
					'Pentru rezultate la teste vizitați secțiunea <a href="evaluare.php" title="Evaluare">EVALUARE</a>'
				  );


/////////////////////////////////////HOME/////////////////////////////////////

//$tag -> adauga/modifica/sterge pozele din galerie

	$tag = array(
			 'Osciloscop digital Tektronix TDS1002B','Osciloscop digital Tektronix TDS1002B','Osciloscop digital Tektronix TDS1002B',
			 'Exemplu cod 1','Exemplu cod 2','Aplicație de timp real',
			 'Calculator Analogic Comdyna GP-6','Calculator Analogic Comdyna GP-6','Calculator Analogic Comdyna GP-6'
			 );


/////////////////////////////////////CURS/////////////////////////////////////

//$temeC -> adauga/modifica/sterge temele de la curs

	$temeC = array(
					1,'28.10.2008',NULL,
					2,'11.11.2008',NULL,
					3,'25.11.2008','Implementați în C funcțiile 1 și 3  ale driverului PCL812',
					4,'16.12.2008',NULL
				  );


/////////////////////////////////////LABORATOR/////////////////////////////////////

//$lab -> adauga/modifica/sterge laboratoarele

	$lab = array(
					'Facilități C – recapitulare',
					'Facilități C pentru generarea întreruperilor',
					'Instalarea în C a unei rutine proprii pentru tratarea întreruperii de tastatură',
					'Tratarea în C a întreruperii de ceas',
					'Programarea circuitelor 8253 și 8259',
					'Aplicații de timp real bazate pe tehnici de programare în întreruperi',
					NULL,
					'Programarea plăcii PCL 812 – la nivel de regiștrii',
					'Programarea plăcii PCL 812 – folosind driverul Advantech',
					'Programarea plăcii NI ATMIO16E10 – achiziții AD sincrone',
					'Programarea plăcii NI ATMIO16E10 – achiziții AD asincrone',
					'Programarea plăcii NI ATMIO16E10 – achiziții DA',
					'Programarea plăcii NI ATMIO16E10 – achiziții dublu bufferate'
			  	);
	
//$temeL -> adauga/modifica/sterge temele de la laborator
	$temeL = array(
				   1,3,
				   3,4,
				   4,5,
				   5,6,
				   6,4,
				   7,3,
				   8,3,
				   9,3
					);
	
//$testLab -> fisierul cu notele de la testul 1
	$testlab = 'Note test laborator.pdf';
	
	
/////////////////////////////////////EVALUARE/////////////////////////////////////

//$verificari -> adauga/modifica/sterge verificarile de la testul 2

	$verificari = array (
						  'facilități C, arhitectura IBM PC/întreruperi/BIOS, Dos.H',programare(15,10,2008,16,00,'AC01'),
						  'instalarea unor rutine proprii pentru tratarea unor întreruperi, tehnici de programare în întreruperi, Process.h', programare(29,10,2008,16,0,'AC01'),
						  'optimizarea codurilor C, programare 8253 și 8259',programare(12,11,2008,16,00,'AC01'),
						  'achiziții de date, placa DAC, placa PCL812',programare(26,11,2008,16,00,'AC01'),
						  'achiziții de date, placa ATMIO16E10 - achiziții AD',	programare(10,12,2008,16,00,'AC01')					  
						  );
//$ProgTF -> adauga/modifica/sterge data si ora de testul 3
	$ProgTF = programare(9,1,2009,0,0,'AC01');
	
//$saliEx -> adauga/modifica/sterge sali pentru examen
	$saliEx = array('AC01','AC02','AC03');
	
//$ProgEx -> adauga/modifica/sterge data si ora de examen
	$ProgEx = programare(7,2,2009,14,00,$saliEx);

//$semestru -> fisierul cu media testelor si echivalarile
	$semestru = 'Rez_Sem_anIV.pdf';

//$examen -> fisierul cu notele de la examen
	$examen = 'Rez_examen_anIV.pdf';
	
//$examen -> fisierul cu notele din restanta
	$restanta = 'Rez_restante2009.pdf';
	
	
/////////////////////////////////////UTILE/////////////////////////////////////

//$thelp -> fisierul cu THelp
	$thelp = Thelp('HELP4.0.ZIP');
	
//$Uimg -> numele, poza mare, poza mica, lungimea si inaltimea imaginei din dreapta
	$Uimg = img('Lift','lift.jpg','lift.png','100%',480);
	

/////////////////////////////////////CONTACT/////////////////////////////////////

//$Cimg-> numele, poza mare, poza mica, lungimea si inaltimea imaginei din dreapta
	$Cimg = img('CONTACT','email.png','email.png',200,150);

//$$L -> email, nume cu titulatura, nume si prenume al titularului de curs
	$L = contact('lferaru@ac.tuiasi.ro','conf. dr. ing. Ferariu Lavinia','Lavinia Ferariu');
	
//$$A -> email, nume cu titulatura, nume si prenume asistent lucrari de laborator
	$A = contact('erika_best10@yahoo.com','drd. ing. Patelli Alina','Alina Patelli');
	
//$$C -> email, nume cu titulatura, nume si prenume asistent lucrari de laborator
	$C = contact('cbraescu@ac.tuiasi.ro','asist. ing. Brăescu Florin-Cătălin','Florin-Cătălin Brăescu');
---------------------------------------------------------------------------------------*/
//$titular si $asist -> numele rubricilor de la Contact
	$titular = 'Titular disciplină';
	$asist = 'Asistenți lucrări de laborator';

?>