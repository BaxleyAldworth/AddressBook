<h1>Entries</h1>

<hr>
  
@foreach ($posts as $post)
<tr>
<article>
	
	<h1>{{ $post->name }}</h1>
	</br>
	{{ $post->address}}
	</br>
	{{ $post->phone }}
	</br>
	{{ $post-> email }}
	</br>
	
<!--{{ link_to_route('posts.edit', 'Edit', [$post->id], ['class' => 'tiny button']) }}-->

<a href="http://localhost:8000/posts/{{ $post->id }}/edit" class="tiny alert button">Edit</a>
<!--Escaping data provides a layer of protection (it will print out literally what is inside, so it doesn't think it's code)-->



<!--
{{ Form::model($post, ['route' => ['posts.destroy', $post->id] ]) }}
	{{ Form::button('Delete', ['type' => 'submit', 'class' => 'tiny alert button']) }}
	{{ Form::close() }}
-->

<!--
{{ Form::open(['method' => 'Delete', 'route' => ['posts.destroy', $post->id]]) }}
    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
{{ Form::close() }}
-->

	<form method="POST" action="http://localhost:8000/posts/{{ $post->id }}" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="XF0Ro1tfUv4U7mgdzUrw0nPrOkdqm1Vw7d6AGMRE"> <input class="btn btn-danger" type="submit" value="Delete"><input type="hidden" name="_token" value="{{ csrf_token() }}"> </form>

<!--Cross site request forgery?-->

</article>

<hr>

@endforeach


<a href="http://localhost:8000/posts/create?" class="success button">New Entry</a>