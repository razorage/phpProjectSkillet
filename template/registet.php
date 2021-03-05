<?php
/**
 * register page template
 */
if (isset($_POST['submit'])){
    $err =[];
    if (strlen($_POST['login']) < 4 OR strlen($_POST['login'] > 30)) {
        $err[] = "Логин не меньше 4 и не больше 30";
    }
    if ( isLoginExist($_POST['login'])) {
        $err[] = "Логин существует";
    }
    if (count($err) === 0) {
        createUser($_POST['login'], $_POST['password']);
        header("Location: /login");
        exit();
    }
    else {
        echo '<h4>Ошибки регистрации</h4>';
        foreach ($err as $error) {
            echo $error.'<br>';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Регистрация</h2>
<form method="POST">
    Login: <input type = "text" name = "login" required style = "width: 200px;"><br><br>
    Pass: <input type = "password" name = "password" required style = "width: 200px; margin-left: 10px"><br><br>
    <input type="submit" name = "submit" value = "Регистрация" style = "background-color: black; color :white; padding: 5px; margin: 10px;">
    <a href = "/" style = "
       
            background-color: black;
            text-decoration: none;
            color: white;
            display: inline-block; /*Имитирует div */
            width: 100px;
            text-align: center;
            font-size: 20px;
            margin: 10px;"
        
    >main</a>
</form>
</body>
</html>