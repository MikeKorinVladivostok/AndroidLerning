<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel</title>
    <style>
        .page-header {
            margin: 0 auto;
            padding: 2rem;
            background: #c7d28a;
            border-radius: 4px;
            width: 50%;
            text-align: center;
        }

        .page-title {
            font-size: 2em;
            margin: 0;
        }

        .archive-description {
            font-size: 16px;
            font-size: 1rem;
            margin-top: .5em;
        }
        .container{
            width: 800px;
            margin: 0 auto;
        }
        .e-p {
            margin-top: 15px;
        }


    </style>
    <link rel="stylesheet" href="<?php echo asset('/css/header.css')?>" type="text/css">
</head>
<body>
<header class="c-header js-header">
    <nav class="c-header__navigation c-navigation">
        <ul class="c-navigation__list">
            <li class="c-navigation__item">
                <a  href="#" class="c-navigation__itemUrl ">Services</a>
            </li>
            <li class="c-navigation__item">
                <a  href="#" class="c-navigation__itemUrl ">Projects</a>
            </li>
            <li class="c-navigation__item">
                <a  href="#" class="c-navigation__itemUrl ">How We Work</a>
            </li>
            <li class="c-navigation__item">
                <a  href="#" class="c-navigation__itemUrl ">About</a>
            </li>
            <li class="c-navigation__item">
                <a  href="#" class="c-navigation__itemUrl ">Careers</a>
            </li>
            <li class="c-navigation__item">
                <a  href="#" class="c-navigation__itemUrl ">Blog</a>
{{--                c-navigation__itemUrl--active--}}
            </li>
        </ul>

        <a class="c-header__navigation_ctaBtn e-buttonMain" href="#">
            Contact
            <svg class="e-buttonMain__arrow">
                <use xlink:href="#" />
            </svg>
        </a>
    </nav>

    <button type="button" class="c-header__menuBtn e-buttonMenu js-buttonMenu">
        <span class="e-buttonMenu__inner">Menu</span>
    </button>

</header>
<main class="py-4">
    @yield('content')
</main>
</body>
</html>

