<?php

include "view/nav.php";
include "view/header.php";
if(isset($_GET['act']) && $_GET['act']){
    switch ($_GET['act']) {

        // case 'home':
        //     include "view/home.php";
        // break;

        case 'shop':
            include "view/shop.php";
        break;
        
        case 'blog':
            include "view/blog.php";
        break;

        case 'about':
            include "view/about.php";
        break;

        case 'contact':
            include "view/contact.php";
        break;

        case 'cart':
            include "view/cart.php";
        break;

        case 'product-detail':
            include "view/product-detail.php";
        break;

        case 'checkout':
            include "view/checkout.php";
        break;

        case 'order-complete':
            include "view/order-complete.php";
        break;

        case 'add-to-wishlist':
            include "view/add-to-wishlist.php";
        break;

        // case 'account':
        //     include "view/dangnhap.php";
        // break;

        case 'reg':
            include "view/registration.php";
        break;

        case 'login':
            include "view/login.php";
        break;
        default:
            include "view/home.php";
            break;
    }
}else{
    include "view/home.php";
}

include "view/footer.php";
?>
