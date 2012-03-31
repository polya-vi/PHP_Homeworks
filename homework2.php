<!DOCTYPE HTML>
<html>

<head>
  <meta name="author" content="Polya Ivanova" />

	<title>Homework 2</title>
</head>

<body>
<?php
$arr = range(20, 1000, 37);
require_once('file2.php');
find_3_prime($arr);
?>
<br/>
<?php
check_exists($arr);
?>
</body>

</html>
