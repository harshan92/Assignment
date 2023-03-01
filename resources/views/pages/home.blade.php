@extends("layouts.main")

@section("contents")
<h1>Home Page {{ Auth::user()->name }}</h1>
@endsection