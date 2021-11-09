<?php

require_once dirname(__FILE__) . "/../model/ProductsLogic.php";
require_once dirname(__FILE__) . "/outputData.php";

class   Controller {
    private $productLogic;
    private $outputData;
    function __construct()
    {
        $this->productLogic = new ProductsLogic();
        $this->outputData = new OutputData();
    }

    public function Handle() {
        $type = isset($_REQUEST['action']) ? $_REQUEST['action'] : "";

        switch($type) {
            case "read":    
                $this->ReadProducts();
                break;
            case "createform":
                $this->CreateProductForm();
                break;
            case "create": 
                $this->CreateProduct();
                break;
            case "updateform":
                $this->UpdateProductForm();
                break;
            case "update": 
                $this->UpdateProduct();
                break;
            case "delete": 
                $this->DeleteProduct();
                break;
            case "createform": 
                include "view/create.php";
                break;
            default:
                $this->ReadProducts();
        }
    }

    private function ReadProducts() {
        $products = $this->productLogic->ReadProducts();
        $table = $this->outputData->CreateTable($products);
        include "view/read.php";
    }


    private function CreateProduct() {
        if(!isset($_REQUEST["product_type_code"])) throw new Exception();
        if(!isset($_REQUEST["supplier_id"])) throw new Exception();
        if(!isset($_REQUEST["product_name"])) throw new Exception();
        if(!isset($_REQUEST["product_price"])) throw new Exception();
        if(!isset($_REQUEST["other_product_details"])) throw new Exception();

        $this->productLogic->CreateProduct($_REQUEST["product_type_code"], $_REQUEST["supplier_id"], $_REQUEST["product_name"], $_REQUEST["product_price"], $_REQUEST["other_product_details"]);
        $this->ReadProducts();
    }

    private function CreateProductForm() {
        include "view/create.php";
    }

    private function UpdateProductForm() {
        if(!isset($_REQUEST["id"])) throw new Exception();

        global $product;
        $product = $this->productLogic->ReadProduct($_REQUEST["id"]);
        global $update;
        $update = true;
        include "view/create.php";
    }

    private function UpdateProduct() {
        if(!isset($_REQUEST["product_type_code"])) throw new Exception();
        if(!isset($_REQUEST["supplier_id"])) throw new Exception();
        if(!isset($_REQUEST["product_name"])) throw new Exception();
        if(!isset($_REQUEST["product_price"])) throw new Exception();
        if(!isset($_REQUEST["other_product_details"])) throw new Exception();
        if(!isset($_REQUEST["product_id"])) throw new Exception();


        $this->productLogic->UpdateProduct($_REQUEST["product_id"], $_REQUEST["product_type_code"], $_REQUEST["supplier_id"], $_REQUEST["product_name"], $_REQUEST["product_price"], $_REQUEST["other_product_details"]);
        $this->ReadProducts();
    }
    
    private function DeleteProduct() {
        if(!isset($_REQUEST["id"])) throw new Exception();

        if(!$this->productLogic->DeleteProduct($_REQUEST["id"])) {
            throw new Exception("No such product.");
        }
        $this->ReadProducts();
    }
}