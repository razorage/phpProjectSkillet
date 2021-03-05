<?php
/**
 * login page template
 */
if (isset($_POST['submit'])){
    $user = login($_POST['login'], $_POST['password']);
    if ($user) {
        $user = $user[0];
        $hash = md5(generateCode(10));
        $ip = null;
        if (!empty($_POST['ip'])){
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        updateUser($user['id'], $hash, $ip);
        setcookie('id', $user['id'], time()+60*60*24*30, "/");
        setcookie('hash', $hash, time()+60*60*24*30, "/");
        header("Location: /admin");
        exit();
    } else {
        echo 'Вы неправильно ввели логин или пароль!';
    }
}

?>
<h2>Логин</h2>
<form method="POST">
    Login: <input type = "text" name = "login" required style = "width: 200px;"><br><br>
    Pass: <input type = "password" name = "password" required style = "width: 200px; margin-left: 10px"><br><br>
    Прикреплять к IP: <input type="checkbox" name="ip"><br>
    <input type="submit" name = "submit" value = "Регистрация" style = "background-color: black; color :white; padding: 5px; margin: 10px;">
</form>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>