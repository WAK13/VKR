@extends('layouts.app')



@section('content')

    <div class="middle-col">
        @foreach($users as $u)
            @if(Auth::user()->id == $u->id)
                <form method="POST" enctype="multipart/form-data">
                    <div class="avatar">
                        <img class="avatar__img" src="/storage/{{$u->avatar}}">
                        <input type="file">
                    </div>
                    <div>

                            <input type="text" name="name" placeholder="{{$u->name}}">
                            <input type="text" name="name" placeholder="{{$u->email}}">

                        <h2> Сменить пароль </h2>
                        <input type="password" placeholder="Старый пароль">
                        <input type="password" placeholder="Новый пароль">
                    </div>
                    <button type="submit" class="btn1">Обновить</button>
                </form>
            @endif
        @endforeach()
    </div>
@endsection