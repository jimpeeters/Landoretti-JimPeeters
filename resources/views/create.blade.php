@extends('layouts.master')

@section('title', 'Add a new auction')

@section('content')

	@include('newest-auction-section')


<div class="container">
	<div class="row">
		<div class="col-md-12">
			{!! Breadcrumbs::render('addAuction') !!}
		</div>
	</div>
</div>

<div class="container">
	
	<h1>Add a new auction</h1>

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
	@if (session()->has('success'))
	   	<div class="row">
	   		<div class="col-md-12">
				<div class="alert alert-success">{{ Session::get('success') }}</div>
			</div>
		</div>
	@endif

	<form action="/myAuctions/add" method="post" enctype="multipart/form-data">


		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					{!! Form::select('artist',$artists,null,array('class' => 'form-group form-control','id' => 'artist')) !!}
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					{!! Form::select('era',$eras,null,array('class' => 'form-group form-control','id' => 'era')) !!}
				</div>
			</div>

		</div>

		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="title">Auction title</label>
					<input type="text" name="title" class="form-control" id="title" placeholder="Auction title" value="{{ old('title') }}" required> 
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="year">Year</label>
					<input type="text" name="year" class="form-control" id="year" placeholder="XXXX" value="{{ old('year') }}" required>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
					{!! Form::select('color',$colors,null,array('class' => 'form-group form-control','id' => 'color')) !!}
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					{!! Form::select('style',$styles,null,array('class' => 'form-group form-control','id' => 'style')) !!}
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					{!! Form::select('category',$categories ,null,array('class' => 'form-group form-control','id' => 'category')) !!}
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
					<label for="width">Width</label>
					<input type="text" name="width" class="form-control" id="width" placeholder="XXXX" value="{{ old('width') }}" required>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="height">Height</label>
					<input type="text" name="height" class="form-control" id="height" placeholder="XXXX" value="{{ old('height') }}" required>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="depth">Depth <span class="optional">(optional)</span></label>
					<input type="text" name="depth" class="form-control" id="depth" placeholder="XXXX" value="{{ old('depth') }}" required>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-9">
				<div class="form-group">
					<label for="descriptionEnglish">Description (English)</label>
					<textarea name="descriptionEnglish" class="form-control" id="descriptionEnglish" placeholder="Describe your auction as thorough as possible" required>{{{ Input::old('descriptionEnglish') }}}</textarea>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-9">
				<div class="form-group">
					<label for="descriptionDutch">Description (Dutch)</label>
					<textarea name="descriptionDutch" class="form-control" id="descriptionDutch" placeholder="Describe your auction as thorough as possible" required>{{{ Input::old('descriptionDutch') }}}</textarea>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-9">
				<div class="form-group">
					<label for="conditionEnglish">Condition (English)</label>
					<textarea name="conditionEnglish" class="form-control" id="conditionEnglish" placeholder="What's the condition of the artwork" required>{{{ Input::old('conditionEnglish') }}}</textarea>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-9">
				<div class="form-group">
					<label for="conditionDutch">Condition (Dutch)</label>
					<textarea name="conditionDutch" class="form-control" id="conditionDutch" placeholder="What's the condition of the artwork" required>{{{ Input::old('conditionDutch') }}}</textarea>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-9">
				<div class="form-group">
					<label for="originEnglish">Origin (English)</label>
					<input type="text" name="originEnglish" class="form-control" id="originEnglish" placeholder="What's the origin of the artwork?" value="{{ old('originEnglish') }}" required>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-9">
				<div class="form-group">
					<label for="originDutch">Origin (Dutch)</label>
					<input type="text" name="originDutch" class="form-control" id="originDutch" placeholder="What's the origin of the artwork?" value="{{ old('originDutch') }}" required>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<label>Photos</label>
				<div class="form-info">
					<p>Please upload one picture with the signature of the artwork and one picture of the artwork. </p>
					<p>You can upload up to 3 pictures with a maximum of 10MB each.</p>
				</div>
			</div>

			<div class="col-md-3">
				<div class="form-group fileupload">
					<input type="file" name="imageArtwork" class="filestyle" data-input="false" data-icon="false" data-buttonText="Upload image <br>of the artwork" required>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group fileupload">
					<input type="file" name="imageSignature" class="filestyle" data-input="false" data-icon="false" data-buttonText="Upload image <br> of the signature" required>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group fileupload">
					<input type="file" name="imageOptional" class="filestyle" data-input="false" data-icon="false" data-buttonText="Optional image">
				</div>
			</div>
		</div>


		<h2>Pricing</h2>

		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
					<label for="minPrice">Minimum estimate price</label>
					<input type="text" name="minPrice" class="form-control" id="minPrice" placeholder="XXXX" value="{{ old('minPrice') }}" required>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="maxPrice">Maximum estimate price</label>
					<input type="text" name="maxPrice" class="form-control" id="maxPrice" placeholder="XXXX" value="{{ old('minPrice') }}" required>
				</div>
			</div>
			<div class="col-md-3">
				<div class="form-group">
					<label for="buyoutPrice">Buyout price <span class="optional">(optional)</span></label>
					<input type="text" name="buyoutPrice" class="form-control" id="buyoutPrice" placeholder="XXXX" value="{{ old('minPrice') }}"  required>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-3">
				<div class="form-group">
					<label for="enddate">End date</label>
					<input type="date" name="enddate" class="form-control" id="enddate" placeholder="DD/MM/YY" value="{{ old('enddate') }}" required>
				</div>
			</div>
			<div class="col-md-6">
				<label>Attention</label>
				<div class="form-info">
					<p>You can not change the information after adding this auction.</p>
					<p>If you're not certain about the information of your artwork, please ask for help.</p>
					<p>We will answer your question as soon as possible.</p>
				</div>
			</div>
		</div>

		
		<div class="form-group checkbox">
			<label>
				<input type="checkbox" name="terms" required> I Agree To <a href="#">The Terms &amp; Conditions</a>
			</label>
		</div>
		<button type="submit" class="btn btn-primary">Add Auction</button>

		<div class="row">
			<div class="col-md-3 askquestion">
				<a href="#">Ask a question<i class="fa fa-angle-right"></i></a>
			</div>
		</div>
		<input type="hidden" value="{{ csrf_token() }}" name="_token">
	</form>

</div>

@stop