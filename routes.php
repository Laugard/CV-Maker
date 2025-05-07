<?php
global $pdo;
require_once dirname(__FILE__) . '/controllers/UserController.php';
require_once dirname(__FILE__) . '/models/Cv.php';

$controller = new UserController($pdo);

$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

switch ($page) {
    case 'login':
        $controller->login();
        break;

    case 'register':
        $controller->register();
        break;

    case 'logout':
        $controller->logout();
        break;

    case 'form':
        if (!isset($_SESSION['user_id'])) {
            header('Location: index.php?page=login');
            exit;
        }
        require dirname(__FILE__) . '/views/cv/form.php';
        break;

    case 'dashboard':
    default:
        if (!isset($_SESSION['user_id'])) {
            header('Location: index.php?page=login');
            exit;
        }

        $cv = new Cv($pdo);
        $cvs = $cv->getAllByUser($_SESSION['user_id']);
        require dirname(__FILE__) . '/views/cv/list.php';
        break;
}
