@extends('layouts.app')



@section('content')

    <section>
        <div class="main">
            <div class="child_main_one">
                <h1 class="main_h">Расскажи нам о чрезвычайном событии</h1>
                <p class="main_txt">Это онлайн карта, на которой ты сможешь <br> видеть и отмечать происшествия.<br>
                    Поскорее поделись с нами своей <br> информацией!</p>
                <a href="{{ url('/add') }}" class="btn">Поделиться</a>
            </div>
            <div class="child_main_two">
                <img src="img/map_icon.png" alt="maps">
            </div>
        </div>
    </section>

@endsection


@section('script')

    <script src="/js/dd.js"></script>

@endsection