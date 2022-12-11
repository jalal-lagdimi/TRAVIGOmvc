<?php
require_once './views/includes/header.php';
require_once './autoload.php';
require_once './controllers/HomeController.php';

$home = new HomeController();

$pages = ['dashbord','add','update','delete','login','logout','about','contact','contact','home','tours'];

if(isset($_SESSION['logged']) && $_SESSION['logged']===true){

    if(isset($_GET['page'])){
        if(in_array($_GET['page'],$pages)){
            $page = $_GET['page'];
            $home->index($page);
        } else {
            include('views/includes/404.php');
        }
    } else{
        $home->index('home');
    }
    
    
        
    require_once './views/includes/footer.php';
    
    
} else if(isset($_GET['page']) && $_GET['page'] === 'login'){
    $home->index('login');
} else {
    $home->index('login');
}
?>

