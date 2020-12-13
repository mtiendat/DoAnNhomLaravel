@extends('user.layout')
@section('content')
<div class="banner">
    <div class="container">
        <div class="banner_desc">
            <h1>NEW IPHONE 2020</h1>
            <h2>APPLE</h2>
            <div class="button">
                  <a href="#" class="hvr-shutter-out-horizontal">Shop Now</a>
                </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="box_3">
        @foreach($sanpham as $sanphams)
        <div class="col-md-3">
            <div class="content_box"><a href="{{route('user.single', $sanphams->id)}}">
                    <img width="225" height="265" src="{!! asset('image/'.$sanphams->Image) !!}"
                        class="img-responsive" alt="item4"> </a>
                <a href="" class="button item_add"></a>
            </div>
            <div class="shop-content" style="height: 80px;">
                <h3><a href="{{route('user.single', $sanphams->id)}}">{{$sanphams->TenSP}}</a></h3>
                <del>{{$sanphams->Gia}}</del>
                <span class="amount item_price">{{$sanphams->GiaMoi}} VND</span>
            </div>
        </div>
        @endforeach

        <div class="clearfix"> </div>
    </div>
</div>
@stop

