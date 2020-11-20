@extends('admin.sanpham.sidebar')
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><b>Sản Phẩm</b></h4>
                            <a href="{{route('sanpham.create')}}" class="btn btn-success">Thêm mới</a>
                            <br>
                        </div>
                        <div class="panel-body">
                            <div class="bootstrap-table">
                                <table>            
                                    <tr class="">
                                        <th> ID</th>
                                        <th  width="50%"> Tên Sản Phẩm</th>
                                        <th> Mã Loại</th>
                                        <th>Giá</th>
                                        <th>Giá Mới</th>
                                        <th>Hình Ảnh</th>
                                        <th>Size</th>
                                        <th>Số Lượng</th>
                                        <th> Trạng Thái</th>
                                        <th width="70%">Tùy chọn</th>
                                    </tr>
                            
                                    @foreach($sanphams ?? '' as  $sanpham)
                                        <tr>
                                            <td style="text-align:center">{{$sanpham->id}}</td>
                                            <td style="text-align:center">{{$sanpham->TenSP}}</td>
                                            <td style="text-align:center"> {{$sanpham->MaLoai}}</td>
                                            <td style="text-align:center">{{$sanpham->Gia}}</td>
                                            <td style="text-align:center">{{$sanpham->GiaMoi}}</td>
                                            <td><img class="img-thumbnail" src="{{asset('image/'.$sanpham->Image)}}"></td>
                                            <td style="text-align:center">{{$sanpham->Size}}</td>
                                            <td style="text-align:center">{{$sanpham->SoLuong}}</td>
                                            <td style="text-align:center">{{$sanpham->TrangThai}}</td>
                                            <td>
                                            <form action="{{route('sanpham.destroy', $sanpham->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                <a href="{{route('sanpham.edit',$sanpham->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
                                                <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </td>
                                            </form>
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
