<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Nhacungcap;
use App\Models\SanPham;
use Illuminate\Http\Request;
use App\Models\LoaiSP;
use Session;
class LoaispController extends Controller
{
    //
    public function __construct()
    {
        //$this->middleware('CheckAdminLogin');
        $this->viewprefix='admin.LoaiSP.';
        $this->viewnamespace='panel/LoaiSP';
    }
    public function index()
    {
        $loaisp = LoaiSP::all();
        return view($this->viewprefix.'index')->with('cate', $loaisp);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->viewprefix.'create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $loaisp = new LoaiSP();
        $this->validate($request, [
            'tenloai'=>'required',
            'nhacungcap'=>'required',
            'trangthai' => 'required',
        ]);
        // $request->image = $this->imageUpload($request);
        $loaisp->tenloai=$request->tenloai;
        $loaisp->nhacungcap=$request->nhacungcap;
        $loaisp->trangthai=$request->trangthai;
        if($loaisp->save())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('loaisp.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(LoaiSP $loaisp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(LoaiSP $loaisp)
    {
        return view($this->viewprefix.'edit')->with('loaisp', $loaisp);
        // return view($this->viewprefix.'edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoaiSP $loaisp)
    {
        $this->validate($request, [
            'tenloai'=>'required',
            'nhacungcap'=>'required',
            'trangthai' => 'required',

        ]);
        if($loaisp->update($request->all()))
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('loaisp.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */

    public function splist($id){
        $loaisanpham=LoaiSP::find($id);
        $sanphams=LoaiSP::findOrFail($id)->sanpham;
        return view($this->viewprefix.'splist',compact('loaisanpham','sanphams'));
    }
    public function destroy(LoaiSP $loaisp)
    {
        if($loaisp->delete())
            Session::flash('message', 'successfully!');
        else
            Session::flash('message', 'Failure!');
        return redirect()->route('loaisp.index');
    }
}
