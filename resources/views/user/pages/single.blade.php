@extends('user.layout')
@section('content')
<div class="single_top">
	<div class="container">
		<div class="single_grid">
			<div class="grid images_3_of_2">
				<ul id="etalage">
					<li>
						<a href="optionallink.html">
							<img class="etalage_thumb_image" src="{!! asset('image/'.$sanpham->Image) !!}" class="img-responsive" />
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
					<div class="size_2-right"><a href="#" class="item_add item_add1 btn_5" value="" />Add to Cart </a>
					</div>

				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="single_social_top">
		</div>
		<ul class="menu_drop">
			<li class="item1"><a href="#"><img src="images/product_arrow.png">REVIEW</a>
				<ul>
					<li class="subitem1"><a href="#">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
							nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim
							ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex
							ea commodo consequat. Duis autem vel eum iriure dolor </a></li>
					<li class="subitem2"><a href="#"> Duis autem vel eum iriure dolor in hendrerit in vulputate velit
							esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et
							accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis
							dolore</a></li>
					<li class="subitem3"><a href="#">Mirum est notare quam littera gothica, quam nunc putamus parum
							claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta
							decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes </a></li>
				</ul>
			</li>
		</ul>
	</div>



		<h3 class="m_2">Related Products</h3>
		<div class="container">
			<div class="box_3">
				@foreach($sanpham_lienquan as $splq)
				<div class="col-md-3">
					<div class="content_box"><a href="{{route('user.single', $sanpham->id)}}">
							<img width="225" height="265" src="{!! asset('image/'.$splq->Image) !!}"
								class="img-responsive" alt="item4"> </a>
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
</div>
@stop
