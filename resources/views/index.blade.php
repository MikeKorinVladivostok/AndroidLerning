@extends('header')

@section('content')

@if(isset($posts))
    <div class="l-container--sm">
        <h1 class="e-h1 e-h1--bold">Разработка приложений под Android with Kotlin</h1>
@foreach($posts as $value)
            <p class="e-p">{{$value -> description}}</p>
@endforeach

@endif
    </div>
        <a class="c-header__navigation_ctaBtn e-buttonMain" href="/newpost">
            Создать пост
            <svg class="e-buttonMain__arrow">
                <use xlink:href="#black-arrow-right" />
            </svg>
        </a>
@endsection
