@extends('user.layout')
@section('content')
<div class="single_top">
	 <div class="container"> 
	 <h3 class="m_2">Chi Tiết Sản Phẩm</h3>
	 			<div class="box_3">
          			<div class="col-md-3">
					  	<div class="content_box"><a href="{{route('user.single', $sanpham->id)}}">
		                    <img width="225" height="265" src="{!! asset('image/'.$sanpham->Image) !!}" class="img-responsive"  alt="item4">		                            </a>
		                	<a href="" class="button item_add"></a>
		             	</div>
		            <div class="shop-content" style="height: 80px;">
		                <h3><a href="{{route('user.single', $sanpham->id)}}">{{$sanpham->TenSP}}</a></h3>
						<del>{{$sanpham->Gia}}</del>
		                <span class="amount item_price">{{$sanpham->GiaMoi}} VND</span>
		            </div>
				</div>
				
				</div>
	</div>	   
</div>

          	 
   <h3 class="m_2">Related Products</h3>
	     <div class="container">
          		<div class="box_3">
				  @foreach($sanpham_lienquan as $splq)
				  <div class="col-md-3">
					  	<div class="content_box"><a href="{{route('user.single', $sanpham->id)}}">
		                    <img width="225" height="265" src="{!! asset('image/'.$splq->Image) !!}" class="img-responsive"  alt="item4">		                            </a>
		                	<a href="" class="button item_add"></a>
		             	</div>
		            <div class="shop-content" style="height: 80px;">
		                <h3><a href="{{route('user.single', $splq->id)}}">{{$splq->TenSP}}</a></h3>
						<del>{{$splq->Gia}}</del>
		                <span class="amount item_price">{{$splq->GiaMoi}} VND</span>
		            </div>
				</div>
          			@endforeach
			        <div class="clearfix"> </div>
          		</div>
          	</div>
</div>
@stop