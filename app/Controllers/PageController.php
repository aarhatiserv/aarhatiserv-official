<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PageController extends BaseController
{
    public function index()
    {
        // echo "welcome to pagecontroller";
        echo view('templates/header');
        echo view('pages/home');
        echo view('templates/footer');
    }
    public function view($page = 'home')
    {
        $data['title'] = ucfirst($page);
        // echo "options $data";
        
        
        echo view('templates/header' , $data);
        // echo view('templates/navbar' , $data);
        echo view('pages/' .$page, $data);
        echo view('templates/footer' , $data);
    }
}
