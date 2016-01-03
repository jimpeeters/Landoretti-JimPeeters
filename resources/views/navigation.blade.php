
<div class="section-nav">
	<div class="container">
		<img id="main-logo" src="/images/logo.png" alt="Landoretti ART logo">
		<div class="navigation row">

			@if(Auth::check()) 
				<div class="col-md-6 col-md-offset-2 dashboard">
					<a href="{{route('myWatchlist')}}"><i class="fa fa-bars"></i>WATCHLIST</a>
					<a href="{{route('myProfile')}}"><i class="fa fa-user"></i>PROFILE</a>
					<a href="{{route('getLogout')}}">LOGOUT</a>
				</div>

			@else
				<div class="col-md-6 col-md-offset-2">
					<a href="{{route('getRegister')}}">REGISTER </a>
					<a id="login-button" href="#">{{trans('navigation.login')}}</a>

					<div class="login-block hide">

					{!! Form::open(array('route' => 'postLogin', 'method' => 'post')) !!}
						<input type="email" name="email" class="form-control" id="email" placeholder="User">
						<input type="password" name="password" class="form-control" id="password" placeholder="Password">
						<button type="submit">Login</button>
						<input type="hidden" value="{{ csrf_token() }}" name="_token">
					{!! Form::close() !!}
					</div>
				</div>
			@endif
			<div class="col-md-3 col-md-offset-1">
				{!! Form::open(array('route' => 'search', 'class'=>'form navbar-form navbar-right searchform', 'method' => 'post')) !!}
				    <button type="submit" class="pull-right"><i class="fa fa-search"></i></button>
				    {!! Form::text('search', null,
   												array('required',
				                                'class'=>'search-field pull-right',
				                                'placeholder'=>'Search')) !!}
				 {!! Form::close() !!}
			</div>

				@section('scripts')
				<script>
					$(document).ready(function(){

					    $("#login-button").click(function(){

					     $(this).animate({
					        paddingLeft: '50px',
					        opacity: '0'
						  }, 500, function() {
						    $(this).addClass('hide');
						    $(".login-block").removeClass('hide');
						    $(".login-block").animate({
						        opacity: '1'
							 }, 500);

						 });

					    });

					});
				</script>
				@stop
		</div>
	</div>
</div>

<div class="section-subnav">
	<div class="container">
		<div class="sub-navigation row">
			<div class="col-md-6 col-md-offset-2">
				<a href="{{route('home')}}">HOME</a>
				<a href="{{route('auctions')}}">ART</a>
				<a href="{{route('myAuctions')}}">MYAUCTIONS</a>
				<a href="{{route('myBids')}}">MYBIDS</a>
				<a href="{{route('contact')}}">CONTACT</a>
			</div>
			<div class="col-md-2 col-md-offset-2">
					<a class="pull-right language-link" href="#">NL</a>
					<a class="pull-right language-link" href="#">EN</a>
			</div>
		</div>
	</div>
</div>

