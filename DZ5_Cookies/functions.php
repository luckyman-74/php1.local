<?php
//Функция getUsersList() возвращает массив всех пользователей и хэшей их паролей
function getUsersList()
{
    return [
        'admin' => [
            'name' => 'Евгений Солоненко',
            'hash' => '$2y$10$N10wSjxc9rkoFn3ZPdxq../VAyc1ReOBnQ7o78FBP19gZh7fBD.rG'
        ],
        'user' => [
            'name' => 'Владислав Фетисов',
            'hash' => '$2y$10$2uZn6iLr6yq2cHMPW0s9hulq/SDC8UHeDG1cLjNf3Mg78w3IV./JC'
        ]
    ];
}

//Функция existsUser($login) проверяет - существует ли пользователь с заданным логином?
function existsUser($login)
{
    if (isset(getUsersList()[$login])) {
        return true;
    }
    return false;
}

//Функция checkPassword($login, $password) пусть возвращает true тогда, когда существует пользователь с указанным логином и введенный им пароль прошел проверку.
function checkPassword($login, $password)
{
    if (existsUser($login)) {
        $hash = getUsersList()[$login]['hash'];
        if (password_verify($password, $hash)) {
            return true;
        }
        return false;
    }
}
//функциz getCurrentUser() возвращает либо имя вошедшего на сайт пользователя, либо null().
//Т.е. если в сессии есть логин и он существует в нашем массиве, то вернем имя пользователя соответствующего этому логину, иначе null.
    function getCurrentUser()
    {
        if (!empty($_SESSION['user']) && existsUser($_SESSION['user'])) {
            return getUsersList()[$_SESSION['user']]['name'];
        }
        return null;
    }

//Функция доступа к файлу логов
    function getLogFile()
    {
        return file(__DIR__ . '/logs/imageUpload.log', FILE_IGNORE_NEW_LINES);

    }

//Пара тестов для функции existsUser()
    assert(existsUser('admin') === true);
    assert(existsUser('user') === true);

//Тесты для функции checkPassword()
    assert(checkPassword('admin', '123123RRR') === true);
    assert(checkPassword('admin', 'blablabla') === false);
    assert(checkPassword('user', '321321RRR') === true);
    assert(checkPassword('user', 'blablabla') === false);
