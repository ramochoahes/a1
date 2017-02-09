<?php
$corpus = explode("\n", file_get_contents('quotes.txt'));
$quote = $corpus[rand(0, count($corpus) - 1)];
list($rndquote, $author) = explode('-', $quote);
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="styles.css">
	
	<meta charset="UTF-8">

</head>

<body>
<h1>Ram Ochoa</h1>

<img src='/images/me.jpg' alt='me'>

<h2>Introduction</h2>

<p>
Hi, my name is Ram Ochoa and I live in South Texas. I am currently working an a my masters degree in IT here at HES. If all goes as planned I'll be done by next summer. I have been a high school science teacher for the past 7 years and also dabble in real estate contruction. I have learned HTML/CSS/ and JS and am glad to be learning this big piece of the web application stack and learn php and back end development here in E-15. Have a great semester!
</p>




<h2>Random Quote</h2>
<p>
<?php echo $rndquote; ?>
</p>
<p>
<?php echo $author; ?>
</p>

</body>
</html>