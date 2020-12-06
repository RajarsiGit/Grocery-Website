<?php
    session_start();

    switch ($_SERVER['REQUEST_URI']) {
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
        case '/product' :
            require __DIR__ . '/product.php';
            break;
        case '/household' :
            require __DIR__ . '/household.php';
            break;
        case '/fruit' :
            require __DIR__ . '/fruit.php';
            break;
        case '/vegetable' :
            require __DIR__ . '/vegetable.php';
            break;
        case '/softdrink' :
            require __DIR__ . '/softdrink.php';
            break;
        case '/juice' :
            require __DIR__ . '/juice.php';
            break;
        case '/energydrink' :
            require __DIR__ . '/energydrink.php';
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
        case '/spice' :
            require __DIR__ . '/spice.php';
            break;
        case '/dairy' :
            require __DIR__ . '/dairy.php';
            break;
        case '/dryfruit' :
            require __DIR__ . '/dryfruit.php';
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
        case '/forgot' :
            require __DIR__ . '/forgot.php';
            break;
        case '/register' :
            require __DIR__ . '/register.php';
            break;
        case '/example' :
            require __DIR__ . '/example.php';
            break;
        case '/admin' :
            require __DIR__ . '/admin.php';
            break;
        default:
            if(stristr($_SERVER['REQUEST_URI'], '/password?token=')) {
                $_SESSION['token'] = substr($_SERVER['REQUEST_URI'], strlen('/password?token='));
                require __DIR__ . '/password.php';
                break;
            }
            require __DIR__ . '/notfound.php';
            break;
    }
?>