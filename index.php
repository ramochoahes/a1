<?php
$lines = explode("\n", file_get_contents('quotes.txt'));
$line = $lines[mt_rand(0, count($lines) - 1)];
list($text, $author) = explode('|', $line);
?>


<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">

</head>

<body>
<h1>Ram Ochoa</h1>

<img src='/images/me.jpg' alt='me'>

<p>
Indtroduction. 
</p>

<h2>Random Quote</h2>
		
<blockquote class="text-center">
		<p><?php echo $text; ?></p>
		<footer><?php echo $author; ?></footer>
</blockquote>

</body>
</html>