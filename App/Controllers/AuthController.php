<?php


namespace App\Controllers;

use Core\Controller;
use Core\Auth;
use Core\View;
use App\Model\User;

class AuthController extends Controller
{
    protected $user = null;
    protected $authUser = null;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->user = new User();
        $this->authUser = new Auth();
    }

    /**
     * User authorization
     */
    public function login()
    {
        View::render('auth/login.php');

    }

    /**
     * User authorization
     */
    public function auth()
    {
        $dataPost = filter_input_array(INPUT_POST, $_POST, 1);
        $loginForm = $dataPost['textFirstName'];
        $passwordForm = $dataPost['password'];

        $findUser = $this->user->getUser($loginForm);
        if ($findUser === false) {
            httpRedirect('/login');
        }
        $loginDataBase = $findUser[0]['name'];
        $passwordDataBase = $findUser[0]['password'];
        if ($this->authUser->auth($loginForm, $loginDataBase, $passwordForm, $passwordDataBase) === false) {
            httpRedirect('/login');
        }
        httpRedirect('/home');
    }

    /**
     * Logout user
     */
    public function logout()
    {
        $this->authUser->out();
        httpRedirect('/home');
    }
}