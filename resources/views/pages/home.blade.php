@extends('app')

@section('title')

@section('content')
  <img src="{{ asset('images/sn.png') }}" alt="Drapeau du Senegal" width="150" height="150">

  <h1>Hello from Dakar!</h1>
  <p>Il est en ce moment : {{ date('h:i A') }} UTC</p>
@endsection
