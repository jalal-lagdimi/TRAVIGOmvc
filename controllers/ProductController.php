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
            $file_name=$_FILES['file']['name'];
            $file_tmp=$_FILES['file']['tmp_name'];
            $file_size=$_FILES['file']['size'];
            $file_type=$_FILES['file']['type'];
            $location= "uploads/".$file_name;
            move_uploaded_file($file_tmp,$location);

            $data =  array(
                'destination' => $_POST['destination'],
                'description' => $_POST['description'],
                'price' => $_POST['price'],     
                'image' => $_FILES['file']['name'], 
            );
            if(empty($_FILES['file']['name']) || empty($_POST['price'])  || empty($_POST['destination']) || empty($_POST['destination'])){
                Session::set('error','fill out all');
                Redirect::to('add');
            } else{
                $result = Product::add($data);
             if($result==='ok'){
                Session::set('success','Product Added');
                Redirect::to('dashbord');
            } else {
                echo $result;
            }
          }   
        }
      }


    public function updateProduct(){
        if(isset($_POST['submit'])){
            $file_name=$_FILES['file']['name'];
            $file_tmp=$_FILES['file']['tmp_name'];
            $file_size=$_FILES['file']['size'];
            $file_type=$_FILES['file']['type'];
            $location= "uploads/".$file_name;
            
            $data =  array(
                'id' => $_POST['id'],
                'destination' => $_POST['destination'],
                'description' => $_POST['description'],
                'price' => $_POST['price'],
                'image' => $_FILES['file']['name'], 
            );
            if(empty($file_name)){
                $result = Product::update1($data);
                if($result==='ok'){
                    Session::set('success','Product Update');
                    Redirect::to('dashbord');
                } else {
                    echo $result;
                }
            }else{
                $result = Product::update($data);
                if($result==='ok'){
                    Session::set('success','Product Update');
                    Redirect::to('dashbord');
                } else {
                    echo $result;
                }   
                move_uploaded_file($file_tmp,$location);
            }
           
        }
    }

    public function deleteProduct(){
        if(isset($_POST['id'])){
            $data['id'] =$_POST['id'];
            $result = Product::delete($data);
            if($result==='ok'){
                Session::set('success','Product Delete');
                Redirect::to('dashbord');
            } else {
                echo $result;
            }
        }
    }
}
?>