<?php
require_once __DIR__ . '/../AbstractEntity.php';
class User extends AbstractEntity
{
    private $username;
    private $email;
    private $password;
    private $roleId;

    public function __construct($id, $username, $email, $password, $roleId, $createdAt, $updatedAt) {
        parent::__construct($id, $createdAt, $updatedAt);
        
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->roleId = $roleId;
    }

    // Getters

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getRoleId() {
        return $this->roleId;
    }


    // Setters
    public function setUsername($username) {
        $this->username = $username;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setRoleId($roleId) {
        $this->roleId = $roleId;
    }
}

