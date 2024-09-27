<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/cuba/style.css') }}">
    <title>Cuba Theme - Главная</title>
</head>
<body>
<x-nav />

<h1>Вы выбрали тему Cuba</h1>

<form action="{{ route('set.theme') }}" method="POST">
    @csrf
    <label for="theme">Выбор темы:</label>
    <select name="theme" id="theme">
        <option value="classic">Classic</option>
        <option value="cuba">Cuba</option>
    </select>
    <button type="submit" class="btn">Сохранить</button>
</form>
</body>
</html>

