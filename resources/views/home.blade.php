@extends('layouts.app')

@section('title-block') Главная страница @endsection

@section('content')
<div class="portfolio">
    <div class="portfolio-cont container">
        <div class="portfolio-img">
            <img src="img\portfolio.png" alt="">
        </div>
        <div class="portfolio-rightcol">
            <p class="portfolio-name">
                <span>Виктория</span>
                <span>Иванова</span>
                <span>графический дизайнер</span>
            </p>
            <p class="portfolio-txt">
                <span>PORT</span>
                <span>FOLIO</span>
            </p>
        </div>
    </div>
</div>

<div class="container section" id = "about">
    <h1>привет, я Вика</h1>
    <div class="about">
        <p><span>Я графический дизайнер из Томска. Мне нравится работать с типографикой, разрабатывать дизайн упаковки, создавать плакаты
      и рисовать к проектам векторные и растровые иллюстрации. Всегда стараюсь смотреть на работу с разных ракурсов и искать
      вдохновение в изобразительном искусстве, музыке и кино.</span></p>
        <img src="img\portrait.svg" alt="">
    </div>
</div>

<div class="container section" id="projects">
    <img class="projects-title" src="img\projects.svg" alt="">
    <div class="projects-grid">
        @foreach($data as $el)
        <a href="{{ route('ShowOnePortfolio', $el->id) }}" class="project-link"><img src="{{$el->intro }}" alt=""><span>{{ $el->title }}</span></a>
        @endforeach
    </div>
</div>

<div class="container section" id = "contacts">
    <div class="contacts">
        <img src="img\contacts.svg" alt="">

        <div class="contact">
            <p>позвонить или написать</p>
            <div class="contact-links">
                <a href="tel:89234999166" class="contact-link">+7 923-499-91 66</a>
                <a href="mailto:vikaivanovadesign@gmail.com" class="contact-link">vikaivanovadesign@gmail.com</a>
            </div>
        </div>
        <div class="contact">
            <p>социальные сети</p>
            <div class="contact-links">
                <a href="https://www.behance.net/vikauzur0ba5" class="contact-link social-link">Behance</a>
                <a href="https://vk.com/away.php?utf=1&to=https%3A%2F%2Finstagram.com%2Fakiv_avonavi%3Figshid%3DYmMyMTA2M2Y%3D" class="contact-link social-link">Instagram</a>
                <a href="https://vk.com/thetaatheshaa" class="contact-link social-link">VK</a>
            </div>
        </div>

        <span>2022</span>
    </div>

</div>
@endsection
