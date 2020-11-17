<?php
    session_start();
    $request = $_SERVER['REQUEST_URI'];

    switch ($request) {
        case '/' :
            require __DIR__ . '/home.html';
            break;
        case '' :
            require __DIR__ . '/home.html';
            break;
        case '/home' :
            require __DIR__ . '/home.html';
            break;
        case '/about' :
            require __DIR__ . '/about.html';
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
            require __DIR__ . '/checkout.html';
            break;
        case '/events' :
            require __DIR__ . '/events.html';
            break;
        case '/services' :
            require __DIR__ . '/services.html';
            break;
        case '/faqs' :
            require __DIR__ . '/faqs.html';
            break;
        case '/privacy' :
            require __DIR__ . '/privacy.html';
            break;
        case '/mail' :
            require __DIR__ . '/mail.html';
            break;
        case '/login' :
            require __DIR__ . '/login.html';
            break;
        case '/register' :
            require __DIR__ . '/register.html';
            break;
        case '/payment' :
            require __DIR__ . '/payment.html';
            break;
        case '/example' :
            require __DIR__ . '/example.php';
            break;
        default:
            http_response_code(404);
            break;
    }
?>