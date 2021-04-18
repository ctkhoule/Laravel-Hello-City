@extends('app')

@section('title', 'A propos | ' . config('app.name'))
  

@section('content')
  <p>Développé par Cheikh TK &hearts;</p>
  <p><a href="{{ route('home') }}">Retour à la page d'accueil</a></p>
@endsection
