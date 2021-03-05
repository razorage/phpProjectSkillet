

            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Document</title>
            </head>
            <body>
            <?php
                /**
                 * article page template
                 */
                $out = '';
                $out .='<div>';
                $out .='<h4>'.$result['title'].'</h4>';
                $out .= '<hr>';
                $out .='<p>'.$result['descr_min'].'</p>';
                $out .='<img src="/static/images/'.$result['image'].'" width=200>';
                $out .='<p>'.$result['description'].'</p>';
                $out .='</div>';
                echo $out;
            ?>
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
                <a href="/">main</a>
            </body>
            </html>