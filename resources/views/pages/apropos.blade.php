@extends('app')

@section('title', 'A propos | ' . config('app.name'))
  

@section('content')
  <img src="/images/profil.jpg" alt="Profile Cheikh TK" width="150" height="150">

  <p>Développé par Cheikh TK &hearts;</p>
  <p><a href="{{ route('home') }}">Retour à la page d'accueil</a></p>
@endsection
