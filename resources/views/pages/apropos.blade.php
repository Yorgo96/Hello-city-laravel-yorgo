@extends("app")

@section("title","Apropos-nous | Hello city")


@section("content")

<img src="{{asset('/images/Drapeau5.jpg')}}"  width="20%" alt="Drapeau">

    <p>Creéer avec amour &hearts; par Yorgo Pellel.</p>
    <p><a href="{{route('accueil')}}">Revenir à la page d'accueil</a></p>

@endsection
