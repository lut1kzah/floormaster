
@extends('layouts.layout')

@section('content')
    <h1>Список партнёров</h1>
    <div>

        <a href="{{route('partners.create')}}"><button class="bt1">Добавить партнера</button></a>

    </div>
    @foreach($partners as $partner)
        <div class="list">
            <div class="name">{{ $partner->name }}</div>
            <div class="director">Директор:{{ $partner->director}}</div>
            <div class="phone">+7 {{ $partner->phone }}</div>
            <div class="rating">Рейтинг:{{ $partner->rating }}</div>
            <a href="{{route('partners.edit', $partner->id )}}"><button class="bt2">Редактировать партнера</button></a>
        </div>

    @endforeach

@endsection
