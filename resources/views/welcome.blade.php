<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <title>Laravel-SPA - учебный проект</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>
<body>
<div id="app">
    <div class=" px-8 font-roboto flex flex-col h-screen">
        <header class="text-lg py-6 mb-8 flex justify-between">
            <div class="">
                <span class="inline-block uppercase font-bold text-xl text-primary">Laravel - SPA</span>
                <small>Учебный проект</small>
            </div>
            <button type="button" class="block lg:hidden">
                <svg width="50" height="40" fill="none">
                    <path d="M18 16h4v18h-4V16zM28 16h4v24h-4V16zM38 16h4v18h-4z" fill="currentColor"></path>
                </svg>
            </button>
            <p class="hidden lg:block">Github</p>
        </header>
        <main class="flex mb-auto">
            <aside class="w-1/5 pt-10 hidden lg:block">
                <section class="mb-10">
                    <h5 class="uppercase font-bold mb-4">Главное меню</h5>
                    <ul>
                        <li class="mb-4 text-sm">
                            <router-link class="leading-10" :to="{ name: 'home'}" exact>Главная страница</router-link>
                        </li>
                        <li class="mb-4 text-sm">
                            <router-link class="leading-10" :to="{ name: 'posts'}">Статьи</router-link>
                        </li>
                    </ul>
                </section>
                <section class="mb-10">
                    <h5 class="uppercase font-bold mb-4">Работа с данными</h5>
                    <ul>
                        <li class="mb-4 text-sm">
                            <router-link class="leading-10" :to="{ name: 'posts'}">Таблица</router-link>
                        </li>
                        <li class="mb-4 text-sm">
                            <router-link class="leading-10" :to="{ name: 'posts'}">График</router-link>
                        </li>
                    </ul>
                </section>
            </aside>
            <div class="primary flex-1">
                {{-- тут выводится контент из компонентов --}}
                <router-view></router-view>
            </div>
        </main>
        <footer class="text-lg py-6 mb-8 flex">
            <h3 class="uppercase font-bold text-xl text-primary">Футер</h3>
        </footer>
    </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
