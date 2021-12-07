<?php

require_once dirname(__FILE__) . "/../model/ProductsLogic.php";
require_once dirname(__FILE__) . "/../model/OutputData.php";

class productsController {
    private $ProductsLogic;
    private $OutputData;

    function __construct() {
        $this->ProductsLogic = new ProductsLogic();
        $this->OutputData = new OutputData();
    }

    public function Handler() {
        $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";

        switch($action) {
            // CRUD cases
            case "create":
                $this->CreateProduct();
                break;
            case "read":
                $this->ReadProducts();
                break;
            case "update":
                $this->UpdateProduct();
                break;
            case "delete":
                $this->DeleteProduct();
                break;

            // Search case
            case "search":
                $this->SearchProduct();
                break;

            // Form cases
            case "createform":
                $this->CreateProductForm();
                break;
            case "updateform":
                $this->UpdateProductForm();
                break;

            // Default case
            default:
                $this->ReadProducts();
        }
    }

    private function CreateProduct() {
        if(!isset($_REQUEST["product_type_code"])) throw new Exception();
        if(!isset($_REQUEST["supplier_id"])) throw new Exception();
        if(!isset($_REQUEST["product_name"])) throw new Exception();
        if(!isset($_REQUEST["product_price"])) throw new Exception();
        if(!isset($_REQUEST["other_product_details"])) throw new Exception();

        $this->ProductsLogic->CreateProduct($_REQUEST["product_type_code"], $_REQUEST["supplier_id"], $_REQUEST["product_name"], $_REQUEST["product_price"], $_REQUEST["other_product_details"]);
        $this->ReadProducts();
    }

    private function ReadProducts() {
        $products = $this->ProductsLogic->ReadProducts();
        $table = $this->OutputData->CreateTable($products);
        include "view/read.php";
    }

    private function UpdateProduct() {
        if(!isset($_REQUEST["product_type_code"])) throw new Exception();
        if(!isset($_REQUEST["supplier_id"])) throw new Exception();
        if(!isset($_REQUEST["product_name"])) throw new Exception();
        if(!isset($_REQUEST["product_price"])) throw new Exception();
        if(!isset($_REQUEST["other_product_details"])) throw new Exception();
        if(!isset($_REQUEST["product_id"])) throw new Exception();

        $this->ProductsLogic->UpdateProduct($_REQUEST["product_type_code"], $_REQUEST["supplier_id"], $_REQUEST["product_name"], $_REQUEST["product_price"], $_REQUEST["other_product_details"], $_REQUEST["product_id"]);
    
        $this->ReadProducts();
    }

    private function DeleteProduct() {
        // if(!isset($_REQUEST["product_id"])) throw new Exception();

        if(!$this->ProductsLogic->DeleteProduct($_REQUEST["id"])) {
            throw new Exception("No such product.");
        }

        $this->ReadProducts();
    }

    private function SearchProduct() {
        if(!isset($_REQUEST["term"])) throw new Exception();

        $products = $this->ProductsLogic->SearchProducts($_REQUEST["term"]);
        $table = $this->OutputData->CreateTable($products);
        include "view/read.php";
    }

    private function CreateProductForm() {
        include "view/create.php";
    }

    private function UpdateProductForm() {
        if(!isset($_REQUEST["id"])) throw new Exception();

        global $product;
        $product = $this->ProductsLogic->ReadProduct($_REQUEST["id"]);

        include "view/update.php";
    }

}

?>