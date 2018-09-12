@extends('layouts.app')

@section('content')
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
  </head>
  <body>
    <h1>Bem Vindo {{ $user->name }}</h1>
    <h2>Email: {{ $user->email }}</h2>
    <h2>Phone: {{ $user->phone }}</h2>
  </body>
</html>
@endsection
