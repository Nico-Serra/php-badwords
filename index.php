<?php 

/*

Creare un form PHP che permetta di inviare due campi:
un paragrafo
ed una parola da censurare.
Gestire il tutto con due file diversi. Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
stampare a schermo il paragrafo e la sua lunghezza
stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare


*/

//var_dump($_GET)


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php bad words</title>
</head>
<body>
 
<h1>Bad words</h1>

<form action="server.php" method="get">
    <input type="text" name="paragraph" placeholder="insert a paragraph">
    <input type="text" name="badWords" placeholder="insert the word to be censored">
    <button type="submit">Click</button>

</form>

</body>
</html>