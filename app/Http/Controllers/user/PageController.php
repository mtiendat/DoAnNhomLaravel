<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\LoaiSP;
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
        $latesproducts = SanPham::where('DanhMuc',1)->paginate(3);
        return view($this->viewprefix.'index',compact('latesproducts'));
    }
    public function index_single()
    {

        return view($this->viewprefix.'index_single');
    }

    public function about()
    {

        return view($this->viewprefix.'about');
    }

    public function smartphone()
    {

        return view($this->viewprefix.'smartphone');
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
    public function laptop(){
    $laptop = SanPham::where('MaLoai',3)->orwhere('MaLoai',4)->get();
    return view($this->viewprefix.'laptop',compact('laptop'));
   }
    public function contact(){
        return view($this->viewprefix.'contact');
    }


    public function single(Request $request, $id){
        $sanpham = SanPham::where('id',$request->id)->get();
        return view($this->viewprefix.'single',compact('sanpham'));
    }

    public function single(Request $request){
        $sanpham = SanPham::where('id',$request->id)->first();
        $sanpham_lienquan=SanPham::where('MaLoai', $sanpham->MaLoai)->paginate(4);
        return view($this->viewprefix.'single',compact('sanpham','sanpham_lienquan'));

    }

    public function smartphone(){
        $smartphone=SanPham::where('MaLoai',1)->orWhere('MaLoai',2)->get();
        return view($this->viewprefix.'smartphone',compact('smartphone'));
    }


}
