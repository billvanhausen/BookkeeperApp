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
}
