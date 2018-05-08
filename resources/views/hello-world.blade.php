@section('title', 'Hello World')
@extends('head.head')
@section('styles')
<link rel="stylesheet" href="hello-world.css">
@endsection

<body>
@if ($users)
@foreach ($users as $user)
    <p>My name is {{ $user->name }} and i am {{ $user->age }}</p>
    <a href="details/{{$user->id}}">Click to know what i like</a>
@endforeach
@else
 <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/Markhor_Schraubenziege_Capra_falconeri_Zoo_Augsburg-02.jpg/800px-Markhor_Schraubenziege_Capra_falconeri_Zoo_Augsburg-02.jpg" alt="">
 <p>No Users Available</p>
@endif
</body>