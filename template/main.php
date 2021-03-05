<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/index.css">
    <title>Document</title>
</head>
<body>

<head>
    
</head>

<main>
<div class = "menu">
    <nav>
        <a class = "links_nav login" href="/login">LOGIN</a>
        <a class = "links_nav register" href="/register">REGISTER</a>
    </nav>
    
    
    <div class = "main_menu">
        <?php
            /**
             * main page template
             */
            
            //print_r($result);
            $out = '';
            for ($i = 0; $i < count($result); $i++) {
                $out .='<div class ="in_main_menu">';
                
                $out .='<h4>'.$result[$i]['title'].'</h4>';
                $out .= '<hr>';
                $out .='<p class = "descr_min">'.$result[$i]['descr_min'].'</p>';
                $out .='<img src="/static/images/'.$result[$i]['image'].'" width=250 style = "margin-bottom:50px;">';
                $out .='<div><a class = "links_menu" href="/article/'.$result[$i]['url'].'">Читать полностью</a></div>';
                $out .='</div>';
            }
            echo $out;
        ?>
    </div>

</div>


</main>

</body>
</html>