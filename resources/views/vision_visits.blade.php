<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Просмотр посещений</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container">
        <table class="visits_table">
            <thead>
                <tr>
                    <th>IP адрес посетителя</th>
                    <th>Дата посещения</th>
                    <th>Время посещения</th>
                </tr>
            </thead>
            <tbody>
                @foreach($result_arr as $value)
                <tr>
                    <td>{{ $value['ip_address'] }}</td>
                    <td>{{ $value['visit_date'] }}</td>
                    <td>{{ $value['visit_time'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
