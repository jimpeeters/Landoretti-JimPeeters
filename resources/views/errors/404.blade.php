@extends('layouts.master')

@section('title', '404 page Landoretti')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<center>Oops ! 404 Not found ! </center>
		    <center> <a href="{{route('home')}}"> Go back to the homepage! </a> </center>
		</div>

		<div class="col-md-12">
			<h2> Search for an auction </h2>
				{!! Form::open(array('route' => 'search', 'class'=>'form navbar-form navbar-right searchform', 'method' => 'post')) !!}
				    <button type="submit" class="pull-right button-clean"><i style="margin-left: 5px;"class="fa fa-search"></i></button>
				    {!! Form::text('search', null,
   												array('required',
				                                'class'=>'search-field pull-right',
				                                'placeholder'=>trans('navigation.search'))) !!}
				{!! Form::close() !!}
		</div>
	</div>
</div>
@stop

