<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" align="center"><b>
            {{ __('Информация об автомобиле') }}
        </b></h2>
    </x-slot>
    <br>
    <style>
        .container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 600px; /* Устанавливаем фиксированную ширину */
            margin: 0 auto; /* Центрируем контейнер по горизонтали */
        }
        .btn-success {
            background-color: #28a745; /* Зеленый цвет */
            color: white; /* Белый цвет текста */
            padding: 10px 20px; /* Отступы внутри кнопки */
            border: none; /* Убираем границу */
            border-radius: 5px; /* Скругляем углы */
            text-decoration: none; /* Убираем подчеркивание ссылки */
            display: inline-block; /* Делаем кнопку блочным элементом */
            font-size: 16px; /* Размер шрифта */
            cursor: pointer; /* Изменяем курсор при наведении */
        }

        .btn-success:hover {
            background-color: #218838; /* Темнее зеленый цвет при наведении */
        }
    </style>
    <div class="container mt-5">
        <p><strong>ID:</strong> {{ $voditeli->id_vod }}</p>
        <p><strong>ФИО водителя:</strong> {{ $voditeli->name_vod }}</p>
        <p><strong>Стаж:</strong> {{ $voditeli->stazh }}</p>
        <p><strong>№ паспорта:</strong> {{ $voditeli->number_pass }}</p>
        <p><strong>Место прописки:</strong> {{ $voditeli->adress }}</p>
        <p><strong>Телефон:</strong> {{ $voditeli->phone }}</p>
    </div>
    <br>
    <div align="center"><a href="{{ route('voditeli.index') }}" class="btn btn-success">Вернуться</a></div>
</x-app-layout>