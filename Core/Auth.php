<?php


namespace Core;


class Auth
{

    /**
     * Checks if the user is authorized or not
     * Returns true if authorized, false otherwise
     * @return boolean
     */
    public function isAuth()
    {
        if (isset($_SESSION["is_auth"])) {
            return $_SESSION["is_auth"];
        } else return false;
    }

    /**
     * User authorization
     * @param string $loginForm
     * @param string $loginDataBase
     * @param string $passwordForm
     * @param string $passwordDataBase
     * @return boolean
     */
    public function auth($loginForm, $loginDataBase, $passwordForm, $passwordDataBase)
    {
        if ($loginForm == $loginDataBase && $passwordForm == $passwordDataBase) {
            $_SESSION["is_auth"] = true;
            $_SESSION["login"] = $loginForm;
            return true;
        } else {
            $_SESSION["is_auth"] = false;
            return false;
        }
    }

    /**
     *Returns the login of the authorized user
     */
    public function getLogin()
    {
        if ($this->isAuth()) {
            return $_SESSION["login"];
        }
    }

    /**
     * Logout user
     */
    public function out()
    {
        $_SESSION = array();
        session_destroy();
    }
}