@extends('user.layout')
@section('content')
<div class="single_top">
	 <div class="container"> 
	  <div class="pages">
	 	   	<img src="{!! asset('user/images/banner.jpg') !!}"  class="img-responsive" alt=""/>
	 	   	<p class="m_10">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil </p>
	 	   	<p class="m_11">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil </p>
	 	    <ul class="list">
			        <li>
			            <div class="preview"><a href="#"><img src="{!! asset('user/images/14.jpg') !!}" class="img-responsive" alt=""></a></div>
			            <div class="data">
			                <div class="title">Feb 3,2015  /  posted by Suffered <a href="#">reply</a></div>
			                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum. qui sequitur mutationem consuetudium lectorum.,</p>
			            </div>
			           <div class="clearfix"></div>
			        </li>
			     	<li class="middle">
			            <div class="preview1"><a href="#"><img src="{!! asset('user/images/14.jpg') !!}" class="img-responsive" alt=""></a></div>
			            <div class="data-middle">
			               <div class="title">Feb 3,2015  /  posted by Suffered <a href="#">reply</a></div>
			                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum Mirum est notare quam littera gothica, quam nunc putamus parum</p>
			            </div>
			            <div class="clearfix"></div>
			        </li>
			     </ul>
	 	       <div class="comments-area">
		  		        <h3>Add New Comment</h3>
						<form>
								<p>
									<label>Name</label>
									<span>*</span>
									<input type="text" value="">
								</p>
								<p>
									<label>Email</label>
									<span>*</span>
									<input type="text" value="">
								</p>
								<p>
									<label>Website</label>
									<input type="text" value="">
								</p>
								<p>
									<label>Subject</label>
									<span>*</span>
									<textarea></textarea>
								</p>
								<p>
									<input type="submit" value="Submit Comment">
								</p>
					   </form>
			  </div>
	    </div>
      </div>
</div>
@stop