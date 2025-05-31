<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Добавить контакт</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>

<h1>Добавить контакт</h1>

<form action="/contact/add" method="post">
    <label>Имя: <input type="text" name="name" required></label><br>
    <label>Email: <input type="email" name="email"></label><br>
    <label>Телефон: <input type="text" name="phone"></label><br>
    <label>Тип:
        <select name="type">
            <option value="person">Физ. лицо</option>
            <option value="company">Юр. лицо</option>
        </select>
    </label><br>
    <label>Комментарий:<br>
        <textarea name="comment"></textarea>
    </label><br><br>
    <button type="submit">Добавить</button>
</form>

</body>
</html>
