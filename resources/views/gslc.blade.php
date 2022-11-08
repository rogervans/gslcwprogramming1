@extends('layout.main')

@section('container')

    <h1 class="mb-5">Page GSLC 1 | Roger in some universe</h1>
    {{-- <h2>{{ $name }}</h2>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200"> --}}
    @if (count($gslc) > 1)
        <h2 class="text-danger mb-5">Be careful there are multiple roger, so remember the real one is 2440028754 - Roger Van Soegihjanto from earth 406</h2>
    @endif

    @foreach ($gslc as $gsl)

        <article class="mb-5">

            <h2>Nama: {{ $gsl["name"] }}</h2>
            <h5>Deskripsi: {{ $gsl["body"] }}</h5>

            <h3>{{ $gsl["message"] }}</h3>
        </article>

    @endforeach


@endsection
