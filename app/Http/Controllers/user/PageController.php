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

   
}
