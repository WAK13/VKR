@extends('layouts.app')



@section('content')

    <section>
        <div class="side1">
            <ul class="menu1">
                <li class="menu__list1"><a>Где  могу скачать приложени от вашей компании или связваться с вами?</a>
                    <ul class="menu__drop1">
                        <li><a>В интернете,где же еще </a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="side1">
            <ul class="menu1">
                <li class="menu__list1"><a>Где  могу скачать приложени от вашей компании или связваться с вами?</a>
                    <ul class="menu__drop1">
                        <li><a>В интернете,где же еще</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="side1">
            <ul class="menu1">
                <li class="menu__list1"><a>Где  могу скачать приложени от вашей компании или связваться с вами?</a>
                    <ul class="menu__drop1">
                        <li><a>В интернете,где же еще </a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="side1">
            <ul class="menu1">
                <li class="menu__list1"><a>Где  могу скачать приложени от вашей компании или связваться с вами?</a>
                    <ul class="menu__drop1">
                        <li><a>В интернете,где же еще </a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="side1">
            <ul class="menu1">
                <li class="menu__list1"><a>Где  могу скачать приложени от вашей компании или связваться с вами?</a>
                    <ul class="menu__drop1">
                        <li><a>В интернете,где же еще </a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="side1">
            <ul class="menu1">
                <li class="menu__list1"><a>Где  могу скачать приложени от вашей компании или связваться с вами?</a>
                    <ul class="menu__drop1">
                        <li><a>В интернете,где же еще </a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="side1">
            <ul class="menu1">
                <li class="menu__list1"><a>Где  могу скачать приложени от вашей компании или связваться с вами?</a>
                    <ul class="menu__drop1">
                        <li><a>В интернете,где же еще </a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="side1">
            <ul class="menu1">
                <li class="menu__list1"><a>Где  могу скачать приложени от вашей компании или связваться с вами?</a>
                    <ul class="menu__drop1">
                        <li><a>В интернете,где же еще </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </section>

@endsection

@section('info')

    <div class="middle-col callback">
        <h4 class="filter__title">Обратная связь</h4>
        <form action="">
            <div class="form__body">
                <label for="name">Имя</label>
                <input type="text" placeholder="Ваше имя" required name="name">
                <label for="mail">Почта</label>
                <input type="email" placeholder="Ваша почта" required name="mail">
                <label for="message">Ваш вопрос</label>
                <textarea rows="4" placeholder="Ваше сообщение" required name="message"></textarea>
            </div>
            <div class="submit__block">
                <button type="submit" class="btn__sbmt">Отправить</button>
            </div>
        </form>
    </div>

@endsection

@section('script')

    <script src="/js/accordeon.js"></script>

@endsection