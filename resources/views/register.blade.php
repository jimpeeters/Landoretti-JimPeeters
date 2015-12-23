@extends('layouts.master')

@section('title', 'Register')

@section('content')

	@include('newest-auction-section')


	<div class="container">
		
		<h1>Register</h1>

		{!! Form::open(array('url' => '/register', 'method' => 'post')) !!}
			 {!! csrf_field() !!}

			@if (count($errors) > 0)
			<div class="row">
				<div class="col-md-12">
				    <div class="alert alert-danger">
				        <ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
				    </div>
				</div>
				</div>
			@endif


			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="name">Company or name</label>
						<input type="text" name="name" class="form-control" id="name" placeholder="Company or name" value="{{ old('name') }}" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" name="email" class="form-control" id="email" placeholder="name@provider.com" value="{{ old('email') }}" required>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control" id="password" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="password_confirmation">Password confirmation</label>
						<input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						{!! Form::label('country')!!}
						{!! Form::select('country',$countries,null,array('class' => 'form-group form-control','id' => 'country')) !!}
					</div>
				</div>


				<div class="col-md-3">
					<div class="form-group">
						<label for="zipcode">Zip Code</label>
						<input type="text" name="zipcode" class="form-control" id="zipcode" placeholder="8400" value="{{ old('zipcode') }}" required>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="city">City</label>
						<input type="text" name="city" class="form-control" id="city" placeholder="Oostende" value="{{ old('city') }}" required>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="address">Address</label>
						<input type="text" name="address" class="form-control" id="address" placeholder="Zuidstraat 15 C4" value="{{ old('address') }}" required>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="number">Phone Number</label>
						<input type="text" name="number" class="form-control" id="number" placeholder="+32 XX XXX XX XX" value="{{ old('number') }}" required>
					</div>
				</div>
			</div>

			<div class="form-group checkbox">
				<label>
					<input type="checkbox" name="terms" required> I Agree To <a href="#">The Terms &amp; Conditions</a>
				</label>
			</div>
			<button type="submit" class="btn btn-primary">Register</button>
			
		{!! Form::close() !!}

	</div>

@stop