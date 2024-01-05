<?php

namespace MyApp\Controllers;

use MyApp\Model\Dao\CommentDao;
use MyApp\Model\Entity\CommentEntity;

class CommentController
{
    private $commentDao;

    public function __construct()
    {
        $this->commentDao = new CommentDao();
    }

    public function index()
    {
        $comments = $this->commentDao->getAllComments();
        $totalComments = count($comments);
        // You can pass $comments and $totalComments to the view
        // Example: return view('comments', ['comments' => $comments, 'totalComments' => $totalComments]);
    }

    public function store()
    {
        // Retrieve the form data
        $user_id = $_POST['user_id'];
        $property_id = $_POST['property_id'];
        $comment = $_POST['comment'];

        // Validate input if needed

        $result = $this->commentDao->createComment($user_id, $property_id, $comment);

        if ($result) {
            // Comment created successfully
            // Redirect or return success response
        } else {
            // Failed to create comment
            // Redirect or return error response
        }
    }

    public function reply($comment_id)
    {
        // Retrieve the form data
        $user_id = $_POST['user_id'];
        $property_id = $_POST['property_id'];
        $comment = $_POST['comment'];

        // Validate input if needed

        $result = $this->commentDao->createComment($user_id, $property_id, $comment, $comment_id);

        if ($result) {
            // Reply created successfully
            // Redirect or return success response
        } else {
            // Failed to create reply
            // Redirect or return error response
        }
    }

    public function delete($comment_id)
    {
        $result = $this->commentDao->deleteComment($comment_id);

        if ($result) {
            // Comment deleted successfully
            // Redirect or return success response
        } else {
            // Failed to delete comment
            // Redirect or return error response
        }
    }
}