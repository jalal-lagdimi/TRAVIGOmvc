<?php
if(isset($_POST['submit'])){
    $loginAdmin = new AdminController();
    $loginAdmin->auth();
}


?>

<div class="container mt-3">
    <?php include "./views/includes/alerts.php" ?>
    <h1>LOGIN ONLY ADMIN</h1>
    <form method="POST">
    <input type="text" name="email" placeholder="email"> <br>
    <input type="password" name="password" placeholder="password"> <br>
    <button type="submit" name="submit">CONNECTION</button>
    </form>
  
</div>         
