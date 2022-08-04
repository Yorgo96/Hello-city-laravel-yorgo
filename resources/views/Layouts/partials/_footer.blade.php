<footer>
    <p class="text-gray-400">
        &copy; copyright {{date("Y")}} &middot;
        @if(!Route::is('apropos'))
            <a href="{{route('apropos')}}" class="text-indigo-500 hover:text-indigo-600 underline">Apropos-nous</a>
        @endif
    </p>
</footer>
