{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('email', 'Email:') !!}
			{!! Form::text('email') !!}
		</li>
		<li>
			{!! Form::label('password', 'Password:') !!}
			{!! Form::text('password') !!}
		</li>
		<li>
			{!! Form::label('country', 'Country:') !!}
			{!! Form::text('country') !!}
		</li>
		<li>
			{!! Form::label('address', 'Address:') !!}
			{!! Form::text('address') !!}
		</li>
		<li>
			{!! Form::label('account-number', 'Account-number:') !!}
			{!! Form::text('account-number') !!}
		</li>
		<li>
			{!! Form::label('payment-methods', 'Payment-methods:') !!}
			{!! Form::text('payment-methods') !!}
		</li>
		<li>
			{!! Form::label('zipcode', 'Zipcode:') !!}
			{!! Form::text('zipcode') !!}
		</li>
		<li>
			{!! Form::label('city', 'City:') !!}
			{!! Form::text('city') !!}
		</li>
		<li>
			{!! Form::label('number', 'Number:') !!}
			{!! Form::text('number') !!}
		</li>
		<li>
			{!! Form::label('vat-number', 'Vat-number:') !!}
			{!! Form::text('vat-number') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}