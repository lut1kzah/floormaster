
@extends('layouts.layout')

@section('content')
    <h1>Список партнёров</h1>

    @foreach($partners as $partner)
        <div>
            <p>{{ $partner->name }}</p>
            <p>{{ $partner->director}}</p>
            <p>{{ $partner->email }}</p>
            <p>{{ $partner->phone }}</p>
            <p>{{ $partner->address }}</p>
            <p>{{ $partner->rating }}</p>
            <p>{{ $partner->inn }}</p>
        </div>

    @endforeach

@endsection
