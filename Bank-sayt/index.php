<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300..700&display=swap" rel="stylesheet">
    <title>Регистрация</title>
    <style>
        body {
            font-family: "Comfortaa", sans-serif;
            background-color: rgba(200, 234, 109, 0.874);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 330px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-control {
            width: 95%;
            height: 40px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-family: "Comfortaa", sans-serif;
        }
        .form-control:focus {
            border-color: #8bc34a; /* зелёный оттенок */
            box-shadow: 0 0 10px rgba(139, 195, 74, 0.5);
        }
        .btn {
            background-color: #8bc34a; /* зелёный оттенок */
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-family: "Comfortaa", sans-serif;
        }
        .btn:hover {
            background-color: #64bd3f; /* жёлтый оттенок */
        }

        
        #registrationForm {
            display: none;
        }
    </style>
</head>
<body>

    <div id="formContainer" class="container">
        <form id="loginForm" action="login.php" method="post"> <!-- Изначально показываем форму входа -->
            <h2>Вход</h2>
            <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Почта" name="email">
            </div>
            <div class="form-group">
                <input type="password" id="password" class="form-control" placeholder="Пароль" name="password">
            </div>
            <!-- <input type="submit" value="Войти"> -->
            <button class="btn" onclick="register()">Войти</button>
            <p>Нет аккаунта? <a href="#" onclick="showRegistrationForm()">Зарегистрироваться</a></p>
        </form>
    
        <form id="registrationForm" action="register.php" method="post" style="display: none;">
            <h2>Регистрация</h2>
            <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Имя" name="name">
            </div>
            <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Почта" name="email">
            </div>
            <div class="form-group">
                <input type="password" id="password" class="form-control" placeholder="Пароль" name="password">
            </div>
            <button class="btn" onclick="register()">Зарегистрироваться</button>
        </form>
    </div>
    
    <script>
        function showLoginForm() {
            document.getElementById('registrationForm').style.display = 'none'; // Если открытая - форма регистрации, скрываем её
            document.getElementById('loginForm').style.display = 'block'; // Показываем форму входа
        }
    
        function showRegistrationForm() {
            document.getElementById('loginForm').style.display = 'none'; // Если открытая - форма входа, скрываем её
            document.getElementById('registrationForm').style.display = 'block'; // Показываем форму регистрации
        }
    </script>

    <script>
        const form = document.getElementById('loginForm');
        form.addEventListener('submit', (e) => {
            e.preventDefault(); // Предотвращение отправки форм по умолчанию
            // Код для проверки формы и обработки здесь (при необходимости)
            window.location.href = '1.html'; // Перенаправить на 1.html после отправки формы
        });
    
    </script>

</body>
</html>