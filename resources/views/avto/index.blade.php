<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight" align="center"><b>
            {{ __('Автомобили') }}
        </b></h2>
    </x-slot>
    <!-- Подключение Bootstrap через CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Подключение FontAwesome через CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Регистрационный № авто</th>
                            <th>Название авто</th>
                            <th>Год выпуска</th>
                            <th>Пробег</th>
                            <th>Категория</th>
                            <th>Действия</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($avto as $avto)
                        <tr>
                            <td>{{ $avto->id_avto }}</td>
                            <td>{{ $avto->registration_number }}</td>
                            <td>{{ $avto->name_avto }}</td>
                            <td>{{ $avto->god }}</td>
                            <td>{{ $avto->probeg }}</td>
                            <td>{{ $avto->category }}</td>
                            <td>
                                <a href="{{ route('avto.view', $avto->id_avto) }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</x-app-layout>