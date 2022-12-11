<?php

class ProductController{
    public function getAllProducts(){
        $products = Product::getAll();
        return $products;
    }

    public function getOneProduct(){
        if(isset($_POST['id'])){
            $data = array(
           'id' => $_POST['id']
            );
        }
        $product = Product::getProduct($data);
        return $product;
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
                Session::set('success','Product Added');
                Redirect::to('home');
            } else {
                echo $result;
            }
        }
    }


    public function updateProduct(){
        if(isset($_POST['submit'])){
            $data =  array(
                'id' => $_POST['id'],
                'destination' => $_POST['destination'],
                'description' => $_POST['description'],
                'price' => $_POST['price'],
            );
            $result = Product::update($data);
            if($result==='ok'){
                Session::set('success','Product Update');
                Redirect::to('home');
            } else {
                echo $result;
            }
        }
    }

    public function deleteProduct(){
        if(isset($_POST['id'])){
            $data['id'] =$_POST['id'];
            $result = Product::delete($data);
            if($result==='ok'){
                Session::set('success','Product Delete');
                Redirect::to('home');
            } else {
                echo $result;
            }
        }
    }
}
?>