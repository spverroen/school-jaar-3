<?php if(!isset($update)) $update = false; ?> 
<?php if(!isset($product) && $update) throw new Exception("Cannot edit a non-existing product."); ?>
<div class="w-50 m-auto border p-3 text-center">
    <h2 class="m-4"><?php echo $update ? "Een product updaten" : "Een nieuw product aanmaken"; ?></h2>
    <form id="createform" class="">
        <?php if($update): ?>
        <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>" class="m-4">
        <?php endif; ?>
        <label for="product_name" class="m-2 w-50 text-left">Product naam</label>
        <input name="product_name" type="text" value="<?php if($update) echo $product['product_name']; ?>" class="m-2 w-50 text-left"><br>
        <label for="product_type_code" class="m-2 w-50 text-left">Product type code</label>  
        <input type="number" name="product_type_code" value="<?php if($update) echo $product['product_type_code']; ?>" id="" class="m-2 w-50 text-left"><br>
        <label for="supplier_id" class="m-2 w-50 text-left">Leverancier id</label>  
        <input type="number" name="supplier_id" id="" value="<?php if($update) echo $product['supplier_id']; ?>" class="m-2 w-50 text-left"><br>
        <label for="product_price" class="m-2 w-50 text-left">Prijs</label>  
        <input type="number" step="0.01" name="product_price" id="" value="<?php if($update) echo $product['product_price']; ?>" class="m-2 w-50 text-left"><br>
        
        <label for="other_product_details" class="m-2 w-50 text-left">Details</label>  
        <input type="text" name="other_product_details" id="" value="<?php if($update) echo $product['other_product_details']; ?>" class="m-2 w-50 text-left"><br>  
    </form>
    <button onclick="submitForm('createform', 'index.php?action=<?php if($update) echo 'update'; else echo 'create'; ?>', sendToContent)" class="btn btn-primary"><?php if($update) echo 'Updaten'; else echo 'Toevoegen'; ?></button>
    <button onclick="loadPage('index.php?action=read', sendToContent)" class="btn btn-danger">Terug</button>
</div>
