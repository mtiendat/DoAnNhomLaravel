@extends('admin.Loaisp.sidebar')
@section('content')
    <div class="card-body">
        <form method="POST" action="{{route('nhacungcap.update', $nhacungcap->id)}}">
            @csrf
            @method('PUT')
            <div class="row">
            <div class="col-md-4 pr-1">
                <div class="form-group">
                    <label>Tên Nhà Cung Cấp</label>
                    <input type="text" class="form-control" name="tenncc" value="{{$nhacungcap->tenncc}}" >
                </div>
            </div>
            <div class="col-md-4 px-1">
                <div class="form-group">
                    <label>Địa Chỉ</label>
                    <input type="text" class="form-control" name="diachi" value="{{$nhacungcap->diachi}}">
                </div>
            </div>
            <div class="col-md-4 pl-1">
                <div class="form-group">
                    <label for="exampleInputEmail1">Trạng Thái</label>
                    <input type="text" name="trangthai"class="form-control" value="{{$nhacungcap->trangthai}}">
                </div>
            </div>
        </div>
    </div>
    <button type="submit" class="btn btn-info btn-fill pull-right">Update</button>
    <div class="clearfix"></div>
    </form>
    </div>
@stop
