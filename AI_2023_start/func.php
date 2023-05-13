<?php

/////////////////////////////////////FUNCTII/////////////////////////////////////

//conversie caractere cu diacritice în format utf-8
//ex. conv2utf8('sir'); sau conv2utf8("sir");
function conv2utf8($str) {
   return mb_convert_encoding($str, "HTML-ENTITIES" , "auto");
} 

//returneaza contactele dupa email si numele cu titulatura
//ex. contact("patr@ac.tuiasi.ro","conf. dr. ing. Ferariu Lavinia","Lavinia Ferariu");
function contact($mail,$nume,$title) {
	return conv2utf8('<li><b><font size="2"><a href="mailto:'.$mail.'" title="'.$title.'">'.$mail.'</a> ('.$nume.')</font></b></li>');
}

//returneaza imaginile din dreapta dupa titlu, imaginea mare, imaginea mica, lungime si inaltime
//ex. img("Titlu","imagine_mare.jpg","imagine_mica.jpg",200,300); sau img("Imagine1","pic_mare.jpg","pic_mica.jpg",100%,100%);
function img($title,$path1,$path2,$width,$height) {
	return '<a class="pic" href="images/Pics/'.$path1.'"><img width="'.$width.'" height="'.$height.'" src="images/Pics/'.$path2.'" alt="'.conv2utf8($title).'" /></a>';
}

//returneaza o legatura catre Thelp, daca exista
//ex. Thelp("THELP.ZIP");
function THelp4($path){
	if (file_exists("Doc/utile/$path"))
		return conv2utf8('<p><img src="images/zip.png" alt="Suport THelp4.0 în format ZIP" />&nbsp;<a href="Doc/utile/'.$path.'" title="THelp" target="_blank">Descarcă TeachHelp4.0</a></p>');
	else return NULL;
}
function THelp6($path){
	if (file_exists("Doc/utile/$path"))
		return conv2utf8('<p><img src="images/zip.png" alt="Suport THelp6.0 în format ZIP" />&nbsp;<a href="Doc/utile/'.$path.'" title="THelp" target="_blank">Descarcă TeachHelp6.0</a></p>');
	else return NULL;
}
function ZipLab($path){
	if (file_exists("Doc/utile/$path"))
		return conv2utf8('<p><img src="images/zip.png" alt="Arhiva referate laborator în format ZIP" />&nbsp;<a href="Doc/utile/'.$path.'" title="ZipLab" target="_blank">Descarcă arhiva laboratoare</a></p>');
	else return NULL;
}
function ZipCurs($path){
	if (file_exists("Doc/utile/$path"))
		return conv2utf8('<p><img src="images/zip.png" alt="Arhiva cursuri în format ZIP" />&nbsp;<a href="Doc/utile/'.$path.'" title="ZipCursTHelp" target="_blank">Descarcă arhiva cursuri</a></p>');
	else return NULL;
}


//returneaza o legatura catre un laborator existent, in caz contrar returneaza doar numele lucrarii de lab
//ex. LAB(1,"Numele lucrarii de laborator");
function LAB($i,$l) {
	if (file_exists("Doc/laborator/LUCRAREA_$i.pdf"))
		 return conv2utf8('<li><p><img src="images/pdf.png" alt="Suport laborator în format PDF" />&nbsp;<a target="_blank" href="Doc/laborator/LUCRAREA_'.$i.'.pdf" title="Lucrarea '.$i.'">'.$l.'</a><br /></p></li>');
	else if (file_exists("Doc/laborator/LUCRAREA_$i.zip"))
			return conv2utf8('<li><p><img src="images/pdf.png" alt="Suport laborator în format ZIP" />&nbsp;<a target="_blank" href="Doc/laborator/LUCRAREA_'.$i.'.zip" title="Lucrarea '.$i.'">'.$l.'</a><br /></p></li>');
	else return conv2utf8('<li><p>'.$l.'<br /></p></li>');
}

