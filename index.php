<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Регистрация</h2>
        <form action="action.php" method="POST">
            <label>Имя:</label>
            <input type="text" name="name" placeholder="Введите имя" required>
            
            <label>Почта:</label>
            <input type="email" name="email" placeholder="name@example.ru" required>
            
            <label>Пароль:</label>
            <input type="password" name="password" placeholder="Введите пароль" required>
            
            <label>Подтвердите пароль:</label>
            <input type="password" name="confirm_password" placeholder="Повторите пароль" required>
            
            <label>Пол:</label>
            <select name="gender" required>
                <option value="">Выберите пол</option>
                <option value="male">Мужской</option>
                <option value="female">Женский</option>
                <option value="other">Другой</option>
            </select>
            
            <button type="submit">Зарегистрироваться</button>
        </form>
    </div>
</body>
</html>
