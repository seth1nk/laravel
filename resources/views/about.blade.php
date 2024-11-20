<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('О нас') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div align="center"><b style="font-size: 30px"> {{ __("Наши преимущества") }}</b></div>
                    <link rel="stylesheet" type="text/css" href="/css/1.css" />
                    <div class="site-about">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div class="border p-4 rounded-lg shadow-md">
                                <div align="center"><img src="/img/pickup.png"></div>
                                <p align="center">><b>Доставка авто от 7 дней</b><br>
                                Привезем Вам автомобиль по выбранной модели и комплектации по договору поставки</p>
                            </div>
                            <div class="border p-4 rounded-lg shadow-md">
                                <div align="center"><img src="/img/bank.png"></div>
                                <p align="center">><b>Подбор кредита за 15 минут</b><br>
                                Поможем с оформлением кредита в быстрый срок. Имеем более 10 банков партнеров</p>
                            </div>
                            <div class="border p-4 rounded-lg shadow-md">
                                <div align="center"><img src="/img/agreement.png"></div>
                                <p align="center">><b>18 лет в автомобильной сфере</b><br>
                                Мы имеем большой опыт в сфере продажи автомобилей и дорожим своим именем</p>
                            </div>
                            <div class="border p-4 rounded-lg shadow-md">
                                <div align="center"><img src="/img/contract.png"></div>
                                <p align="center">><b>Юридическая чистота сделки</b><br>
                                Все условия в договоре максимально прозрачны. Без скрытых условий и уловок</p>
                            </div>
                            <div class="border p-4 rounded-lg shadow-md">
                                <div align="center"><img src="/img/traffic-sign.png"></div>
                                <p align="center">><b>Без навязывания услуг и скрытых платежей</b><br>
                                Мы уважаем наших Клиентов и не предлагаем дополнительных платежей</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>