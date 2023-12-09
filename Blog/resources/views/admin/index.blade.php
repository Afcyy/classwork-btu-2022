@extends("admin-layout")

@section("content")
    <h1>Admin Home page</h1>
    <a href='{{ route("adminadd") }}'>add Menu item </a>
@endsection