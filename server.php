<?php

$paragraph = $_GET['paragraph'];
$lenght = strlen($_GET['paragraph']);
$badWords = $_GET['badWords'];
$censored = '***';
$newParagraph = str_replace($badWords, $censored, $paragraph)

//var_dump(str_contains($paragraph, $badWords))




?>


<h2><?php echo $paragraph . ' lunghezza del paragrafo:' .$lenght ?></h2>
<h2><?php echo $newParagraph . ' lunghezza del paragrafo:' . $lenght  ?></h2>

