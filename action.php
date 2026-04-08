<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $confirmPassword = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '';
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
    
    $errors = [];
    
    // Валидация email
    if (empty($email)) {
        $errors[] = "Поле email обязательно для заполнения";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Некорректный формат email";
    }
    
    // Валидация пароля
    if (empty($password)) {
        $errors[] = "Поле пароль обязательно для заполнения";
    } elseif (strlen($password) < 6) {
        $errors[] = "Пароль должен содержать минимум 6 символов";
    }
    
    // Проверка совпадения паролей
    if ($password !== $confirmPassword) {
        $errors[] = "Пароли не совпадают";
    }
    
    // Валидация имени
    if (empty($name)) {
        $errors[] = "Поле имени обязательно для заполнения";
    }
    
    // Валидация пола
    if (empty($gender)) {
        $errors[] = "Выберите пол";
    }
    
    // Вывод результатов
    if (!empty($errors)) {
        echo "<h2>Ошибки:</h2>";
        echo "<ul style='color: red;'>";
        foreach ($errors as $error) {
            echo "<li>" . htmlspecialchars($error) . "</li>";
        }
        echo "</ul>";
        echo "<a href='index.php'>Вернуться к форме</a>";
    } else {
        echo "<h2 style='color: green;'>Регистрация успешна!</h2>";
        echo "<p>Имя: " . htmlspecialchars($name) . "</p>";
        echo "<p>Email: " . htmlspecialchars($email) . "</p>";
        echo "<p>Пол: " . htmlspecialchars($gender) . "</p>";
        // Здесь обычно данные сохраняются в базу данных
    }
} else {
    header("Location: index.php");
    exit();
}
?>
