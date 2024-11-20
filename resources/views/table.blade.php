<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Главная') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <div align="center"><b style="font-size: 30px">{{ __("Таблицы") }}</b></div>
                <br>
                    <link rel="stylesheet" type="text/css" href="/css/1.css" />
<div class="contact-list">
            <div class="contact-item">
                <div align="center"><a href="{{ route('voditeli.index') }}" class="btn btn-primary btn-sm"><img src="/img/voditeli.jpg" width="40%"></div>
                <h2><b style="font-size: 30px">Водители</b></h2></a>
            </div>
            <div class="contact-item">
            <div align="center"><a href="{{ route('marh.index') }}" class="btn btn-primary btn-sm"><img src="/img/marh.jpg" width="40%"></div>
            <h2><b style="font-size: 30px">Маршруты</b></h2></a>
            </div>
            <div class="contact-item">
            <div align="center"><a href="{{ route('tovar.index') }}" class="btn btn-primary btn-sm"><img src="/img/tovar.jpeg" width="40%"></div>
            <h2><b style="font-size: 30px">Товар</b></h2></a>
            </div>
            <div class="contact-item">
            <div align="center"><a href="{{ route('avto.index') }}" class="btn btn-primary btn-sm"><img src="/img/avto.jpg" width="40%"></div>
            <h2><b style="font-size: 30px">Автомобили</b></h2></a>
            </div>
            <div class="contact-item">
            <div align="center"><a href="{{ route('dispet.index') }}" class="btn btn-primary btn-sm"><img src="/img/dispet.jpg" width="40%"></div>
            <h2><b style="font-size: 30px">Диспетчерская</b></h2></a>
            </div>
            <div class="contact-item">
            <div align="center"><a href="{{ route('garage.index') }}" class="btn btn-primary btn-sm"><img src="/img/garage.jpg" width="40%"></div>
            <h2><b style="font-size: 30px">Гаражи</b></h2></a>
            </div>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>