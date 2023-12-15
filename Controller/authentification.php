<?php

require_once __DIR__ . '/../Modal/EntityImplementation/UserImplementation.php';
require_once __DIR__ . '/../Modal/EntityCrud/UserCrud.php';

class Authentication {
    private $db;

    public function __construct(Database $dbObject) {
        $this->db = $dbObject;
    }

// Registration section

    public function register($username, $email, $password) {
        $userEntity = new UserEntity();
        $userCRUD = new UserCRUD();
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid input. Please provide valid information.";
            return false; 
        }

        // Check if the email is already registered
        // $userEntity = new UserEntity();
        // $existingUser = $userEntity->fetchByEmail($email);

        // if ($existingUser) {
        //     echo "Email is already registered. Please choose a different email.";
        //     return;
        // }

        $escapedUsername = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        if ($userCRUD->getUserByField('username', $escapedUsername) || $userCRUD->getUserByField('email', $email)) {
            echo "Email or username is already registered. Please choose a different ones.";
            return false; // Username or email is already taken
        }

        $user = new User(null, $escapedUsername, $email, $hashedPassword, null, null, null);

        // $query = "INSERT INTO user (username, email, `password`, created_at) VALUES (?, ?, ?, NOW())";
        // $stmt = $this->db->getConnection()->prepare($query);
        // $stmt->bind_param("sss", $escapedUsername, $email, $hashedPassword);

        // if ($stmt->execute()) {
        //     return true;
        // } else {
        //     return false;
        // }

        // Use the UserEntity to register the user
        if ($userEntity->create($user)) {
            echo "Registration successful. You can now log in.";
        } else {
            echo "Failed to register the user.";
        }

    }


// Login section


    public function login($username, $password) {
        
        $userCRUD = new UserCRUD();
        
        $escapedUsername = htmlspecialchars($username, ENT_QUOTES, 'UTF-8');

        $user = $userCRUD->getUserByField($escapedUsername);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                // Password is correct, login successful
                return true;
            }
        }

        // Username or password is incorrect, login failed
        return false;
    }

    

// Logout section

    public function logout() {
        
        session_unset(); 
        session_destroy(); 

        return true; // Logout successful
    }
}
?>
