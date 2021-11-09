<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <title>Stardunk - read</title>
    <script src="view/assets/main.js"></script>
</head>
<body class="">
    <div id="content" class="py-5 m-auto text-center">
        <h1>Producten uitlezen</h1>
        <button onclick="loadPage('index.php?action=createform', sendToContent)" class="btn btn-primary my-2">Product aanmaken</button>
        <?php echo $table; ?> 
    </div>
</body>
</html>