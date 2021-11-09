<?php
require_once dirname(__FILE__) . "/DataHandler.php";
class ProductsLogic {
    private $dataHandler;

    function __construct()
    {
        $this->dataHandler = new DataHandler("dunk");
    }

    public function CreateProduct(int $type_code, int $supplier_id, string $prod_name, float $prod_price, string $other_details): int {
        $sql = "INSERT INTO products (product_type_code, supplier_id, product_name, product_price, other_product_details) VALUES (?, ?, ?, ?, ?)";
        $result = $this->dataHandler->CreateData($sql, [ $type_code, $supplier_id, $prod_name, $prod_price, $other_details ]);
        return $result;
    }

    public function DeleteProduct(int $id): int {
        $sql = "DELETE FROM products WHERE product_id = ?";
        $result = $this->dataHandler->DeleteData($sql, [$id]);
        return $result;
    }

    public function UpdateProduct(int $id, int $product_type, int $supplier_id, string $prod_name, float $prod_price, string $other_details) : int {
        $sql = "UPDATE products SET product_name = ?, product_type_code = ?, supplier_id = ?, product_price = ?, other_product_details = ? WHERE product_id = ?";
        $result = $this->dataHandler->UpdateData($sql, [ $prod_name, $product_type, $supplier_id, $prod_price, $other_details, $id ]);
        return $result;
    }

    public function ReadProduct($id): array {
        $sql = "SELECT * FROM products WHERE product_id = ?";
        $result = $this->dataHandler->ReadData($sql, [$id]);
        if(!$result) throw new Exception("No such product.");
        return $result[0];
    }

    public function ReadProducts(): array {
        $sql = "SELECT * FROM products";
        $result = $this->dataHandler->ReadData($sql, []);
        return $result;
    }

    public function SearchProducts(string $term): array {
        $sql = "SELECT * FROM products WHERE product_name LIKE ?";
        $result = $this->dataHandler->ReadData($sql, [ $term ]);
        return $result;
    }
}