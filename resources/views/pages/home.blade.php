@extends('layouts/app')

@section('title')

@section('content')
  <img src="{{ asset('images/sn.png') }}" alt="Drapeau du Senegal" width="200" height="200" class="mt-12 rounded shadow-md h-32">
  <h1 class="mt-5 text-3xl sm:text-5xl font-semibold text-indigo-800">Hello from Dakar!</h1>
  <p class="text-lg text-gray-800">Il est en ce moment : {{ date('h:i A') }} UTC</p>
@endsection
 