<?php
if(isset($_POST['id'])){
    $exitProduct = new ProductController();
    $product = $exitProduct->getOneProduct();
}

if(isset($_POST['submit'])){
    $exitProduct = new ProductController();
    $exitProduct->updateProduct();
}

?>

<div class="container mt-3">
    <div class="card-header">ADD DESTINATION</div>
   <a href="<?php echo BASE_URL;?>dashbord" class="btn btn-primary">HOME</a>
   
   <form method="POST">
    <div class="form-group">
    <label for="destination">DESTINATION</label>
    <input value="<?php echo $product['description']; ?>" type="text" name="destination" class="form-control" placeholder="destination">  
    <input type="hidden" name="id" value="<?php echo $product['id'];?>"> 
    <label for="description">DESCRIPTION</label>
    <input value="<?php echo $product['destination']; ?>" type="text" name="description" class="form-control" placeholder="description">
    <label for="price">PARICE</label>
    <input value="<?php echo $product['price']; ?>" type="number" name="price" class="form-control" placeholder="price">
    <label for="price">CHOOSE IMAGE</label>
    <input type="file" name="file" class="form-control" >
    <button type="submit" class="form-control btn btn-primary" name="submit">SUBMIT</button>
    </div>

   </form>
    
       
</div>
