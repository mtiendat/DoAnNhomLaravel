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
					@foreach($latesproducts as $sanpham)
						<div class="col_1_of_3 span_1_of_3 simpleCart_shelfItem">
							<div class="shop-holder">
		                         <div class="product-img">
		                            <a href="single.html">
		                                <img width="225" height="265" src="{!! asset('image/'.$sanpham->Image) !!}" class="img-responsive"  alt="item4">		                            </a>
		                            <a href="" class="button item_add"></a>		                         
									</div>
		                    </div>
		                    <div class="shop-content" style="height: 80px;">
		                            <h3><a href="{{route('user.single', $sanpham->id)}}">{{$sanpham->TenSP}}</a></h3>
									<del>{{$sanpham->Gia}}</del>
		                            <span class="amount item_price">{{$sanpham->GiaMoi}} VND</span>
		                    </div>
						</div>
						@endforeach
						<div class="clearfix"></div> 
				</div>
		</div>
		<div class="col-md-5 row_3">
			<div class="about-block-content">
		       <div class="border-add"></div>
				<h4>About Us</h4>
				<p>We guarantee 100% genuine products!</p>
				<p>The best price is always.</p>
				<p>		        	</p></div>
				<img src="{!! asset('user/images/246.jpg') !!}" class="img-responsive" alt=""/>
				
	    </div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
<div class="content_bottom">
<div class="container">
	<h2 class="m_3">NEW PRODUCT</h2>
	<div class="grid_1">
		<div class="col-md-6 blog_1"><a href="index_single.html">
			<div class="item-inner"> 
				<img src="{!! asset('image/123.jpg') !!}" class="img-responsive" alt=""/>																	
					<div class="date-comments">
						<div class="time"><span class="date"><span class="word1">15</span> <span class="word2">SEP</span> </span></div>											 
						<div class="comments">
						<span><span class="word1">0</span>
						<span class="word2">comment</span></span>
						</div>
					 </div>
			</div>   
		</a></div>
		<div class="col-md-6 row_2"><a href="index_single.html">
			<div class="item-inner"> 
				<img src="{!! asset('image/456.jpg') !!}" class="img-responsive" alt=""/>																	
					<div class="date-comments">
						<div class="time"><span class="date"><span class="word1">14</span> <span class="word2">Oct</span> </span></div>											 
						<div class="comments">
						<span><span class="word1">0</span>
						<span class="word2">comment</span></span>
						</div>
					 </div>
			</div>   
	    </a></div>
		<div class="clearfix"></div>
	</div>
</div>	
</div>
<div class="content_bottom-grid">
	<div class="col-md-6 row_4"></div>
	 <div class="col-md-6">
		<div class="row_5">
		@foreach($newproducts as $sanpham)
						<div class="col_1_of_3 span_1_of_3">
						<div class="shop-holder">
		                         <div class="product-img">
		                            <a href="single.html">
		                                <img width="225" height="265" src="{!! asset('image/'.$sanpham->Image) !!}" class="img-responsive"  alt="item4">		                            </a>
		                            <a href="" class="button item_add"></a>		                         
									</div>
		                    </div>
		                    <div class="shop-content" style="height: 80px;">
		                            <h3><a href="{{route('user.single', $sanpham->id)}}">{{$sanpham->TenSP}}</a></h3>
									<del>{{$sanpham->Gia}}</del>
		                            <span class="amount item_price">{{$sanpham->GiaMoi}} VND</span>
		                    </div>
						</div>						
						@endforeach

						<div class="clearfix"></div> 
					</div>
	</div>
	<div class="clearfix"> </div>
</div>
@stop
