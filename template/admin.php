<?php
/**
 * login page template
 */
    if (!getUser()){
        header("Location: /login");
    }
$out = '';
for ($i = 0; $i < count($result); $i++) {
    $out .='<div>';
    $out .='<p>'.$result[$i]['title'].'</p>';
    $out .='<img src="/static/images/'.$result[$i]['image'].'" width = "200px">';
    $out .='<div><a href="/admin/delete/'.$result[$i]['id'].'" onclick="return confirm(\'Точно???\')">Удалить</a></div>';
    $out .='<div><a href="/admin/update/'.$result[$i]['id'].'" onclick="return confirm(\'Точно???\')">Обновить</a></div>';
    $out .='</div>';
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
    <style>
        a{
            background-color: black;
            text-decoration: none;
            color: white;
            display: inline-block; /*Имитирует div */
            width: 100px;
            text-align: center;
            font-size: 20px;
            margin: 10px;
        }
    </style>
    <h1>Admin panel</h1>
    <div><a href="/admin/create">Create</a></div>
    <div><a href="/logout">Logout</a></div>
    <div><a href="/">Main</a></div>
</body>
</html>

<?php
echo $out;
