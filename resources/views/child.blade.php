@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    
@endsection

@section('content')
    <div class="titre">Page d'acceuil</div>
	<Div class="articles">
	    @foreach($blog as $blog)
		    <p>N°{{$blog->id}} Titre : {{$blog->titre}}</p>
		    <blockquote>{{$blog->texte}}</blockquote>
		<br>
    	@endforeach
	</Div>
@endsection