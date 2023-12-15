<?php

require_once 'AbstractEntities/AbstractClass.php';
class Task extends AbstractEntity
{
    private $userId;
    private $title;
    private $description;
    private $dueDate;
    private $status;

    public function __construct($userId, $title, $description, $dueDate, $status = 'Incomplete', $createdAt = null, $updatedAt = null)
    {parent::__construct(null, $createdAt, $updatedAt); // Call the constructor of the parent class

        $this->userId = $userId;
        $this->title = $title;
        $this->description = $description;
        $this->dueDate = $dueDate;
        $this->status = $status;
    }

    // Getters
    public function getUserId()
    {
        return $this->userId;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getDueDate()
    {
        return $this->dueDate;
    }

    public function getStatus()
    {
        return $this->status;
    }


    // Setters

    public function setUserId()
    {
        return $this->userId;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }
}