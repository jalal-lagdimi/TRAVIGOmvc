<?php
if(isset($_POST['submit'])){
    $loginAdmin = new AdminController();
    $loginAdmin->auth();
}
?>

  
<section class="vh-105" style="background-color: #7de3ef;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem; border: none;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="./views/img/img-4.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 100%;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
          

                <form method="POST">
                <?php include "./views/includes/alerts.php" ?>
                  <div class="d-flex align-items-center mb-3 pb-1">
                    
                   
                    <span class="h1 fw-bold mb-0;" style="color:#00c8ff">TRAVIGO</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your admin account</h5>

                  <div class="form-outline mb-4">
                  <label class="form-label" for="form2Example17">Email </label>
                    <input name="email" type="text" id="form2Example17" class="form-control " placeholder="Enter your email"/>
                  </div>

                  <div class="form-outline mb-4">
                   <label class="form-label" for="form2Example27">Password</label>
                    <input name="password" type="password" id="form2Example27" class="form-control " placeholder="Enter your Password" />   
                  </div>

                  <div class="pt-1 mb-4">
                    <button name="submit" class="btn btn-dark lg btn-block" style="background-color: #00c8ff" border: none;style="background-color: #00c8ff" type="submit">Login</button>
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




