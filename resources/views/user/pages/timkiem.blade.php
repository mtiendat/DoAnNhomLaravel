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
<div class="women_main">
	<div class="col-md-9 w_content">
@foreach($sanpham as $sanphams)
		<div class="grids_of_4">
		  <div class="grid1_of_4 simpleCart_shelfItem">
				<div class="content_box"><a href="{{route('user.single',$sanphams->id)}}">
			   	  <div class="view view-fifth">
			   	   	 <img src="{!! asset('image/'.$sanphams->Image) !!}" height="10px" class="img-responsive" alt=""/>
				   	   	<div class="mask1">
	                        <div class="info"> </div>
			            </div>
				   	  </a>
				   </div>

				    <h5><a href="{{route('user.single',$sanphams->id)}}"> {{$sanphams->TenSP}}</a></h5>
				    <h6>{{$sanphams->MoTa}}</h6>
				     <div class="size_1">
				     	<span class="item_price">{{$sanphams->GiaMoi}}</span>
				       <select class="item_Size">
						<option value="Small">{{$sanphams->Size}}</option>

		      		    </select>
		      		    <div class="clearfix"></div>
		      		  </div>
		      		  <div class="size_2">
		      		    <div class="size_2-left">
					       <input type="text" class="item_quantity quantity_1" value="1" />
					    </div>
			    	    <div class="size_2-right"><input type="button" class="item_add add3" value="" /></div>
			    	    <div class="clearfix"> </div>
			    	 </div>
			     </div>
            </div>
            @endforeach
    </div>
</div>
@stop

