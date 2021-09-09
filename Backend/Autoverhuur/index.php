<?php

// Make constants
define("smallCarTarrif", 0.20);
define("bigCarTarrif", 0.30);

$endCost = 0;
$drivenKm = 0;
$daysHad = 0;

if(isset($_REQUEST['car'])) {
    $car = $_REQUEST['car'];
}

if(isset($_REQUEST['drivenKm'])) {
    $drivenKm = $_REQUEST['drivenKm'];
}

if(isset($_REQUEST['daysHad'])) {
    $daysHad = $_REQUEST['daysHad'];
}

for($i = 0; $i < $daysHad; $i++) {
    // The first 100 km of every day are free so subtract 100 every day
    $drivenKm -= 100;

    // Base cost per day for a small car
    if($car == "smallCar") {
        $endCost += 50;
        echo "i do work";
    } 

    // Base cost per day for a big car
    if($car == "bigCar") {
        $endCost += 95;
    } 
}

// Sum for how many km they drove for a small car
if($drivenKm > 0 && $car == "smallCar") {
    $endCost += $drivenKm * smallCarTarrif;
}

// Sum for how many km they drove for a big car
if($drivenKm > 0 && $car == "bigCar") {
    $endCost += $drivenKm * bigCarTarrif;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Autoverhuur</title>
</head>
<body>
    <div class="w-75 m-auto border border-primary p-5">
        <h1 class="mb-3">Autoverhuur</h1>
        <form method="POST">
            <label for="car" class="h5">Welke auto heeft u?</label>
            <select name="car" class="form-control">
                <option value="smallCar">personenauto</option>
                <option value="bigCar">personenbusje</option>
            </select>
                
            <label for="drivenKm" class="h5">Hoeveel kilometer heeft u gereden?</label>
            <input type="number" name="drivenKm" id="" class="form-control"><br>

            <label for="daysHad" class="h5">Hoeveel dagen heeft u de auto gehad?</label>
            <input type="number" name="daysHad" id="" class="form-control"><br>

            <input type="submit" class="btn btn-primary my-2">
            <?php if($endCost > 0) { ?>
            <h4 class="mt-5">Totale kosten autoverhuur: <?php echo "€" . $endCost; ?></h4> 
            <?php } ?>
        </form>
    </div>
</body>
</html>
