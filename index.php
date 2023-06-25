<?php

require_once 'Database/Database.php';
require_once 'Requests/CreateMessageRequest.php';
require_once 'Controllers/CreateMessageController.php';
require_once 'Controllers/ShowCreateMessageController.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $request = CreateMessageRequest::createFromPHPRequest();
    $view = (new CreateMessageController)($request);
} else {
    $view = (new ShowCreateMessageController)();
}

(function () use ($view) {

    $_SESSION['csrfToken'] = bin2hex(random_bytes(32));
    $csrfToken = $_SESSION['csrfToken'];

    extract($view->data);

    require_once "Views/{$view->name}.php";
})();