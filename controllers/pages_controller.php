<?php

class PagesController
{
    public function home()
    {
        require('view/pages/home.php');
    }

    public function error()
    {
        require('view/pages/error.php');
    }

    public function login()
    {
        require('view/pages/login.php');
    }
}


?>