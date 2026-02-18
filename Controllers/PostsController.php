<?php
class PostsController {
    private $post;

    public function __construct($post){
        $this->post = $post;
    }

    public function listPosts(){
        $stmt = $this->post->getAll();
        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($posts);
    }

    // Métodos adicionais: getPost, createPost, updatePost, deletePost
}
