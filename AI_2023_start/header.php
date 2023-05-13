<?php 
	$pageOn = basename($_SERVER['PHP_SELF']);
	
	include('conf.AI.php');
	
	$pON = ucfirst(substr($pageOn, 0 , -4));
    if ($pON == ucfirst('index')) $pON = ucfirst('home');
	
	$head = <<< INITHTML
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ro">
<head>
	<title>{$pON} - ${titlu}</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Language" content="ro" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
	<link href="style.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 6]>  
        <link rel="stylesheet" href="fixIE.css" type="text/css" />   
    <![endif]-->
INITHTML;
$script = <<< SCRIPT
    <link rel="stylesheet" type="text/css" href="JS/jquery.fancybox.css" media="screen" />
	<script type="text/javascript" src="JS/jquery.min.js"></script>
	<script type="text/javascript" src="JS/jquery.easing.js"></script>
	<script type="text/javascript" src="JS/jquery.fancybox.pack.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
			$("a.pic").fancybox({ 
				'overlayShow' : false,
				'zoomSpeedIn' : 999,
				'zoomSpeedOut' : 666,
				'easingIn' : 'easeOutBack',
				'easingOut' : 'easeInBack'
				}); 
	});
	</script>
SCRIPT;
$meniu = <<< MENIU
</head>
<body>

	<!-- header -->
  <div id="header">
        <div id="title">
            <img src="images/monitoralfa.png" width="100" alt="PATR"></img> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
              <span class="orange"> AI -</span>- ${titlu}
        </div>
      	<div id="menu">
       	  <ul>

MENIU;
$eom = <<< EOM
	  </ul>
	</div>
 </div>
    <!--end header -->
EOM;
    	
	echo conv2utf8($head);
    if($pageOn == 'index.php' || $pageOn == 'utile.php' || $pageOn == 'contact.php' )
    	echo $script;
        
	echo conv2utf8($meniu);
    
    for($i=0;$i<count($pag);$i++){
    	echo "\t\t<li><a href=\"$pag[$i].php\"";
        if($pageOn == "$pag[$i].php") 
             echo " class=\"active\"";
        if($i == 0)	 echo "> home </a></li>\n";
        else echo conv2utf8("> $pag[$i] </a></li>\n");
     }       
	echo $eom;
?>