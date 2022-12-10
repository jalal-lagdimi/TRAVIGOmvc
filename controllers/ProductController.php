<?php

class ProductController{
    public function getAllProducts(){
        $products = Product::getAll();
        return $products;
    }

    public function addProduct(){
        if(isset($_POST['submit'])){
            $data =  array(
                'destination' => $_POST['destination'],
                'description' => $_POST['description'],
                'price' => $_POST['price'],

            );
            $result = Product::add($data);
            if($result==='ok'){
                header('location:'.BASE_URL);
            } else {
                echo $result;
            }
        }

    }
}
?>