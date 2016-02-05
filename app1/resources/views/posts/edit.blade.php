<h1>Edit: {!! $post->name !!}</h1>

{!! Form::model($post, ['method' => 'PATCH', 'url'=> 'posts/' . $post->id]) !!}

<div class="form-group">
		{!! Form::label('name', 'Name:') !!}
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
	</div>
	
	</br>
	
	<div class="form-group">
		{!! Form::label('address', 'Address:') !!}
		{!! Form::textarea('address', null, ['class' => 'form-control']) !!}
	</div>
	
	</br>
	
	<div class="form-group">
		{!! Form::label('phone', 'Phone:') !!}
		{!! Form::text('phone', null, ['class' => 'form-control']) !!}
	</div>
	
	</br>
	
	<div class="form-group">
		{!! Form::label('email', 'E-mail:') !!}
		{!! Form::text('email', null, ['class' => 'form-control']) !!}
	</div>
	
	</br>
	
	<div class="form-group">
		{!! Form::submit('Update Entry', ['class' => 'btn btn-primary form-control']) !!}
	</div>
	
	
{!! Form::close() !!}

@if ($errors->any())
	<ul class="alert alert-danger">
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>
@endif