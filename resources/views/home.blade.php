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
                <div align="center"><b style="font-size: 30px">{{ __("Автосалон: АВТО-НЕЙЗ") }}</b></div>
                    <style>
   .ramka {
    border: 3px solid #00a8e1;
   }
</style>
<pre><b>           Выбери себе автомобиль</b></h2>

<pre>
Автомобили из <u>Южной Кореи</u>, <u>Китая</u>, <u>Японии</u>, <u>Германии</u>, <u>США</u>, <u>Европы ОАЭ</u>,
<u>Казахстана</u> и <u>Армении</u> в наличии и под заказ

Проверенные автомобили с пробегом и без:</pre>
<div align="center"><img src="{{ asset('img/toyota.jpeg') }}"  width="50%" class="ramka"></div>
<div align="center"><b style="font-size: 50px">TOYOTA</b></div>
<div align="center"><img src="{{ asset('img/bmw.jpg') }}" width="50%" class="ramka"></div>
<div align="center"><b style="font-size: 50px">BMW</b></div>
<div align="center"><img src="{{ asset('img/mers.jpeg') }}"  width="50%" class="ramka"></div>
<div align="center"><b style="font-size: 50px">MERCEDES</b></div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
