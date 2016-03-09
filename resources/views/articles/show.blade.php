@extends('layouts.template')

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>{{ $article->title }}</h1>
		<p>
		  {{ $article->body }} 
		</p>

	</div>
</div>

<hr>

<h2>Liste des commentaires</h2>

@foreach($article->comments as $comment)
 
   <h4>{{ $comment->auteur }}</h4>
   <p>{{ $comment->contenu }}</p>
   
@endforeach


@stop