//returneaza o legatura catre un curs existent(daca nu exista calea fizica, atunci cursul este ignorat), in caz contrar returneaza doar numele cursului
//ex. Curs(2,"curs2.pdf","Numele cursului");
function Curs($nr,$path,$name) {
	if ($path != NULL) {
	if (file_exists('Doc/curs/'.$path))
		return conv2utf8('<img src="images/pdf.png" alt="Suport curs în format PDF" />&nbsp;<a target="_blank" href="Doc/curs/'.$path.'" title="Curs '.$nr.'">'.conv2utf8($name).'</a>');	
	else return conv2utf8('&nbsp;<a title="Curs '.$nr.'">'.$name.'</a>');
	}
}

//returneaza o legatura catre un curs auxiliar sau al unor exemple, iar daca nu exista calea fizica, atunci fisierele vor fi ignorate
//ex. AuxEx("exemplu.zip","tipul de  exemplu","(exemplu)");
function AuxEx($path,$title,$name){
	if ($path != NULL) 
		 return conv2utf8('&nbsp;&nbsp;&nbsp;(<a target="_blank" href="Doc/'.$path.'" title="'.$title.'">'.$name.'</a>)');
}

//returneaza o legatura catre o tema de la curs, in caz contrar returneaza doar numele temei si/sau rezultatele la tema
//ex. temeCurs(4,'21.11.2009',"Cerinta temei nr 4");
function temeCurs($i,$termen,$tema){
	
	$pathTema = 'Doc/evaluare/Tema'.$i.'_curs.pdf';
	$pathRez = 'Doc/evaluare/Rez_Tema'.$i.'_curs.pdf';

	if (file_exists($pathTema))
		$tc = '<br /><br />
                    <a href="'.$pathTema.'" title="Tema '.$i.'" target="_blank"><strong>Tema '.$i.'</strong></a><br />';
	else $tc = '<br /><br />
                    <strong>Tema '.$i.'</strong>: '.$tema.'<br />';	
    if (file_exists($pathRez))                
         $rez = "\n\t\t<em>Termen de predare:</em> $termen, ora 8\n\t\t<br /><em>Mod de predare:</em> prin e-mail.<br /><em><a target=\"_blank\" href=\"$pathRez\">Rezultate</a></em>";
	else $rez = "\n\t\t<em>Termen de predare:</em> $termen, ora 8\n\t\t<br /><em>Mod de predare:</em> prin e-mail.<br /><em>Rezultate</em>";

	return conv2utf8("$tc$rez");
}

//returneaza o legatura catre o tema de la laborator dupa nr temei si al problemei
//ex. temeLaborator(3,5); //Tema 3 din lab 3 problema 5
function temeLaborator($tema,$pb){
	$NextLab = $tema + 1;
	$t = "<strong>Tema $tema</strong><em><br />\nTermen de predare</em>: ședința de laborator $NextLab\n<br /><em>Enunț</em>: problema $pb din referatul de laborator $tema <br /><br />\n\n";
	return conv2utf8($t);
}

//returneaza o legatura catre rezultatele unei situatii de lab, examen, restanta, etc.
//ex. RezAfis("rez_examen.pdf","Rezultate Examen");
function RezAfis($path,$tip)	{
		if ($path != 555) 
		if (file_exists('Doc/evaluare/'.$path) && $path != NULL)
				return '<em><a href="Doc/evaluare/'.$path.'" target="_blank">'.conv2utf8($tip).'</a></em>';
		else	return '<em>'.conv2utf8($tip).'</em>';

}

//returneaza data si sala, respectiv salile, cand au fost programate (daca nu se stie ora exacta se poate trece 0 ore si 0 minute ca sa se ignore)
//ex. programare(20,10,2009,15,30,"AC0-1"); sau programare(17,11,1985,0,0,"A0-1");
function programare($zi,$luna,$an,$ora,$min,$sala) {
	$temp = NULL;
	setlocale(LC_TIME, 'romanian');
	if ($ora == 0 && $min == 0)
		 $makeprog = ucfirst(iconv("ISO-8859-2", "UTF-8", (strftime("%A, %d %B %Y", mktime($ora,$min,0,$luna,$zi,$an)))));
	else $makeprog = ucfirst(iconv("ISO-8859-2", "UTF-8", (strftime("%A, %d %B %Y, ora %H:%M", mktime($ora,$min,0,$luna,$zi,$an)))));
	if (is_array($sala) == false) 
		  if ($sala == NULL)
		  		$buff = "$makeprog";
		  else  $buff = "$makeprog, sala $sala";
	else  {
		$buff = "$makeprog, sălile ";
		for ($i=0;$i<count($sala);$i++) 
			if ($i == 0) $temp = $sala[$i];
			else $temp = "$temp+$sala[$i]";
	}
	return conv2utf8("$buff$temp");
}

