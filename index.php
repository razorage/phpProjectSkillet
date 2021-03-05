<?php
require_once 'config/db.php';
require_once 'core/function_db.php';
require_once 'core/function.php';
//RewriteRule ^(.*)$ PROJECT_PHP/index.php?route=$1 [L] иначе ничего не сработает, т.к. index.php не в корневой файл

$conn = connect();

$route = $_GET['route']; // NULL!

$route = explodeURL($route);


switch($route){
    case ($route[0] == ''):
        $query = 'select * from info';
        $result = select($query);
        require_once 'template/main.php';
        break;
    case ($route[0] == 'article' AND isset($route[1])):
        $url = $route[1];
        $result = getArticle($url);
        require_once 'template/article.php';
        break;
    case ($route[0] == 'cat' AND isset($route[1])):
        $url = $route[1];
        $cat = getCategory($url);
        $result = getCategoryArticle($cat['id']);
        require_once 'template/cat.php';
        break;
    case ($route[0] == 'register'):
        require_once 'template/registet.php';
        break;
    case ($route[0] == 'login'):
        require_once 'template/login.php';
        break;
    case ($route[0] == 'admin' AND $route[1] == 'delete' AND isset($route[2])):
        if (getUser()){
            $query = "DELETE FROM info where id = ".$route[2];
            execQuery($query);
            header("Location: /admin");
            exit();
        }
        header("Location: /index");
        break;
     case ($route[0] == 'admin' AND $route[1] == 'create'):
        if (getUser()){
            $query = "SELECT id, title FROM category";
            $category = select($query);
            require_once 'template/create.php';
        }
        break;
    case ($route[0] == 'admin' AND $route[1] == 'update' AND isset($route[2])):
        if (getUser()){ //проверяет заригистрирован ли пользователь
            $query = "SELECT id, title FROM category";
            $category = select($query);
            $query = "SELECT * FROM info WHERE id = ".$route[2];
            $result = select($query)[0];
            require_once 'template/update.php';
        }
        break;
     case ($route[0] == 'admin'):
        $query = 'SELECT * FROM info';
        $result = select($query);
        require_once 'template/admin.php';
        break;
     case ($route[0] == 'logout'):
        require_once 'template/logout.php';
        break;
    default:
        require_once 'template/404.php';
        break;
}

// main - главная страниц
// cat - категории
// article - статья
?>