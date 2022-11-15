@extends('layout.main')

@section('container')

<article class="mb-5">

    <h2>
        Name: {{ $gsl["name"] }}
    </h2>
    <h5>Description: {{ $gsl["body"] }}</h5>

    <h3>{{ $gsl["message"] }}</h3>
</article>

<a href="/gslc">Click here if u want see another Roger</a>
@endsection
