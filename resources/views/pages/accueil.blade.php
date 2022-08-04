@extends("app")

@section("title")

@section("content")

    <img src="{{asset('/images/Drapeau6.jpg')}}" width="20%" alt="Drapeau">

    <h1>Bonjour dèpuis Conakry</h1>
    <p>Il est actuellement {{date("h : i A")}}.</p>

@endsection
