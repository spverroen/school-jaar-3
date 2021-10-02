<?php

require_once dirname(__FILE__) . "./DataHandler.php";

class ProductsLogic {

    private $DataHandler;

    function __construct() {
        $this->DataHandler = new DataHandler();
    }

    public function CreateProduct($product_type_code, $supplier_id, $product_name, $product_price, $other_product_details) {
        $sql = "INSERT INTO products (product_type_code, supplier_id, product_name, product_price, other_product_details) VALUES (?, ?, ?, ?, ?)";
        return $this->DataHandler->CreateData($sql, [$product_type_code, $supplier_id, $product_name, $product_price, $other_product_details]);
    }

    public function ReadProducts() {
        $sql = "SELECT * FROM products";
        return $this->DataHandler->ReadData($sql, []);
    }

    public function ReadProduct($product_id) {
        $sql = "SELECT * FROM products WHERE product_id = ?";
        $result = $this->DataHandler->ReadData($sql, [$product_id]);
        if(!$result) throw new Exception("No such product");
        return $result[0];
    }

    public function UpdateProduct($product_id, $product_type_code, $supplier_id, $product_name, $product_price, $other_product_details) {
        $sql = "UPDATE products SET product_type_code = ?, supplier_id = ?, product_name = ?, product_price = ?, other_product_details = ? WHERE product_id = ?";
        return $this->DataHandler->UpdateData($sql, [$product_id, $product_type_code, $supplier_id, $product_name, $product_price, $other_product_details]);
    }

    public function DeleteProduct($product_id) {
        $sql = "DELETE FROM products WHERE product_id = ?";
        return $this->DataHandler->DeleteData($sql, [$product_id]);
    }

}

?>