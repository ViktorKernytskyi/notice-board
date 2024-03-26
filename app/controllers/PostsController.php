<?php

require_once 'app/models/Post.php';
class PostsController
{
    public function index() {
        $posts = Post::getAll();
        require 'app/views/posts/index.php';
    }

}