//afiseaza situatia verificarilor de pe parcursul sem, daca nu exista calea fizica la sub/rez/sugestii, sunt inlocuite de un simplu text fara legaturi
//ex. Verif(5,"Tematica testului",programare(20,10,2009,15,30,"AC0-1")); //in ultimul camp se introduce data programata
function Verif($i,$t,$d)	{
	echo "&nbsp;&nbsp;&nbsp;&nbsp;<strong>&bull; <em>Verificare   $i:</em></strong>  $d";
	echo '<ul type="circle">';
	echo "<li><strong><em>Tematica: </em></strong>$t</li>";
	
	if (file_exists('Doc/evaluare/Test'. $i .'_curs.pdf'))
		 echo '<li><strong><em><a href="Doc/evaluare/Test'. $i .'_curs.pdf" target="_blank">Subiecte</a></em></strong></li>';
	else echo '<li><strong>Subiecte</em></strong></li>';
	if (file_exists('Doc/evaluare/Rez_Test'.$i.'_curs.pdf'))
		 echo '<li><strong><em><a href="Doc/evaluare/Rez_Test'.$i.'_curs.pdf" target="_blank">Rezultate</a></em></strong></li>';
	else echo '<li><strong><em>Rezultate</em></strong></li>';
	if (file_exists('Doc/evaluare/Sugestii_Test'.$i.'_curs.pdf'))
		 echo '<li><strong><em><a href="Doc/evaluare/Sugestii_Test'.$i.'_curs.pdf" target="_blank">Sugestii</a></em></strong></li></ul>';
	else echo conv2utf8("<li><strong><em>Sugestii </em></strong>(Soluțiile vor fi discutate la cursul de vineri)</li></ul>");
}

//afiseaza situatia TEST 1 prin apel la functia RezAfis
function TEST1($NL) {
	echo RezAfis($NL,"<b>Rezultate test laborator</b>");
}

//afiseaza situatia TEST 2 prin apel la functia Verif
function TEST2($verif) {
	if ($verif == NULL) echo "<b>Nu s-au programat verificarile.</b> <br />";
	else
	for ($i=0;$i<count($verif);$i+=2) {
		Verif(($i/2+1),$verif[$i],$verif[($i+1)]);
	}
}

//afiseaza situatia TEST 3 prin apel la functia RezAfis
function TEST3($NF) {
	echo RezAfis($NF,"<b>Rezultate semestriale</b>");
}

/////////////////////////////////////INITIALIZARI/////////////////////////////////////

	$titlu = 'Aplicatii Internet';
	$pag = NULL;
	$anunturi = NULL;
	$tag = NULL;
	$temeC = NULL;
	$lab = NULL;
	$temeL = NULL;
	$testlab = NULL;
	$verificari = NULL;
	$sali = NULL;
	$ProgEx = NULL;
	$ProgEx2 = NULL;
	$ProgReEx = NULL;
	$ProgRest = NULL;
	$ProgReExSept = NULL;
	$ProgTF = NULL;
	$semestru = 555;
	$examen = 555;
	$examen2 = 555;
	$examen3 = 555;
	$restanta = 555;
	$reexam = 555;
	$reexamsept = 555;
	$thelp4 = NULL;
	$Uimg = "<br /><br /><br /><br /><br /><br /><br /><br /><br />";
	$titular = NULL;
	$asist = NULL;
	$Cimg = "<br /><br /><br /><br /><br /><br /><br /><br /><br />";
	$L = NULL;
	$A = NULL;
	$C = NULL;
	
?>