@extends("yield")

@section("title", isset($title)?"$title":"Halaman Utama")

@section("header") <!-- ini bisa mengoverride yang ada diparent nya-->
@parent <!-- tambahkan ini jika ingin mempertahankan -->
<p>Deskripsi Header</p>
@endsection

@section("content")
<p>ini adalah content {{isset($title)?"$title":"Halaman Utama"}}</p>
@endsection

<!-- test di serve -->