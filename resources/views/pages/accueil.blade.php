@extends("app")

@section("title")

@section("content")

    <img src="{{asset('/images/Drapeau6.jpg')}}" width="20%" alt="Drapeau" class="rounded shadow-md h-32">

    <h1 class="mt-5 sm:text-5xl text-3xl font-semibold text-indigo-600">Bonjour dèpuis Conakry</h1>
    <p class=" text-lg tex-gray-800 ">Il est actuellement {{date("h : i A")}}.</p>

@endsection
