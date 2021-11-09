<?php

?>
<html>
    <head>
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
        <h1>Persoon aanmaken</h1>
        <form method="POST" action="?action=create">
            <input type="text" name="voornaam">

            <input type="text" name="achternaam">

            <input type="number" name="leeftijd">

            <select name="geslacht">
                <option value="man">man</option>
                <option value="vrouw">vrouw</option>
                <option value="overig">overig</option>
            </select>

            <button type="submit">Aanmaken</button>
        </form>
    </body>
</html>
