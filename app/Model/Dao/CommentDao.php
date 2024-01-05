<?php

namespace MyApp\Model\Dao;

use MyApp\Config\DbConnection;
use MyApp\Model\Entity\CommentEntity;
use PDO;

class CommentDao
{
    private $db;

    public function __construct()
    {
        $this->db = DbConnection::getInstance()->getConnection();
    }

    public function getAllComments()
    {
        $query = "SELECT * FROM comments";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        $comments = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $comment = new CommentEntity(
                $row['id'],
                $row['user_id'],
                $row['property_id'],
                $row['comment'],
                $row['created_at']
            );
            $comments[] = $comment;
        }

        return $comments;
    }

    public function createComment($user_id, $property_id, $comment)
    {
        $query = "INSERT INTO comments (user_id, property_id, comment) VALUES (:user_id, :property_id, :comment)";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':property_id', $property_id);
        $stmt->bindParam(':comment', $comment);
        return $stmt->execute();
    }

    public function updateComment($comment_id, $comment)
    {
        $query = "UPDATE comments SET comment = :comment WHERE id = :comment_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':comment', $comment);
        $stmt->bindParam(':comment_id', $comment_id);
        return $stmt->execute();
    }

    public function deleteComment($comment_id)
    {
        $query = "DELETE FROM comments WHERE id = :comment_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':comment_id', $comment_id);
        return $stmt->execute();
    }
}