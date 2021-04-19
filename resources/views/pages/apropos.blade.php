@extends('layouts/app')

@section('title', 'A propos | ' . config('app.name'))
  

@section('content')
  <img src="{{ asset('images/profil.jpg') }}" alt="Profile Cheikh TK" width="200" height="200" class="my-12 rounded-full shadow-md h-32">
  <h2 class="mb-5 text-lg text-gray-700">
    Développé par Cheikh TK <span class="text-pink-500">&hearts;</span>
  </h2>
  <p>
    <a href="{{ route('home') }}" class="text-indigo-500 hover:text-indigo-600 underline">Retour à la page d'accueil</a>
  </p>
@endsection
 