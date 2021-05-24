@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <section>
            <div class="glav">
                <div class="map" id="map" style="height: 800px; width: 50%;">

                </div>
                <div class="i">
                    <form method="POST" action="/create" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <ul>
                            <li><input type="number" name="latitude" step="any" placeholder="Широта" class="f"></li>
                            <li><input class="f" placeholder="Долгота" type="number" name="longitude" step="any"></li>
                        </ul>

                        <div class="side">
                            <ul class="menu">
                                    <input type="text" style="display: none;" value="" class="accident-value">
                                    <li class="menu__list"><a class="accident-val">Выберите происшествие</a>
                                        <ul class="menu__drop">
                                            @foreach($status as $ss)
                                                <li><a class="accident-item" data-id="{{$ss->id}}">{{ $ss->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                            </ul>
                        </div>
                        <div class="d">
                            <button type="submit" class="btn1">Поделиться</button>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </section>
    @else
        <div class="map1" id="map" style="height: 800px; width: 60%;">

        </div>
    @endif
@endsection

@section('script')
    <script src="/js/dd.js"></script>
    <script>
        ymaps.ready(function () {
            var myMap = new ymaps.Map('map', {
                    center: [59, 30],
                    zoom: 7
                }, {
                    searchControlProvider: 'yandex#search'
                }),

                // Создаём макет содержимого.
                MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                    '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
                ),
                @foreach($springs as $spring)
                    myPlacemark{{ $spring->id }} = new ymaps.Placemark([{{ $spring->latitude }}, {{ $spring->longitude }}], {

                    }, {
                        // Опции.
                        // Необходимо указать данный тип макета.
                        iconLayout: 'default#imageWithContent',
                        // Своё изображение иконки метки.
                        iconImageHref: 'images/m.png',
                        // Размеры метки.
                        iconImageSize: [24, 36],
                        // Смещение левого верхнего угла иконки относительно
                        // её "ножки" (точки привязки).
                        iconImageOffset: [-24, -24],
                        // Смещение слоя с содержимым относительно слоя с картинкой.
                        iconContentOffset: [15, 15],
                        // Макет содержимого.
                        iconContentLayout: MyIconContentLayout
                    });
                @endforeach
                @foreach($springs as $spring)
                    myMap.geoObjects
                        .add(myPlacemark{{ $spring->id }});
                @endforeach
        });
    </script>

@endsection