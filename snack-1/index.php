<?php
// Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
// Olimpia Milano - Cantù | 55-60

$squadre = [
    [
        "squadra_casa" => "Roma",
        "squadra_ospite" => "Lazio",
        "punti_sq_casa" => 2,
        "punti_sq_ospite" => 1
    ],
    [
        "squadra_casa" => "Milan",
        "squadra_ospite" => "Inter",
        "punti_sq_casa" => 3,
        "punti_sq_ospite" => 2
    ],
    [
        "squadra_casa" => "Chelsea",
        "squadra_ospite" => "Arsenal",
        "punti_sq_casa" => 3,
        "punti_sq_ospite" => 0
    ]
];

for ($i = 0; $i < count($squadre); $i++) {
    echo $squadre[$i]["squadra_casa"] . '-' . $squadre[$i]["squadra_ospite"] . '|' . $squadre[$i]["punti_sq_casa"] . '-' . $squadre[$i]["punti_sq_ospite"] . "<br>";
   
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>