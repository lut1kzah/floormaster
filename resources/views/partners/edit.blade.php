@extends('layouts.layout')
@section('title', 'Редактирование')
@section('content')
    <h1>Редактировать партнёра</h1>
    <form action="{{ route('partners.update', $partner->id) }}" method="POST" enctype="application/x-www-form-urlencoded" class="bg-white p-4 rounded shadow-sm">
        @csrf

        <div class="row">
            <div class="col-md-6">

                <div class="mb-3">
                    <label for="partner_type_id" class="form-label">Тип</label>
                    <input type="text" class="form-control" id="partner_type_id" name="partner_type_id" value="{{ $partner->partner_type_id }}" >
                    @error('partner_type_id')
                    {{$message}}
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Название компании</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $partner->name }}" >
                    @error('name')
                    {{$message}}
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="director" class="form-label">Директор</label>
                    <input type="text" class="form-control" id="director" name="director" value="{{$partner->director }}" >
                    @error('director')
                    {{$message}}
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{$partner->email }}" >
                    @error('email')
                    {{$message}}
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Телефон</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ $partner->phone }}">
                    @error('phone')
                    {{$message}}
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Адрес</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ $partner->address }}">
                    @error('address')
                    {{$message}}
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="rating" class="form-label">Рейтинг</label>
                    <input type="text" class="form-control" id="rating" name="rating" value="{{ $partner->rating  }}">
                    @error('rating')
                    {{$message}}
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="inn" class="form-label">ИНН</label>
                    <input type="text" class="form-control" id="inn" name="inn" value="{{ $partner->inn }}">
                    @error('inn')
                    {{$message}}
                    @enderror
                </div>

            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Обновить данные</button>
                <a href="{{ route('partners.index') }}" class="btn btn-outline-secondary">Отмена</a>
            </div>
        </div>
    </form>
@endsection


