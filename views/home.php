<?php
$data = new ProductController();
$products = $data->getAllProducts();

?>

<div class="container mt-3">
   <a href="<?php echo BASE_URL;?>add" class="btn btn-primary">ADD</a>
    <table class="table">
        <thead>
            <th>IMAGE</th>
            <th>DESTINATION</th>
            <th>DESCRIPTION</th>
            <th>PRICE</th>
            <th>ACTION</th>
        </thead>
        <tbody>
            <?php foreach($products as $product):?>
            <tr>
                <td><?php echo $product['image'];?></td>
                <td><?php echo $product['destination'];?></td>
                <td><?php echo $product['description'];?></td>
                <td><?php echo $product['price'];?></td>
                <td class="d-flex flex-row">
                    <form method="POST" class="me-1" action="update">
                        <input type="hidden" name="id" value="<?php echo $product['id'];?>">
                        <button class="btn btn-sm btn-warning"><i class="fa fa-eidt"></i></button>
                        
                    </form>
                    <form method="POST" class="me-1" action="delete">
                        <input type="hidden" name="id" value="<?php echo $product['id'];?>">
                        <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                    </form>
                    
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
