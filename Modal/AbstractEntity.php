<?php
abstract class AbstractEntity {
    protected $id;
    protected $createdAt;
    protected $updatedAt;

    public function __construct($id, $createdAt = null, $updatedAt = null) {
        $this->id = $id;

        if ($createdAt === null) {
            $this->createdAt = date('Y-m-d H:i:s');
        } else {
            $this->createdAt = $createdAt;
        }

        if ($updatedAt === null) {
            $this->updatedAt = date('Y-m-d H:i:s');
        } else {
            $this->updatedAt = $updatedAt;
        }
    }

    // Getters
    public function getId() {
        return $this->id;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    // Setters
    public function setCreatedAt($createdAt) {
        $this->createdAt = $createdAt;
    }

    public function setUpdatedAt($updatedAt) {
        $this->updatedAt = $updatedAt;
    }
}
