@section('title', 'form') @extends('head.head') @section('styles')
<link rel="stylesheet" href="form.css"> @endsection

<body>
  <form method="post" action="form">
    @csrf
    <label for="name">name</label>
    <input type="text" name="name">
    </br>
    <label for="name">age</label>
    <input type="number" name="age">
    </br>
    <label for="name">likes</label>
    <input type="text" name="likes">
    </br>
    <input type="submit" value="submit">
  </form>
</body>