<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Контакты</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>

    <h1>Адрессная книга</h1>

    <a href="/contact/add">Добавить новый контакт</a>

    <ul>
        <?php foreach ($contacts as $contact): ?>
            <li>
                <?= htmlspecialchars($contact->name) ?>
                <?= htmlspecialchars($contact->phone) ?>
                <?= htmlspecialchars($contact->email) ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

