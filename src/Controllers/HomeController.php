<?php

namespace BookkeeperApp\Controllers;

use BookkeeperApp\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->render('index');
    }
}
