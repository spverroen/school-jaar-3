<?php

?>

<html>
    <head>
        <title>Stardunk - Create</title>
    </head>
    <body>
        <span class="text-4xl">Products create</span>
        <form method="POST" action="" id="createForm">
            <span>Product name</span>
            <input name="product_name">

            <span>Product type code</span>
            <input name="product_type_code">

            <span>Supplier id</span>
            <input name="supplier_id">

            <span>Product price</span>
            <input name="product_price">

            <span>Other product details</span>
            <input name="other_product_details">
        </form>
        <button onclick="submitForm('createForm', 'index.php?action=create', sendToContent)">Create</button>
        <button onclick="loadPage('index?action=reads', sendToContent)">Back</button>
    </body>
</html>