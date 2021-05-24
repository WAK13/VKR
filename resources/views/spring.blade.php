@extends('layouts.app')

@section('content')

    <div class="middle-col">
        <div class="spring">
            <div class="spring__header">
                <p class="spring__header-status">Статус: @if ($springs[0]->status_id == 1) Актуально @elseif($springs[0]->status_id == 2) Не <акутально>        </акутально> @else Нет данных @endif</p>
                <p class="spring__header-date">{{ substr($springs[0]->created_at, 0, 10) }}</p>
            </div>
            <div class="spring__image">
                <img src="../storage/{{ $springs[0]->img }}" alt="{{ $springs[0]->name }}">
            </div>
            <div class="spring__info">
                <p class="spring__info-title">{{ $springs[0]->name }}</p>
                <p class="spring__info-desc">
                    {{ $springs[0]->description }}
                </p>
            </div>

            <hr>

            <div class="spring__comments">
                <p class="spring__comments-title">Комментарии</p>

                <div class="spring__comments-block">
                    <div class="spring__comments-block-info">
                        <img src="#">
                        <p class="spring__comments-block-name">Имя</p>
                    </div>
                    <div class="spring__comments-block-comment">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum quam sit amet massa sagittis, in vulputate nisi accumsan
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum quam sit amet massa sagittis, in vulputate nisi accumsan
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum quam sit amet massa sagittis, in vulputate nisi accumsan
                        </p>
                        <div class="spring__comments-block-comment-date">
                            <p>07-10-2020</p>
                        </div>
                    </div>
                </div>
                <hr>

                <div class="spring__comments-block">
                    <div class="spring__comments-block-info">
                        <img src="#">
                        <p class="spring__comments-block-name">Имя</p>
                    </div>
                    <div class="spring__comments-block-comment">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum quam sit amet massa sagittis, in vulputate nisi accumsan
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum quam sit amet massa sagittis, in vulputate nisi accumsan
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum quam sit amet massa sagittis, in vulputate nisi accumsan
                        </p>
                        <div class="spring__comments-block-comment-date">
                            <p>07-10-2020</p>
                        </div>
                    </div>
                </div>
                <hr>

            </div>
        </div>
    </div>

@endsection
