<?php
class Product {
    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM product');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $stmt->close();
        $stmt = null;
    }

    static public function getProduct($data){
        $id = $data['id'];
        try{
            $query = 'SELECT * FROM product WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id"=>$id));
            $product= $stmt->fetch(PDO::FETCH_ASSOC);
            return $product;
        }catch(PDOException $ex){
            echo 'error' . $ex->getMessage();
        }
    }


    static public function add($data){
        $stmt = DB::connect()->prepare('INSERT INTO product (destination,description,price,image)VALUES (:destination,:description,:price,:image)');
        $stmt->bindParam(':description',$data['description']);
        $stmt->bindParam(':destination',$data['destination']);
        $stmt->bindParam(':price',$data['price']);
        $stmt->bindParam(':image',$data['image']);
                
        if($stmt->execute()){
            return 'ok';
        } else {
            return 'error';
        }
        // $stmt->close();
        $stmt=null;
    }


    static public function update($data){
        $stmt = DB::connect()->prepare('UPDATE product SET destination = :destination,description = :description,price = :price,image = :image WHERE id=:id');
        $stmt->bindParam(':id',$data['id']);
        $stmt->bindParam(':description',$data['description']);
        $stmt->bindParam(':destination',$data['destination']);
        $stmt->bindParam(':price',$data['price']);
        $stmt->bindParam(':image',$data['image']);
        if($stmt->execute()){
            return 'ok';
        } else {
            return 'error';
        }
        // $stmt->close();
        $stmt=null;
    }

    public static function delete($data){
        $id = $data['id'];
        try{
            $query = 'DELETE FROM product WHERE id=:id';
            $stmt = DB::connect()->prepare($query);
            $stmt->execute(array(":id"=>$id));
            if($stmt->execute()){
                return 'ok';
            } 
        }catch(PDOException $ex){
            echo 'error' . $ex->getMessage();
        }
    }
}
?>