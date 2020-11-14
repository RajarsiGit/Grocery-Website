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
            require __DIR__ . '/products.html';
            break;
        case '/household' :
            require __DIR__ . '/household.html';
            break;
        case '/vegetables' :
            require __DIR__ . '/vegetables.html';
            break;
        case '/drinks' :
            require __DIR__ . '/drinks.html';
            break;
        case '/pet' :
            require __DIR__ . '/pet.html';
            break;
        case '/frozen' :
            require __DIR__ . '/frozen.html';
            break;
        case '/bread' :
            require __DIR__ . '/bread.html';
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
        default:
            http_response_code(404);
            break;
    }
?>