<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function __construct()
    {
        $this->viewprefix='user.pages.';
        $this->viewnamespace='user/page';
    }
    public function index()
    {

        return view($this->viewprefix.'index');
    }
    public function index_single()
    {

        return view($this->viewprefix.'index_single');
    }

    public function about()
    {

        return view($this->viewprefix.'about');
    }

    public function men()
    {

        return view($this->viewprefix.'men');
    }
    public function register()
    {

        return view($this->viewprefix.'register');
    }
    public function login()
    {

        return view($this->viewprefix.'login');
    }

    public function checkout()
    {
        return view($this->viewprefix.'checkout');
    }

    public function contact(){
        return view($this->viewprefix.'contact');
    }
    
    public function single(){
        return view($this->viewprefix.'single');
    }

}
