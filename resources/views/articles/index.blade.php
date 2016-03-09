@extends('layouts.template')

@section('content')



<div class="row">
	<div class="col-md-12">
		<h1>Page index</h1>
   
    <a href="{{ URL::to('articles/create') }}" class="btn btn-success">Nouveau</a>

 	@foreach($articles as $article)	

	   <h2>{{ $article->title }}</h2>
	    <p>{{ substr($article->body, 0, 500) }}...</p>
       
       <p>
       	  <a href="{{ URL::to('articles/'.$article->id.'/edit') }}" class="btn btn-danger">Editer</a>
          <a href="{{ URL::to('articles/'.$article->id) }}" class="btn btn-default">Voir</a>
       </p>

      	@endforeach
    
    <div class="">{{ $articles->links() }}</div>

	</div>
</div>


@stop