<?php

namespace MyApp\Model\Entity;

class CommentEntity
{
    private $id;
    private $user_id;
    private $property_id;
    private $comment;
    private $created_at;

    // Constructor
    public function __construct($id, $user_id, $property_id, $comment, $created_at)
    {
        $this->id = $id;
        $this->user_id = $user_id;
        $this->property_id = $property_id;
        $this->comment = $comment;
        $this->created_at = $created_at;
    }

    // Getters
    public function getId()
    {
        return $this->id;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function getPropertyId()
    {
        return $this->property_id;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }
}