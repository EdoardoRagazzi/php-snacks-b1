<?php 
$meatches = [
    [
        'team1' = > 'aussie',
        'team2' = > 'galles',
        'pointteam1' = > 4,
        'pointteam2' = > 5,
    ]
    [
        'team1' = > 'aussie',
        'team2' = > 'galles',
        'pointteam1' = > 4,
        'pointteam2' = > 5,
    ],
    [
        'team1' = > 'aussie',
        'team2' = > 'galles',
        'pointteam1' = > 4,
        'pointteam2' = > 5,
    ],
];




?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snacks</title>
</head>
<body>

<a href="snack2.php?name=edo&mail=edo@.it&age=28">LINK</a>
    
</body>


<?php for($i=0; $i < count($matches); $i++){ ?>
    <li><?php echo $matches[$i]['team1'] ?> - <?php echo $matches[$i]['team1'] ?> | <?php echo $matches[$i]['pointteam1'] ?> - <?php echo $matches[$i]['pointteam2'] ?> </li>

<?php } ?>
</html>