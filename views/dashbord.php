<?php
$data = new ProductController();
$products = $data->getAllProducts();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>crud</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="color: #ffff; background-color:#21849d">ADMIN INTERFACE</nav>
    <div class="container d-flex justify-content-between">
        <a href="<?php echo BASE_URL;?>add" class="btn  mb-3" style="background-color: #259d21; color:#ffff">ADD NEW</a>
        <a href="<?php echo BASE_URL;?>logout" class="btn  mb-3" style="background-color: #de0505; color:#ffff">LOG OUT</a>
    </div>
   
    <div class="container">
    <?php include "./views/includes/alerts.php" ?>
    <table class="table table-hover text-center">
  <thead class="table" style="background-color: #21849d; color:aliceblue">
 
    <tr>
      <th scope="col">IMAGE</th>
      <th scope="col">DESTINATION</th>
      <th scope="col">DESCRIPTION</th>
      <th scope="col">PRICE</th>
      <th scope="col" >ACTION</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($products as $product):?>
    <tr>
      <th><img src="uploads/<?php echo $product['image'];?>" style="width: 50px; hieght:50px"></th>
      <td style="padding: 25px;"><?php echo $product['destination'];?></td>
      <td style="padding: 25px;"><?php echo $product['description'];?></td>
      <td style="padding: 30px;">from <?php echo $product['price'];?> $</td>
      <td class="d-flex flex-row ">
        <form method="POST" action="update" style="padding-top: 25px;">
        <input type="hidden" name="id" value="<?php echo $product['id'];?>">
        <button style="border: none;background-color:#ffff"><a href="" class="link-dark "><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a></button> 
        </form>
        <form method="POST" action="delete" style="padding-top: 25px;padding-bottom: 25px">
        <input type="hidden" name="id" value="<?php echo $product['id'];?>">
        <button style="border: none;background-color:#ffff"><a href="" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a></button>
        </form>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    </div>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>