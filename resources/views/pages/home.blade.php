@extends("layouts.main")

@section("contents")
<h1 class="text-center">Hi! {{ Auth::user()->name }}</h1>
    <p class="text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae, vitae ab suscipit voluptates voluptas ullam error cum quaerat placeat, facere nostrum quae dignissimos corporis sunt dolore labore fugit? Debitis, ipsa.</p>

@endsection