<?php
if(isset($_POST['submit'])){
    $newProduct = new ProductController();
    $newProduct->addProduct();
}

?>

<div class="container mt-3">
    <div class="card-header">ADD DESTINATION</div>
   <a href="<?php echo BASE_URL;?>dashbord" class="btn btn-primary">HOME</a>
   
   <form method="POST" enctype="multipart/form-data">
    <div class="form-group">
    <label for="destination">DESTINATION</label>
    <input type="text" name="destination" class="form-control" placeholder="destination">   
    <label for="description">DESCRIPTION</label>
    <input type="text" name="description" class="form-control" placeholder="description">
    <label for="price">PARICE</label>
    <input type="number" name="price" class="form-control" placeholder="price">
    <label for="price">CHOOSE IMAGE</label>
    <input type="file" name="file" class="form-control" >
    <button type="submit" class="form-control btn btn-primary" name="submit">SUBMIT</button>
    
    </div>

   </form>
    
       
</div>

