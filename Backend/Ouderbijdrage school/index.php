<?php

// Make constants
define("baseCost", 50);
define("maxCost", 150);
define("youngChildCost", 25);
define("oldChildCost", 37);

$endCost = 0;

if(isset($_REQUEST['youngChild'])) {
    $youngChild = $_REQUEST['youngChild'];
    // Add money for childeren that are younger then 10
    for($i = 0; $i < $youngChild; $i++) {
        if($i < 3) {
            $endCost += youngChildCost;
        } else {
            break;
        }
    }
}

if(isset($_REQUEST['oldChild'])) {
    $oldChild = $_REQUEST['oldChild'];
    // Add money for childeren that are 10 or older
    for($i = 0; $i < $oldChild; $i++) {
        if($i < 2) {
            $endCost += oldChildCost;
        } else {
            break;
        }
    }
}

$endCost = $endCost + baseCost;

// If the end cost is more then 150 it will change it to 150
if($endCost > 150) {
    $endCost = 150;
}

if(isset($_REQUEST['onlyParent'])) {
    $onlyParent = $_REQUEST['onlyParent']; 
    // If they are a only parent add discount
    if($onlyParent) {
        $endCost = $endCost * 0.75;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Ouderbijdrage school</title>
</head>
<body>
    <div class="w-75 m-auto border border-primary p-5 ">
        <h1 class="mb-3">Ouderbijdrage school</h1>
        <form method="POST">
            <label for="youngChild" class="h5">Hoeveel kinderen onder 10 jaar</label>
            <input type="number" name="youngChild" id="" class="form-control"><br>

            <label for="oldChild" class="h5">Hoeveel kinderen 10 jaar of ouder</label>
            <input type="number" name="oldChild" id="" class="form-control"><br>

            <label for="onlyParent" class="h5">Eenoudergezin?</label>
            <input type="checkbox" name="onlyParent" id="" class="form-check-label"><br>

            <input type="submit" class="btn btn-primary my-2">
        </form>
        <?php if($endCost > baseCost) { ?>
            <h4 class="mt-5">Totale kosten ouderbijdrage: <?php echo "€" . $endCost; ?></h4> 
        <?php } ?>
    </div>
</body>
</html>



