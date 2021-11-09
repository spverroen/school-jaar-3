<?php

?>
<html>
    <head>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
        <h1 class="flex justify-center text-2xl">Personen</h1>
        <div class="flex flex-col justify-center">
        <?php
            foreach ($personen as $persoon) {
                ?>
                <div class="flex">
                    <span><?php echo $persoon['id']; ?></span>
                    <span><?php echo $persoon['voornaam']; ?></span>
                    <span><?php echo $persoon['achternaam']; ?></span>
                    <span><?php echo $persoon['leeftijd']; ?></span>
                    <span><?php echo $persoon['geslacht']; ?></span>
                </div>
                <?php
            }
        ?>
        </div>
        <a href="?action=createform">Aanmaken</a>
    </body>
</html>
