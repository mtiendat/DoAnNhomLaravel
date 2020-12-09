<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\LoaiSP;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;
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
        $newproducts = SanPham::where('DanhMuc',1)->paginate(3);
        return view($this->viewprefix.'index',compact('latesproducts','newproducts'));
    }
    public function index_single()
    {

        return view($this->viewprefix.'index_single');
    }

    public function about()
    {
        $relatedproduct = SanPham::where('DanhMuc',3)->paginate(4);
        return view($this->viewprefix.'about', compact('relatedproduct')) ;
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

    public function single($id){

        $sanpham = SanPham::where('id',$id)->first();
        $sanpham_lienquan=SanPham::where('MaLoai', $sanpham->MaLoai)->paginate(4);
        return view($this->viewprefix.'single',compact('sanpham','sanpham_lienquan'));

    }

    public function smartphone(){
        $smartphone=SanPham::where('MaLoai',1)->orWhere('MaLoai',2)->get();
        return view($this->viewprefix.'smartphone',compact('smartphone'));
    }

    public function postDangNhap(Request $req){
        $this->validate($req,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:20'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Email không đúng định dạng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự',
                'password.max'=>'Mật khẩu không quá 20 kí tự'
            ]
        );
        $credentials = array('email'=>$req->email,'password'=>$req->password);
        $user = User::where([
                ['email','=',$req->email],
                ['status','=',NULL]
            ])->first();
        if($user){
            if(Auth::attempt($credentials)){

            return redirect()->route('user.index')->with(['flag'=>'success','message'=>'Đăng nhập thành công']);
            }
            else{
                return redirect()->back()->with(['flag'=>'danger','message'=>'Đăng nhập không thành công']);
            }
        }
        else{
           return redirect()->back()->with(['flag'=>'danger','message'=>'Tài khoản chưa kích hoạt']);
        }

    }

    public function DangKy(Request $req){
        $this->validate($req,
            [
                'hoten'=>'required',
                'name'=>'required',
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|max:20',
                're_password'=>'required|same:password'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'password.required'=>'Vui lòng nhập mật khẩu',
                're_password.same'=>'Mật khẩu không giống nhau',
                'password.min'=>'Mật khẩu ít nhất 6 kí tự'
            ]);
        $user = new User();
        $user->hoten=$req->hoten;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect()->route('user.login')->with('thanhcong','Tạo tài khoản thành công');
    }

    public function LogOut(){
        Auth::logout();
        return redirect()->route('user.index');
    }

}
