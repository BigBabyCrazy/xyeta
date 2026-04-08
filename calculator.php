<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
    <style>
        body { font-family: Arial; background: linear-gradient(135deg, #667eea, #764ba2); 
               display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0; }
        .calculator { background: white; padding: 30px; border-radius: 10px; 
                     box-shadow: 0 10px 25px rgba(0,0,0,0.2); max-width: 500px; width: 100%; }
        h2 { text-align: center; color: #333; }
        .input-group { display: flex; gap: 10px; margin-bottom: 20px; }
        input[type="number"] { flex: 1; padding: 12px; border: 2px solid #ddd; 
                              border-radius: 5px; font-size: 16px; }
        .buttons { display: flex; gap: 10px; margin-bottom: 20px; }
        button { flex: 1; padding: 15px; font-size: 20px; border: none; border-radius: 5px; 
                background: #667eea; color: white; cursor: pointer; }
        button:hover { background: #5568d3; }
        .result { padding: 15px; background: #f8f9fa; border-radius: 5px; 
                 text-align: center; font-size: 18px; font-weight: bold; }
        .error { color: #dc3545; background: #f8d7da; }
        .success { color: #28a745; background: #d4edda; }
    </style>
</head>
<body>
    <div class="calculator">
        <h2>Калькулятор</h2>
        <form method="post">
            <div class="input-group">
                <input type="number" step="any" name="num1" placeholder="Первое число" required>
                <input type="number" step="any" name="num2" placeholder="Второе число" required>
            </div>
            <div class="buttons">
                <button type="submit" name="op" value="add">+</button>
                <button type="submit" name="op" value="subtract">-</button>
                <button type="submit" name="op" value="multiply">*</button>
                <button type="submit" name="op" value="divide">/</button>
            </div>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $num1 = floatval($_POST['num1']);
            $num2 = floatval($_POST['num2']);
            $op = $_POST['op'];
            $error = false;
            
            switch($op) {
                case 'add': $result = $num1 + $num2; $sym = '+'; break;
                case 'subtract': $result = $num1 - $num2; $sym = '-'; break;
                case 'multiply': $result = $num1 * $num2; $sym = '*'; break;
                case 'divide': 
                    if ($num2 == 0) { echo "<div class='result error'>Ошибка: на ноль делить нельзя!</div>"; $error = true; } 
                    else { $result = $num1 / $num2; $sym = '/'; }
                    break;
            }
            if (!$error) echo "<div class='result success'>Результат: $num1 $sym $num2 = $result</div>";
        }
        ?>
    </div>
</body>
</html>
