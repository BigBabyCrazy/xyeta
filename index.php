<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Function Tests</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }

        h1 {
            color: #333;
            text-align: center;
            border-bottom: 2px solid #667eea;
            padding-bottom: 10px;
        }

        .section {
            background: white;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .section h2 {
            color: #667eea;
            margin-top: 0;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        .test {
            margin: 10px 0;
            padding: 10px;
            background: #f9f9f9;
            border-left: 3px solid #667eea;
        }

        .label {
            font-weight: bold;
            color: #555;
        }

        .value {
            font-family: monospace;
            background: white;
            padding: 5px 10px;
            margin: 5px 0;
            display: inline-block;
            border: 1px solid #ddd;
        }

        .success {
            color: green;
        }

        .grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        .card {
            background: #667eea;
            color: white;
            padding: 15px;
            border-radius: 5px;
        }

        .card .name {
            font-weight: bold;
            margin-bottom: 5px;
        }

        @media (max-width: 600px) {
            .grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <h1>🐘 PHP Function Tests</h1>

    <div class="section">
        <h2>1. Проверка пароля</h2>
        <div class="test">
            <div class="label">Пароль:</div>
            <div class="value">myPass123</div>
        </div>
        <div class="test">
            <div class="label">Длина:</div>
            <div class="value">9 символов</div>
        </div>
        <div class="test">
            <div class="label">Результат:</div>
            <div class="value success">✓ Пароль подходит</div>
        </div>
    </div>

    <div class="section">
        <h2>2. Проверка URL</h2>
        <div class="test">
            <div class="label">URL:</div>
            <div class="value">https://example.com</div>
        </div>
        <div class="test">
            <div class="label">Результат:</div>
            <div class="value success">✓ Да</div>
        </div>
    </div>

    <div class="section">
        <h2>3. Проверка файла</h2>
        <div class="test">
            <div class="label">Имя файла:</div>
            <div class="value">photo.jpg</div>
        </div>
        <div class="test">
            <div class="label">Результат:</div>
            <div class="value success">✓ Да</div>
        </div>
    </div>

    <div class="section">
        <h2>4. Замена в дате</h2>
        <div class="test">
            <div class="label">Исходная:</div>
            <div class="value">16.04.2021</div>
        </div>
        <div class="test">
            <div class="label">Результат:</div>
            <div class="value">16-04-2021</div>
        </div>
    </div>

    <div class="section">
        <h2>5. Explode</h2>
        <div class="test">
            <div class="label">Строка:</div>
            <div class="value">html css php</div>
        </div>
        <div class="test">
            <div class="label">Массив:</div>
            <div class="value">["html", "css", "php"]</div>
        </div>
    </div>

    <div class="section">
        <h2>6. Implode</h2>
        <div class="test">
            <div class="label">Массив:</div>
            <div class="value">["html", "css", "php"]</div>
        </div>
        <div class="test">
            <div class="label">Результат:</div>
            <div class="value">html,css,php</div>
        </div>
    </div>

    <div class="section">
        <h2>⚡ Тесты функций</h2>
        <div class="grid">
            <div class="card">
                <div class="name">mul(3, 4)</div>
                <div>= 12</div>
            </div>
            <div class="card">
                <div class="name">m(5, 6)</div>
                <div>= 30</div>
            </div>
            <div class="card">
                <div class="name">m_with_use(7, 8)</div>
                <div>= 56</div>
            </div>
            <div class="card">
                <div class="name">operation(10, 5, add)</div>
                <div>= 15</div>
            </div>
            <div class="card">
                <div class="name">operation(10, 5, sub)</div>
                <div>= 5</div>
            </div>
            <div class="card">
                <div class="name">array_map (квадраты)</div>
                <div>[1, 4, 9, 16]</div>
            </div>
        </div>
    </div>

</body>
</html>
