<h1>Entries</h1>

<hr>
  
@foreach ($posts as $post)
<tr>
<article>
	<h1>{{ $post->name }}</h1>
	<!-- <div class="body"> {{ $post->address }}</div> -->
	</br>
	{{ $post->address}}
	</br>
	{{ $post->phone }}
	</br>
	{{ $post-> email }}
	</br>
<!--{{ link_to_route('posts.edit', 'Edit', [$post->id], ['class' => 'tiny button']) }}-->
<a href="http://localhost:8000/posts/{{ $post->id }}/edit" class="tiny alert button">Edit</a>

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

	<form method="POST" action="http://localhost:8000/posts/{{ $post->id }}" accept-charset="UTF-8"><input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="XF0Ro1tfUv4U7mgdzUrw0nPrOkdqm1Vw7d6AGMRE"> <input class="btn btn-danger" type="submit" value="Delete"> </form>

</article>

<hr>

@endforeach


<a href="http://localhost:8000/posts/create?" class="success button">New Entry</a>