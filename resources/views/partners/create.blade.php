@extends('layouts.layout')
@section('title', 'Создание')
@section('content')
    <h1>Добавить партнёра</h1>
    <form action="{{ route('partners.store') }}" method="POST" enctype="multipart/form-data" class="bg-white p-4 rounded shadow-sm">
        @csrf

        <div class="row">
            <div class="col-md-6">

                <div class="mb-3">
                    <label for="partner_type_id" class="form-label">Тип</label>
                    <input type="text" class="form-control" id="partner_type_id" name="partner_type_id" value="{{ old('partner_type_id') }}" >
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Название компании</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" >
                </div>

                <div class="mb-3">
                    <label for="director" class="form-label">Директор</label>
                    <input type="text" class="form-control" id="director" name="director" value="{{ old('director') }}" >
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" >
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Телефон</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}">
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Адрес</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
                </div>

                <div class="mb-3">
                    <label for="rating" class="form-label">Рейтинг</label>
                    <input type="text" class="form-control" id="rating" name="rating" value="{{ old('rating') }}">
                </div>

                <div class="mb-3">
                    <label for="inn" class="form-label">ИНН</label>
                    <input type="text" class="form-control" id="inn" name="inn" value="{{ old('inn') }}">
                </div>

            </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Создать партнёра</button>
                    <a href="{{ route('partners.index') }}" class="btn btn-outline-secondary">Отмена</a>
                </div>
        </div>
    </form>
@endsection
