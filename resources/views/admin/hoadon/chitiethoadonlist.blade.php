@extends('admin.chitiethoadon.sidebar')
@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><b>Chi Tiết Hóa Đơn của ID Hóa Đơn : {{$hoadon->id}}</b></h4>
                        
                        </div>
                        <div class="panel-body">
                            <div class="bootstrap-table">
                                <table>            
                                    <tr class="">
                                        <th > ID</th>
                                        
                                        <th style="text-align:center" width="5%">ID_HoaDon</th>
                                        <th style="text-align:center" width="20%">Tên Sản Phẩm</th>
                                        <th style="text-align:center" width="10%">Số Lượng</th>
                                        <th style="text-align:center" width="10%">Giá</th>
                                        <th style="text-align:center" width="10%">Khuyến Mãi</th>
                                        <th style="text-align:center" width="20%">Thành Tiền</th>
                                        <th style="text-align:center" width="20%">Tùy Chọn</th>
                                    </tr>
                                  @foreach($chitiethoadons ?? '' as $chitiethoadon)
								<tr >
                                    <th style="text-align:center">{{$chitiethoadon->id}}</th>
                                    <th style="text-align:center">{{$chitiethoadon->id_hoadon}}</th>
                                    <th style="text-align:center">{{$chitiethoadon->TenSP}}</th>
                                    <th style="text-align:center">{{$chitiethoadon->SoLuong}}</th>
                                    <th style="text-align:center">{{$chitiethoadon->Gia}}</th>
                                    <th style="text-align:center">{{$chitiethoadon->KhuyenMai}}</th>
                                    <th style="text-align:center">{{$chitiethoadon->ThanhTien}}</th>
                                    <td>
                                    <form action="{{route('chitiethoadon.destroy', $chitiethoadon->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                <a href="{{route('chitiethoadon.edit',$chitiethoadon->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
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