<?php

require_once dirname(__FILE__) . "/../model/ProductsLogic.php";

class productsController {

    private $ProductLogic;

    function __construct() {
        $this->ProductLogic = new ProductsLogic();
    }

    public function Handler() {
        $action = isset($_REQUEST["action"]) ? $_REQUEST["action"] : "";

        switch($action) {
            case "create":
                $this->CreateProduct();
                break;
            case "reads":
                $this->ReadProducts();
                break;
            case "read":
                $this->ReadProduct();
                break;
            case "update":
                $this->UpdateProduct();
                break;
            case "delete":
                $this->DeleteProduct();
                break;
            case "createForm":
                $this->CreateFrom();
                include "view/create.php";
                break;
            case "updateForm":
                $this->UpdateFrom();
                include "view/update.php";
                break;
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

        $this->ProductLogic->CreateProduct($_REQUEST["product_type_code"], $_REQUEST["supplier_id"], $_REQUEST["product_name"], $_REQUEST["product_price"], $_REQUEST["other_product_details"]);
        $this->ReadProducts();
    }

    private function ReadProducts() {
        $products = $this->ProductLogic->ReadProducts();
        $table = $this->CreateTable($products);
        include "view/read.php";
    }

    private function ReadProduct() {
        if(!isset($_REQUEST["product_id"])) throw new Exception();

        $products = $this->ProductLogic->ReadProduct($_REQUEST["product_id"]);
        include "view/read.php";
    }

    private function UpdateProduct() {
        if(!isset($_REQUEST["product_id"])) throw new Exception();
        if(!isset($_REQUEST["product_type_code"])) throw new Exception();
        if(!isset($_REQUEST["supplier_id"])) throw new Exception();
        if(!isset($_REQUEST["product_name"])) throw new Exception();
        if(!isset($_REQUEST["product_price"])) throw new Exception();
        if(!isset($_REQUEST["other_product_details"])) throw new Exception();

        $this->ProductLogic->UpdateProduct($_REQUEST["product_id"], $_REQUEST["product_type_code"], $_REQUEST["supplier_id"], $_REQUEST["product_name"], $_REQUEST["product_price"], $_REQUEST["other_product_details"]);
        $this->ReadProducts();
    }

    private function DeleteProduct() {
        if(!isset($_REQUEST["product_id"])) throw new Exception();

        if(!$this->ProductLogic->DeleteProduct($_REQUEST["id"])) {
            throw new Exception("No such product");
        }
        $this->ReadProducts();
    }

    private function CreateFrom() {
        include "./view/create.php";
    }

    private function UpdateFrom() {
        if(!isset($_REQUEST["product_id"])) throw new Exception();

        global $product;
        $product = $this->ProductLogic->ReadProduct($_REQUEST["product_id"]);

        include "./view/update.php";
    }

    private function CreateTable($rows) {
        $table = "<table class='flex justify-center'>";
        $table .= "<tr>";

        foreach ($rows[0] as $key => $value) {
            $table .= "<th class='p-2'>" . $key . "</th>";
        }

        $table .= "<th class='p-2'>Actions</th>";
        $table .= "</tr>";

        foreach ($rows as $row) {
            $table .= "<tr>";
            foreach($row as $column){
                $table .= "<td class='p-2'>" . $column . "</td>";
            }
            $table .= '<td>';
            $table .= '<a href="?action=read&id=' . $row['product_id'] . '"><span class="material-icons-outlined material-icons text-dark cursor-pointer">menu_book</span></a>';
            $table .= '<a onclick="loadPage(\'?action=updateFrom&id=' . $row['product_id'] . '\', sendToContent))"><span class="material-icons-outlined material-icons text-dark cursor-pointer">edit</span></a>';
            $table .= '<a onclick="loadPage(\'?action=delete&id=' . $row['product_id'] . '\', sendToContent))"><span class="material-icons-outlined material-icons text-dark cursor-pointer">delete</span></a>';
            $table .= '</td>';
            $table .= '</tr>';
        }
        $table .= "</table>";
        return $table;
    }
}

?>


























