
<?php

require_once __DIR__ . '/../DbConfig/connection.php';
require_once __DIR__ . '/../Entities/User.php';

class UserCRUD
{
    private static $db;

    public static function setDatabase(Database $dbObject)
    {
        self::$db = $dbObject;
    }
    public static function save(User $user): bool
    {
        try {
            $db = Database::getInstance();
            $connection = $db->getConnection();

            $query = "INSERT INTO `user` (username, email, `password`, created_at) VALUES (?, ?, ?, NOW())";
            $stmt = $connection->prepare($query);

            $username = $user->getUsername();
            $email = $user->getEmail();
            $password = $user->getPassword();

            $stmt->bind_param("sss", $username, $email, $password);

            $result = $stmt->execute();

            $stmt->close();

            return $result;
        } catch (Exception $e) {
            return false;
        }
    }


    public static function editUser(int $id, User $user): bool
    {
        try {
            $db = Database::getInstance();
            $connection = $db->getConnection();

            $query = "UPDATE `user` SET username = ?, email = ?, `password` = ? WHERE id = ?";
            $stmt = $connection->prepare($query);

            $userId = $id;
            $username = $user->getUsername();
            $email = $user->getEmail();
            $password = $user->getPassword();

            $stmt->bind_param("sssi", $username, $email, $password, $userId);

            $success = $stmt->execute();

            $stmt->close();

            return $success;
        } catch (Exception $e) {
            // Handle exceptions (e.g., log the error)
            return false;
        }
    }


    public static function deleteUser(User $user): bool
    {
        try {
            $db = Database::getInstance();
            $connection = $db->getConnection();

            $query = "DELETE FROM users WHERE id = ?";
            $stmt = $connection->prepare($query);

            $userId = $user->getId();

            $stmt->bind_param("i", $userId);

            $success = $stmt->execute();

            $stmt->close();

            return $success;
        } catch (Exception $e) {
            // Handle exceptions (e.g., log the error)
            return false;
        }
    }

    public static function getUserById(int $id): ?User
    {
        try {
            $db = Database::getInstance();
            $connection = $db->getConnection();

            $query = "SELECT * FROM `user` WHERE id = ?";
            $stmt = $connection->prepare($query);

            $stmt->bind_param("i", $id);

            $stmt->execute();

            $userId = $username = $email = $password = $roleId = $createdAt = $updatedAt = null;

            $stmt->bind_result($userId, $username, $email, $password, $roleId, $createdAt, $updatedAt);

            if ($stmt->fetch()){
                $stmt->close();
                return new User($userId, $username, $email, $password, $roleId, $createdAt, $updatedAt);
            }else{
                $stmt->close();
                return null;
            }

           

            if ($userId !== null) {
            } else {
                return null; 
            }
        } catch (Exception $e) {
            // Handle exceptions (e.g., log the error)
            return null;
        }
    }

    // public static function isEmailTaken(string $email): bool
    // {
    //     return self::isCredentialTaken('email', $email);
    // }

    
    public function getUserByField($field, $value): ?User {
        // Fetch user from the database based on the provided field and value
        $query = "SELECT * FROM `user` WHERE $field = ?";
        $stmt = $this->db->getConnection()->prepare($query);
        $stmt->bind_param("s", $value);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $userData = $result->fetch_assoc();
            return new User($userData['id'], $userData['username'], $userData['email'], $userData['password'], null, null, null);
        } else {
            return null;
        }
    }


    
}

?>
