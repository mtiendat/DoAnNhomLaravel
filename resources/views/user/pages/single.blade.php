@extends('user.layout')
@section('content')
<div class="single_top">
	<div class="container">
		<div class="single_grid">
			<div class="grid images_3_of_2">
				<ul id="etalage">
					<li>
						<a href="optionallink.html">
							<img class="img-thumbnail" src="{!! asset('image/'.$sanpham->Image) !!}" class="img-responsive" />
						</a>
					</li>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="desc1 span_3_of_2">
				<h1>{{$sanpham->TenSP}}</h1>
				<p>{{$sanpham->Mota}}</p>
				<div class="dropdown_top">
					<div class="dropdown_left">
						<select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro1"}'>
							<option value="0">Select size</option>
							<option value="1">{{$sanpham->Size}}</option>

						</select>
					</div>

					<div class="clearfix"></div>
				</div>
				<div class="simpleCart_shelfItem">
					<div class="price_single">
						<div class="head">
							<h2><span class="amount item_price">{{$sanpham->GiaMoi}}</span></h2>
						</div>
						<div class="clearfix"></div>
					</div>
					<!--<div class="single_but"><a href="" class="item_add btn_3" value=""></a></div>-->
			

				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	
		
	</div>



		<h3 class="m_2">Related Products</h3>
		<div class="container">
			<div class="box_3">
				@foreach($sanpham_lienquan as $splq)
				<div class="col-md-3">
					<div class="content_box"><a href="{{route('user.single', $sanpham->id)}}">
							<img width="225" height="265" src="{!! asset('image/'.$splq->Image) !!}"
								class="img-responsive" alt="item4"> </a>
						<a href="{{route('user.single', $sanpham->id)}}" class="button item_add"></a>
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
</div>
@stop
