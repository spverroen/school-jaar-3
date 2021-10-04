<?php

if(!isset($product)) throw new Exception("Product Doesn't exist");

?>

<html>
    <head>
        <title>Stardunk - Create</title>
    </head>
    <body>
        <h1>Products create</h1>
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
        <button onclick="submitForm('updateForm', 'index.php?action=update', sendToContent)">Update</button>
        <button onclick="loadPage('index?action=reads', sendToContent)">Back</button>
    </body>
</html>
