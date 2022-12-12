<?php
if(isset($_POST['id'])){
    $exitProduct = new ProductController();
    $product = $exitProduct->getOneProduct();
}else{
    Redirect::to('dashbord');
}

if(isset($_POST['submit'])){
    $exitProduct = new ProductController();
    $exitProduct->updateProduct();
}

?>



<section class="vh-100" style="background-color: #06576c;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem; border: none;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="./views/img/roma.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 100%;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
             

                <form method="POST" enctype="multipart/form-data">
     
                  <div class="d-flex align-items-center mb-3 pb-1">
                  <?php include "./views/includes/alerts.php" ?>
                    <span class="h1 fw-bold mb-0;" style="color:#06576c">UPDATE DESTINATION</span>
                  </div>

                  <input type="hidden" name="id" value="<?php echo $product['id'];?>">
                  <div class="form-outline mb-4">
                    <input  value="<?php echo $product['destination']; ?>" name="destination" type="text" id="form2Example17" class="form-control" placeholder="Destination" />
                   
                  </div>

                  <div class="form-outline mb-4">
                    <input value="<?php echo $product['description']; ?>" name="description" type="text" id="form2Example27" class="form-control" placeholder="Description" />
                  </div>

                  <div class="form-outline mb-4">
                    <input value="<?php echo $product['price']; ?>" name="price" type="number" id="form2Example27" class="form-control" placeholder="Price"/>
                 
                  </div>

                  <div class="form-outline mb-4">
                    <input name="file" type="file" id="form2Example27" class="form-control" />
                    
                  </div>

                  <div class="pt-1 mb-4">
                    <button name="submit" class="btn btn-dark  btn-block"  style="background-color: #06576c" type="submit">Update</button>
                    <a href="<?php echo BASE_URL;?>dashbord" class="btn btn-dark btn-block" style="background-color: #06576c">Cancel</a>
                  </div>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

