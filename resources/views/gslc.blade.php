@extends('layout.main')

@section('container')

    <h1 class="mb-5">Page GSLC 1 | Roger in some universe</h1>
    @if (count($gslc) > 1)
        <h2 class="text-danger mb-5">Be careful there are multiple roger, so remember the real one is 2440028754 - Roger Van Soegihjanto from earth 406</h2>
    @endif

    @foreach ($gslc as $gsl)

        <article class="mb-5">

            <h2>
                <a href="/gslc/{{ $gsl["slug"] }}"> {{ $gsl["name"] }}</a>
            </h2>
            <h5>Description: {{ $gsl["body"] }}</h5>

            <h3>{{ $gsl["message"] }}</h3>
        </article>

    @endforeach


@endsection
