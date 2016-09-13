<?php

namespace app\Controllers;

use Eboo\Base\Controller;
use Eboo\Request;
use Eboo\Response;

class HomeController extends Controller
{
    public function getHome(Request $request)
    {
        return (new Response('testing',200));
    }

    public function getTest($id)
    {
        return $this->view('welcome.html',['header' => 'Welcome to this page']);
    }
}
