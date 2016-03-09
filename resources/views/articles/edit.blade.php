@extends('layouts.template')

@section('content')

<div class="row">
	<div class="col-md-12">
		<h1>Page edit</h1>
		
		{!! Form::open(['url' => URL::to('articles/'.$article->id), 'method' => 'put']) !!}
		 <div class="form-group">
            {!! Form::text('title', $article->title, ['placeholder' => 'Titre article', 'class' => 'form-control']) !!}
         </div>

         <div class="form-group">
            {!! Form::textarea('body', $article->body, ['placeholder' => 'Votre article', 'class' => 'form-control']) !!}
         </div>

         <div class="form-group">
         	{!! Form::submit('Modifier', ['class' => 'btn btn-danger btn-block']) !!}
         </div>

		 {!! Form::close() !!}


	</div>
</div>

@stop