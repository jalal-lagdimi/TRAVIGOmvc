<?php
class Product {
    static public function getAll(){
        $stmt = DB::connect()->prepare('SELECT * FROM product');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        // $stmt->close();
        $stmt = null;
    }
    static public function add($data){
        $stmt = DB::connect()->prepare('INSERT INTO product (destination,description,price)VALUES (:destination,:description,:price)');
        $stmt->bindParam(':description',$data['description']);
        $stmt->bindParam(':destination',$data['destination']);
        $stmt->bindParam(':price',$data['price']);


        if($stmt->execute()){
            return 'ok';
        } else {
            return 'error';
        }
        // $stmt->close();
        $stmt=null;

    }
}
?>