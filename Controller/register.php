<?php
// Include necessary files

require_once __DIR__ . '/../Modal/DbConfig/connection.php';
require_once 'authentification.php';

$db = Database::getInstance();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!empty($_POST['userNameInput']) && !empty($_POST['emailInput']) && !empty($_POST['pswdInput']) && !empty($_POST['cfrmPswdInput'])) {

        $userAuth = new Authentication($db);

        $password = $_POST['pswdInput'];

        if (strlen($password) < 8) {
            $registrationError = 'Password must be at least 8 characters long.';
        } elseif (!preg_match('/[A-Za-z]/', $password) || !preg_match('/\d/', $password)) {
            $registrationError = 'Password must contain both letters and numbers.';
        } elseif ($_POST['pswdInput'] !== $_POST['cfrmPswdInput']) {
            $registrationError = 'Passwords do not match.';
        } else {

            $username = $_POST['userNameInput'];
            $email = $_POST['emailInput'];

            if ($userAuth->register($username, $email, $password)) {
                header('Location: ../View/login-signup/login.php');
                exit();
            } else {
                $registrationError = 'Registration failed. Please try again.';
            }
        }

    }
}
