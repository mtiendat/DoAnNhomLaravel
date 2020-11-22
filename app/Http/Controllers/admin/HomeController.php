<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\LoaiSP;
use App\Models\Nhacungcap;
use App\Models\SanPham;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function __construct()
    {
        $this->viewprefix='admin.home.';
        $this->viewnamespace='admin/home';
    }
    public function index()
    {
        $sanpham=SanPham::all();
        $user=User::all();
        $loaisp=LoaiSP::all();
        $nhacungcap=Nhacungcap::all();
        return view($this->viewprefix.'index',compact('sanpham','user','loaisp','nhacungcap'));
    }
}
