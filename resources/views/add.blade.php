@extends('layouts.app')

@section('content')
    <div class="middle-col">
        @if (Auth::check())
            <form method="POST" action="/create" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form__body">
                    <label for="name">Название</label>
                    <input type="text" name="name">
                    <label for="img">Изображение</label>
                    <input type="file" name="img">
                    <div class="coords">
                        <div class="coords__lat">
                            <label for="latitude">Широта</label>
                            <input type="number" name="latitude" step="any">
                        </div>
                        <div class="coords__long">
                            <label for="longitude">Долгота</label>
                            <input type="number" name="longitude" step="any">
                        </div>
                    </div>
                    <label for="status_id">Статус</label>
                    <select name="status_id">
                        <option value="1">Акутально</option>
                        <option value="2">Не акутально</option>
                        <option value="3">Без данных</option>
                    </select>
                    <label for="description">Описание</label>
                    <textarea name="description" rows="5"></textarea>
                </div>
                <div class="submit__block">
                    <button type="submit" class="btn4">Отправить</button>
                </div>
            </form>
        @else
            <h2>Пожалуйста, авторизуйтесь:</h2>

            <a href="{{ url('/login') }}"><button class="btn4" style="margin-right: 20px;">Вход</button></a>
            <a href="{{ url('/register') }}"><button class="btn4">Регистрация</button></a>
        @endif
    </div>
@endsection