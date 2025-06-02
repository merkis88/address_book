<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Контакты</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>

<h1>Адресная книга</h1>

<a href="/contact/add">Добавить новый контакт</a>

<!-- Поисковая форма -->
<form method="get" style="margin-top: 20px;">
    <input type="text" name="phone" placeholder="Поиск по номеру" value="<?= htmlspecialchars($_GET['phone'] ?? '') ?>">

    <select name="type">
        <option value="">Все</option>
        <option value="Физическое лицо" <?= ($_GET['type'] ?? '') === 'Физическое лицо' ? 'selected' : '' ?>>Физ. лицо</option>
        <option value="Юридическое лицо" <?= ($_GET['type'] ?? '') === 'Юридическое лицо' ? 'selected' : '' ?>>Юр. лицо</option>
    </select>

    <button type="submit">Поиск</button>
</form>

<ul>
    <?php foreach ($contacts as $contact): ?>
        <li>
            <?= htmlspecialchars($contact->name) ?>
            <?= htmlspecialchars($contact->phone) ?>
            <?= htmlspecialchars($contact->email) ?>
            <?= $contact->type === 'Физическое лицо' ? 'Физ. лицо' : 'Юр. лицо' ?>
        </li>
    <?php endforeach; ?>
</ul>

</body>
</html>
