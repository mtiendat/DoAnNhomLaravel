@extends('admin.Loaisp.sidebar')
@section('content')
    <div class="card-body">
        <form method="post" action="{{route("loaisp.update", $loaisp->id)}}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4 pr-1">
                    <div class="form-group">
                        <label>Tên Loại</label>
                        <input type="text" class="form-control" value="{{$loaisp->tenloai}}" name="tenloai" placeholder="Company" >
                    </div>
                </div>
                <div class="col-md-4 px-1">
                    <div class="form-group">
                        <label>Nhà Cung Cấp</label>
                        <input type="text" class="form-control" value="{{$loaisp->nhacungcap}}" name="nhacungcap"placeholder="Username">
                    </div>
                </div>
                <div class="col-md-4 pl-1">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Trạng Thái</label>
                        <input type="text" name="trangthai" value="{{$loaisp->trangthai}}" class="form-control" placeholder="Email">
                    </div>
                </div>
            </div>
    </div>
    <button type="submit" class="btn btn-info btn-fill pull-right">Update</button>
    <div class="clearfix"></div>
    </form>
    </div>
@stop
