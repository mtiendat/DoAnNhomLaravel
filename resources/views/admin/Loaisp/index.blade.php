@extends('admin.Loaisp.sidebar')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Loại Sản Phẩm
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{route('loaisp.create')}}" class="btn btn-success">Thêm mới</a>
                                </div>
                            </h4>
                        </div>
                        <div class="panel-body">
                            <div class="bootstrap-table">
                                <table>
                                    
                                    <tr>       
                                        <th> Tên Loại</th>
                                        <th> Nhà Cung Cấp </th>
                                        <th> Trạng Thái</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                    
        
                                    @foreach($cate ??'' as $cates)
                                        <tr>
                                        <form action="{{route('loaisp.destroy', $cates->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                            <td style="text-align:center">{{$cates->tenloai}}</td>
                                            <td style="text-align:center">{{$cates->nhacungcap}}</td>
                                            <td style="text-align:center">{{$cates->trangthai}}</td>
                                            <td><a href="{{route('loaisp.edit', $cates->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
                                            <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </td>                              
                                            </form>
                                        </tr>
                                    @endforeach
                

                                </table>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



 @stop
