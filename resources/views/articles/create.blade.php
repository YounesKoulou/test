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
	<col-md-12>
		<h2>allali youssef derri zwiwenn</h2>
		<h2>haja 3adiiiiya</h2>
	</col-md-12>
</div>

<div class="row">
	<div class="col-md-12">
		<h1>Page create - AUTHOR: Hicham</h1>
		 
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