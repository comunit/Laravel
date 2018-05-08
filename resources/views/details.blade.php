@section('title', $users[0]->name)
@extends('head.head')
@section('styles')
<link rel="stylesheet" href="hello-world.css">
@endsection

<body>
  <h1>hello</h1>
  <h1>{{ $users[0]->name }}</h1>
  <h2>{{ $users[0]->age }}</h2>
  <p>And i like to {{ $users[0]->likes }}</p>
</body>