<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>JavaScript Academy</title>
  <link href="styles.css" rel="stylesheet" />
</head>
<body class="page-body">
    <div class="header-container">
      <span class="header-title">JavaScript Academy</span>
      <input class="header-searchbar" type="text" placeholder="Search">
      <button class="header-button">User</button>
    </div>
    <div class="page-content">
      <div class="side-navbar">
            <span class="navigating-link">Overviewss</span>
            <span class="navigating-link">Introduction</span>
            <span class="navigating-link">Syntax</span>
            <span class="navigating-link">Variables</span>
            <span class="navigating-link">Functions</span>
            <span class="navigating-link">Data Types</span>
            <span class="navigating-link">Loops</span>
            <span class="navigating-link">String</span>
            <span class="navigating-link">String Methods</span>
            <span class="navigating-link">Array</span>
            <span class="navigating-link">Array Methods</span>
            <span class="navigating-link">Hoisting</span>
            <span class="navigating-link">Closures</span>
            <span class="navigating-link">Best Practices</span>
            <span class="navigating-link">Async</span>
            <span class="navigating-link">Classes</span>
            <span class="navigating-link">Type Conversion</span>
            <span class="navigating-link">How To</span>
            <span class="navigating-link">Reserved Words</span>
      </div>
      <div class="main-content-container">
        <div class="presentation-title">Overview on Javascript</div>
      </div>
    </div>
</body>
</html>
Footer

<?php
	echo 'Hello World'
	// if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
	// 	$uri = 'https://';
	// } else {
	// 	$uri = 'http://';
	// }
	// $uri .= $_SERVER['HTTP_HOST'];
	// header('Location: '.$uri.'/dashboard/');
	// exit;
?>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

	$mysqli = new mysqli($servername, $username, $password, 'site1');
	$result = $mysqli->query("SELECT table_name FROM information_schema.tables WHERE table_type = 'base table' AND table_schema='test'");
	$row = $result->fetch_assoc();
	echo htmlentities($row['_message']);
?>
