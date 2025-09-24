<?php

namespace BookkeeperApp\Controllers;

use BookkeeperApp\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->render('index');
    }
    public function phpinfo()
    {
        $this->render('phpinfo');
    }
    public function pdf()
    {
        $this->render('pdf');
    }
    /*
    public function showProfile($userId)
    {
        // ... (retrieve user data from Model) ...
        $user = ['name' => 'John Doe', 'email' => 'john@example.com']; 

        $view = new View('views/profile.phtml');
        $view->assign('user', $user);
        echo $view->render();
    }
    */
}
