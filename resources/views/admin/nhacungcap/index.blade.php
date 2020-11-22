@extends('admin.nhacungcap.sidebar')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Loại Sản Phẩm
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{route('nhacungcap.create')}}" class="btn btn-success">Thêm mới</a>
                                </div>
                            </h4>
                        </div>
                        <div class="panel-body">
                            <div class="bootstrap-table">
                                <table>
                                    
                                    <tr>       
                                        <th> Tên Nhà Cung Cấp</th>
                                        <th> Địa Chỉ</th>
                                        <th> Trạng Thái</th>
                                        <th> Xem sản phẩm</th>
                                        <th>Tùy chọn</th>
                                    </tr>
                    
        
                                    @foreach($nhacungcap ??'' as $ncc)
                                        <tr>
                                        <form action="{{route('nhacungcap.destroy', $ncc->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                            <td style="text-align:center">{{$ncc->tenncc}}</td>
                                            <td style="text-align:center">{{$ncc->diachi}}</td>
                                            <td style="text-align:center">{{$ncc->trangthai}}</td>
                                            <td><a href="{{route('nhacungcap.loaisplist', $ncc->id)}}" class="btn btn-outline-primary"><i class="fa fa-eye"></i></a></td>
                                            <td><a href="{{route('nhacungcap.edit', $ncc->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></a>
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
