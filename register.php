<?php
include 'header.php'
?>

<link rel="stylesheet" href="./css/register.css">
<script src='js/register.js'></script>

<div>
    <button class="logout" onclick="location.href='/home.php'">Главная</button>
</div>


<div id="registerDiv">
    <h2>Регистрация</h2>
    <div>
        <input type="text" id="userName" placeholder="Логин">
    </div>

    <div>
        <input type="email" id="Email" placeholder="Почта">
    </div>

    <div>
        <input type="password" id="userPassword" placeholder="Пароль">
    </div>

    <div>
        <input type="password" id="userPlainPassword" placeholder="Повторите пароль">
    </div>

    <button class="registerButton" onclick="register.saveInfoUser()">Зарегистрироваться</button>
</div>


