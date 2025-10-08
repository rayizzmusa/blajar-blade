@extends("yield")

@section("title", isset($title)?"$title":"Halaman Utama")

@section("header")
<p>Deskripsi Header</p>
@endsection

@section("content")
<p>ini adalah content {{$title}}</p>
@endsection

<!-- test di serve -->