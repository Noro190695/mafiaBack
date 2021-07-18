<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>api for mafia</title>
</head>
<body>
    <ul>
        <li>
            <h2>Получить список комнатей - method: GET</h2>
            <span>https://api.bewedoc.ru/api/room</span>

        <li>
            <h2>Добовлять комнат - method: POST</h2>
            <span>https://api.bewedoc.ru/api/room/add</span>
            <br>
            <br>
            <pre> <strong>Пример:</strong>{
            name: Mafia,
            password: pass
            mafia_count:3,
            cityzen_count:7,
            don: 1,
            sherif: 1,
            doctor: 0,
            manyak: 0 }
            </pre>
        </li>

        <h2>Получить список рольей - method: GET</h2>
        <span>https://api.bewedoc.ru/api/roole</span>
        <li>
            <h2>Добовлять роль - method: POST</h2>
            <span>https://api.bewedoc.ru/api/roole/add</span>
            <br>
            <br>
            <pre> <strong>Пример:</strong>   {
            name: Mafia
           }
            </pre>
        </li>
    </ul>

</body>
</html>
