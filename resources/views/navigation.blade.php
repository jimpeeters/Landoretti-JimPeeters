
<div class="section-nav">
	<div class="container">
		<img id="main-logo" src="/images/logo.png" alt="Landoretti ART logo">
		<div class="navigation row">

			@if(Auth::check()) 
				<div class="col-md-6 col-md-offset-2 dashboard">
					<a href="/myWatchlist"><i class="fa fa-bars"></i>WATCHLIST</a>
					<a href="/myProfile"><i class="fa fa-user"></i>{{trans('navigation.login')}}</a>
					<a href="/auth/logout">LOGOUT</a>
				</div>

			@else
				<div class="col-md-6 col-md-offset-2">
					<a href="/register">REGISTER </a>
					<a id="login-button" href="#">LOGIN</a>

					<div class="login-block hide">

					{!! Form::open(array('url' => 'auth/login', 'method' => 'post')) !!}
						<input type="email" name="email" class="form-control" id="email" placeholder="User">
						<input type="password" name="password" class="form-control" id="password" placeholder="Password">
						<button type="submit">Login</button>
						<input type="hidden" value="{{ csrf_token() }}" name="_token">
					{!! Form::close() !!}
					</div>
				</div>
			@endif
			<div class="col-md-3 col-md-offset-1">
				<i class="fa fa-search pull-right"></i>
					<input class="search-field pull-right" placeholder="Search">
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
				<a href="/">HOME</a>
				<a href="/auctions">ART</a>
				<a href="/myAuctions">MYAUCTIONS</a>
				<a href="/myBids">MYBIDS</a>
				<a href="/contact">CONTACT</a>
			</div>
			<div class="col-md-2 col-md-offset-2">
					<a class="pull-right language-link" href="#">NL</a>
					<a class="pull-right language-link" href="#">EN</a>
			</div>
		</div>
	</div>
</div>

