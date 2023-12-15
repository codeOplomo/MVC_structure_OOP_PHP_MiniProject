<?php
// require_once __DIR__ .'/../Modal/connection.php';

require_once __DIR__ . '/../Modal/DbConfig/connection.php';
require_once __DIR__ .'/authentification.php';

$db = Database::getInstance();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['userNameInput']) && !empty($_POST['pswdInput'])) {

        $userAuth = new Authentication($db);
        
        $username = $_POST['userNameInput'];
        $password = $_POST['pswdInput'];

        if ($userAuth->login($username, $password)) {
            header('Location: dashboard.php');
            exit();
        } else {
            $loginError = 'Invalid username or password';
        }
    }
}
?>