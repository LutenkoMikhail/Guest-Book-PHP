<?php


namespace App\Controllers;

use App\Model\Post;
use Core\Controller;
use Core\View;

class PostController extends Controller
{
    protected $post = null;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->post = new Post();
    }

    /**
     * Show all posts
     */
    public function index()
    {
        if (!empty($_SESSION["is_auth"])) {
            $posts = $this->post->getAllPostNotPublished();
            $view = 'admin/index.php';
        } else {
            $posts = $this->post->getAllPostInPublished();
            $view = 'post/index.php';
        }
        View::render($view, [
            'posts' => $posts
        ]);
    }

    /**
     * Created post
     */
    public function create()
    {
        View::render('post/create.php');
    }

    /**
     * Save post
     */
    public function store()
    {
        $dataPost = filter_input_array(INPUT_POST, $_POST, 1);
        $modelData = [
            'user_name' => $dataPost['user_name'],
            'email' => $dataPost['email'],
            'message' => $dataPost['message'],
            'is_published' => false,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ];
        $this->post->insert($modelData);
        $postID = $this->post->getLastInsertId();
        httpRedirect('/');
    }

    /**
     * Publication post
     */
    public function publication(int $id)
    {
        if (!empty($_SESSION["is_auth"])) {
            $this->post->updatePost($id);
        }

        httpRedirect('/');
    }

    /**
     * Delete post
     */
    public function delete(int $id)
    {
        if (!empty($_SESSION["is_auth"])) {
            $this->post->deletePost($id);
        }
        httpRedirect('/');
    }
}