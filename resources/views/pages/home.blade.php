@extends('app')

@section('title')

@section('content')
  <h1>Hello from Dakar!</h1>
  <p>Il est en ce moment : {{ date('h:i A') }} UTC</p>
@endsection
