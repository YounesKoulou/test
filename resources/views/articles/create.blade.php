@extends('layouts.template')

@section('content')

@if(count($errors->all()))
<div class="row">
	<div class="col-md-12 alert alert-danger">
	  <ul>
	   	 @foreach($errors->all() as $erreur)
	  	   <li>{{ $erreur }}</li>
	  	 @endforeach
	  </ul>
	</div>
</div>
@endif

<div class="row">
	<div class="col-md-12">
		<h1>Lorem ipsum dolor sit amet. </h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus illo, molestiae iusto cumque culpa nihil quibusdam. Velit nostrum quisquam ut! </p>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<h1>Page create</h1>
		 
		 {!! Form::open(['url' => URL::to('articles'), 'method' => 'post']) !!}
		 <div class="form-group">
            {!! Form::text('title', '', ['placeholder' => 'Titre article', 'class' => 'form-control']) !!}
         </div>

         <div class="form-group">
            {!! Form::textarea('body', '', ['placeholder' => 'Votre article', 'class' => 'form-control']) !!}
         </div>

         <div class="form-group">
         	{!! Form::submit('Valider', ['class' => 'btn btn-primary btn-block']) !!}
         </div>

		 {!! Form::close() !!}

	</div>
</div>


@stop