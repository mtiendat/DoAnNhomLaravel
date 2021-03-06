@extends('user.layout')
@section('content')
<div class="single_top">
	 <div class="container">
	    <div class="register">
			  <div class="col-md-6 login-right">
			  	<h3>REGISTERED CUSTOMERS</h3>
				<p>@if(Session::has('flag'))
                    <div class="alert alert-{{Session::get('flag')}}">{{Session::get('message')}}</div>
                @endif
                </p>
                <form action="{{route('user.login')}}" method="post" class="beta-form-checkout">
                    {{ csrf_field() }}
				  <div>
					<span>Email Address<label>*</label></span>
					<input type="text" name="email">
				  </div>
				  <div>
					<span>Password<label>*</label></span>
					<input type="text" name="password">
				  </div>
				  <a class="forgot" href="#">Forgot Your Password?</a>
				  <input type="submit" value="Login">
			    </form>
			   </div>
			    <div class="col-md-6 login-left">
			  	 <h3>NEW CUSTOMERS</h3>
				 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				 <a class="acount-btn" href="{{route('user.register')}}">Create an Account</a>
			   </div>
			   <div class="clearfix"> </div>
		</div>
     </div>
</div>
@stop
