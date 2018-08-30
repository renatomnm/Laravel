@extends('layouts.modelo')

@section('content')
  <h1>{{ $filme->title }}</h1>
  <h2>{{ $filme->rating }}</h2>
@endsection
