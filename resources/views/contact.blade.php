@extends('layouts.master')

@section('title', 'Contact')

@section('content')

	@include('newest-auction-section')

<div class="container">
	<div class="row">
		<div class="col-md-12">
			{!! Breadcrumbs::render('Contact') !!}
		</div>
	</div>

@if(isset($success))
   	<div class="row infoBlock">
   		<div class="col-md-12">
			<div class="alert alert-success">{{$success}}</div>
		</div>
	</div>
@endif

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
	<div class="col-md-12">
		<h1>Contact</h1>
	</div>
</div>

{!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

		<div class="row">
			<div class="col-md-9">
				<div class="form-group">
					<label for="name">Your name</label>
					@if(Auth::check()) 
						<input type="text" name="nothing" class="form-control" placeholder="Your name" value="{{Auth::user()->name}}" disabled>
						<input id="name" type="hidden" name="name" value="{{Auth::user()->name}}" />
					@else
						<input type="text" name="name" class="form-control" id="name" placeholder="Your name" value="{{ old('name') }}" required>
					@endif 
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-9">
				<div class="form-group">
					<label for="email">Your E-mail</label>
					@if(Auth::check()) 
						<input type="text" name="nothing" class="form-control" placeholder="Your E-mail" value="{{Auth::user()->email}}" disabled> 
						<input type="hidden" id="email" name="email" value="{{Auth::user()->email}}" />
					@else
						<input type="text" id="email" name="email" class="form-control"  placeholder="Your E-mail" value="{{ old('email') }}" required> 
					@endif
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="auctions">About what artwork is this question?</label>
					@if(isset($auctionid))
						{!! Form::select('auction',$auctions, $auctionid ,array('class' => 'form-group form-control','id' => 'auction')) !!}
					@else
						{!! Form::select('auction',$auctions,null,array('class' => 'form-group form-control','id' => 'auction')) !!}
					@endif
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-9">
				<div class="form-group">
					<label for="message">Your message</label>
					<textarea name="message" class="form-control" id="message" placeholder="Write your message here" required>{{{ Input::old('message') }}}</textarea>
				</div>
			</div>
		</div>

	    <button id="submitBtn" type="button" data-toggle="modal" data-target="#confirm-submit" class="btn btn-primary">Contact us!</button>


		<div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header">
		               <h2>Are you sure you want to send this mail ?</h2>
		            </div>
		            <div class="modal-body">
		                <table class="table">
		                    <tr>
		                        <th>Name</th>
		                        <td id="Mname"></td>
		                    </tr>
		                    <tr>
		                        <th>Email</th>
		                        <td id="Memail"></td>
		                    </tr>
		                   	<tr>
		                        <th>Auction</th>
		                        <td id="Mauction"></td>
		                    </tr>
		                   	<tr>
		                        <th>Message</th>
		                        <td id="Mmessage"></td>
		                    </tr>
		                </table>

		            </div>

		  <div class="modal-footer">
		            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
		            <button type= "submit" class="btn btn-primary">Contact us!</button>
		        </div>
		    </div>
		</div>

		@section('scripts')
		<script>
			$('#submitBtn').click(function() {
			     /* when the button in the form, display the entered values in the modal */
			     $('#Mname').html($('#name').val());
			     $('#Memail').html($('#email').val());
			     $('#Mauction').html($("#auction").find("option:selected").text());
			     $('#Mmessage').html($('#message').val());


			});

		</script>
		@stop

{!! Form::close() !!}

</div>

@stop
