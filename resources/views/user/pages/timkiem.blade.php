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
<div class="content_top">
    <h3 class="m_1">Latest Products</h3>
    <div class="container">
       <div class="box_1">
           <div class="col-md-7">
                <div class="section group">
                    @foreach($sanpham as $sanphams)
                        <div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
                            <div class="shop-holder">
                                 <div class="product-img">
                                    <a href="single.html">
                                        <img width="225" height="265" src="{!! asset('image/'.$sanphams->Image) !!}" class="img-responsive"  alt="item4">                                   </a>
                                    <a href="" class="button item_add"></a>                              </div>
                            </div>
                            <div class="shop-content" style="height: 80px;">
                                    <h3><a href="{{route('user.single', $sanphams->id)}}">{{$sanphams->TenSP}}</a></h3>
                                    <del>{{$sanphams->Gia}}</del>
                                    <span class="amount item_price">{{$sanphams->GiaMoi}} VND</span>
                            </div>
                        </div>
                        @endforeach
                        <div class="clearfix"></div>
                </div>
        </div>
     
        <div class="clearfix"></div>
    </div>
</div>
</div>
@stop

