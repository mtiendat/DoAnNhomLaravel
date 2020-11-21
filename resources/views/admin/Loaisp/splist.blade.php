@extends('admin.sanpham.sidebar')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Danh sách Sản Phẩm Thuộc Loại Sản Phầm <b>"{{$loaisanpham->tenloai}}"</b>
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


                                    @foreach($sanphams ??'' as $cates)
                                        <tr>
                                            <form action="{{route('sanpham.destroy', $cates->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <td style="text-align:center">{{$cates->TenSP}}</td>
                                                <td style="text-align:center">{{$cates->Gia}}</td>
                                                <td style="text-align:center">{{$cates->GiaMoi}}</td>
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
