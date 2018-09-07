@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    
@endsection

@section('content')
    <div class="titre">Page d'acceuil</div>

    @foreach($blog as $blog)

    <p>{{$blog->id}}</p>
    <p>{{$blog->titre}}</p>
    <p>{{$blog->texte}}</p>

    @endforeach
@endsection