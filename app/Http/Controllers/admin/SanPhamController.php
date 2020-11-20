<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\LoaiSP;
use Illuminate\Http\Request;
use App\Models\SanPham;
use Session;

class SanPhamController extends Controller
{
    //

    public function __construct()
    {
        $this->viewprefix='admin.sanpham.';
        $this->viewnamespace='admin/sanpham';
    }
    public function index()
    {
        $sanphams = SanPham::all();
        return view($this->viewprefix.'index', compact('sanphams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
   **/

    public function create()
    {
        //
        return view($this->viewprefix.'create');
    }

    public function imageUpload(Request $request){
        if($request->hasFile('Image')){
            if($request->file('Image')->isValid()){
                $request->validate(['Image'=>'required|image|mimes:jpeg,jpg,png|max:2048',]);
                $imageName = time().'.'.$request->Image->extension();
                $request->Image->move(public_path('image'),$imageName);
                return $imageName;
            }
        }
        return 'x';
    }
    public function store(Request $request)
    {
        //
        $sanpham= new SanPham;
        $this->validate($request, [
            'TenSP' => 'required',
            'MaLoai' => 'required',
            'Gia' => 'required',
            'GiaMoi' => 'required',
            'Image' => 'required',
            'Size' => 'required',
            'SoLuong'=>'required',
            'TrangThai'=>'required',
        ]);
        $sanpham->TenSP=$request->TenSP;
        $sanpham->MaLoai=$request->MaLoai;
        $sanpham->Gia=$request->Gia;
        $sanpham->GiaMoi=$request->GiaMoi;
        $sanpham->Image=$this->imageUpload($request);
        $sanpham->Size=$request->Size;
        $sanpham->SoLuong=$request->SoLuong;
        $sanpham->TrangThai=$request->TrangThai;
        //if(Category::create($request->all()))
        if($sanpham->save())
        {
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('sanpham.index');
    }

    public function edit(SanPham $sanpham)
    {
        return view($this->viewprefix.'edit')->with('sanpham', $sanpham);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SanPham  $sanPham
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, SanPham $sanpham)
    {
        $data=$request->validate([
            'TenSP' => 'required',
            'MaLoai' => 'required',
            'Gia' => 'required',
            'GiaMoi' => 'required',
            'Image' => 'required',
            'Size' => 'required',
            'SoLuong'=>'required',
            'TrangThai'=>'required',
        ]);    
        
        $data['Image']=$this->imageUpload($request);
        
        //if(Category::create($request->all()))
        if($sanpham->update($data))
        {
            Session::flash('message', 'successfully!');
        }
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('sanpham.index');
    }
    public function destroy(SanPham $sanpham)
    {
        if($sanpham->delete())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('loaisp.index');
    }
}
