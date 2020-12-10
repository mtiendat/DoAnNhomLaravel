@extends('user.layout')
@section('content')
<div class="single_top">
	 <div class="container">
	     <div  class="register-but">

            <div>
                @if(count($errors)>0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                    {{$err}}
                    @endforeach
                </div>
            @endif
            @if(Session::has('thanhcong'))
                <div class="alert alert-success">{{Session::get('thanhcong')}}</div>
            @endif
                 </div>

                <form  action="{{route('user.register')}}" method="post" class="beta-form-checkout">
                	{{csrf_field()}}
				 <div class="register-top-grid">
					<h3>PERSONAL INFORMATION</h3>
					 <div>
						<span>First Name<label>*</label></span>
						<input type="text" name="hoten">
					 </div>
					 <div>
						<span>Last Name<label>*</label></span>
						<input type="text" name="name">
					 </div>
					 <div>
						 <span>Email Address<label>*</label></span>
						 <input type="text" name="email">
					 </div>
					 <div class="clearfix"> Trạng Thái</div>
					   <select name="trangthai">
                           <option name="trangthai"> active</option>
                           <option name="trangthai"> default</option>
					   </select>
					 </div>
				     <div class="register-bottom-grid">
						    <h3>LOGIN INFORMATION</h3>
							 <div>
								<span>Password<label>*</label></span>
								<input type="text"name="password">
							 </div>
							 <div>
								<span>Confirm Password<label>*</label></span>
								<input type="text" name="re_password">
							 </div>
							 <div class="clearfix"> </div>
					 </div>

				<div class="clearfix"> </div>
				<div class="register-but">

					   <input type="submit" value="submit">
					   <div class="clearfix"> </div>
				   </form>
				</div>
		   </div>
     </div>
</div>
@stop
