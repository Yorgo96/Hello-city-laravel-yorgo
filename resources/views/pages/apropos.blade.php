@extends("app")

@section("title","Apropos-nous | Hello city")


@section("content")

<img src="{{asset('/images/Drapeau5.jpg')}}"  width="20%" alt="Drapeau" class="my-12 rounded-full shadow">

    <h2 class="mb-5 text-gray-700">
        Creéer avec amour <span class="text-pink-500">&hearts;</span> par Yorgo Pellel.
    </h2>
    <p>
        <a href="{{route('accueil')}}" class="text-indigo-500 hover:text-indigo-600 underline">Revenir à la page d'accueil</a>
    </p>

@endsection
