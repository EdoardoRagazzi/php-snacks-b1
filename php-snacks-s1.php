<!-- Snack 1--------------------
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60

Snack 2------------------------
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
if(empty($_GET['mail']) || empty($_GET['name'] || empty($_GET['age'])){
    $msg= 'errore';
}elseif(strlen($_GET['name']<4)){
    $msg= 'errore';
}elseif(!strpos($_GET['mail'], '@') || (!strpos($_GET['mail'], '.')){
    $msg= 'errore';
}elseif(!is_numeric($_GET['age'])){
    $msg= 'errore';
}else 
$msg= 'accesso riuscito';


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-Snacks-S1</title>
</head>
<body>



    
</body>
</html>