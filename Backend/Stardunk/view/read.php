<?php

?>

<html>
    <head>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
        <script src="./view/js/ajax.js"></script>
        <title>Stardunk - Read</title>
    </head>
    <body>
        <div id="content" class="flex flex-col justify-center">
            <span class="text-4xl text-center">Products read</span>
            <button onclick="loadPage('index.php?action=createForm', sendToContent)">Create product</button>
            <?php echo $table ?>
        </div>
    </body>
</html>
