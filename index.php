<?php
    session_start();
    $request = $_SERVER['REQUEST_URI'];

    switch ($request) {
        case '/' :
            require __DIR__ . '/home.php';
            break;
        case '' :
            require __DIR__ . '/home.php';
            break;
        case '/home' :
            require __DIR__ . '/home.php';
            break;
        case '/about' :
            require __DIR__ . '/about.php';
            break;
        case '/products' :
            require __DIR__ . '/products.php';
            break;
        case '/household' :
            require __DIR__ . '/household.php';
            break;
        case '/fruits' :
            require __DIR__ . '/fruits.php';
            break;
        case '/vegetables' :
            require __DIR__ . '/vegetables.php';
            break;
        case '/softdrinks' :
            require __DIR__ . '/softdrinks.php';
            break;
        case '/juices' :
            require __DIR__ . '/juices.php';
            break;
        case '/energydrinks' :
            require __DIR__ . '/energydrinks.php';
            break;
        case '/pet' :
            require __DIR__ . '/pet.php';
            break;
        case '/frozen' :
            require __DIR__ . '/frozen.php';
            break;
        case '/bread' :
            require __DIR__ . '/bread.php';
            break;
        case '/checkout' :
            require __DIR__ . '/checkout.php';
            break;
        case '/events' :
            require __DIR__ . '/events.php';
            break;
        case '/services' :
            require __DIR__ . '/services.php';
            break;
        case '/faqs' :
            require __DIR__ . '/faqs.php';
            break;
        case '/privacy' :
            require __DIR__ . '/privacy.php';
            break;
        case '/mail' :
            require __DIR__ . '/mail.php';
            break;
        case '/profile' :
            require __DIR__ . '/profile.php';
            break;
        case '/login' :
            require __DIR__ . '/login.php';
            break;
        case '/register' :
            require __DIR__ . '/register.php';
            break;
        case '/payment' :
            require __DIR__ . '/payment.php';
            break;
        case '/example' :
            require __DIR__ . '/example.php';
            break;
        case '/admin' :
            require __DIR__ . '/admin_db.php';
            break;
        default:
        require __DIR__ . '/notfound.php';
    break;
    }
?>