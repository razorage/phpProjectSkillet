

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
    <p>Title: <input type="text" name="title" value="<?php echo $result['title'];?>"></p>
    <p>URL: <input type="text" name="url" value="<?php echo $result['url'];?>"></p>
    <p>Min descr: <textarea name="descr_min"><?php echo $result['descr_min'];?></textarea></p>
    <p>Descr: <textarea name="description"><?php echo $result['description'];?></textarea></p>
    <p>Category:
        <select name="cid">
            <?php
            $out = '';
            for($i=0; $i < count($category); $i++) {
                if ($category[$i]['id'] ===  $result['cid']){
                    $out .= '<option value="' . $category[$i]['id'] . '" selected>' . $category[$i]['title'] . "</option>";
                }
                else {
                    $out .= '<option value="' . $category[$i]['id'] . '">' . $category[$i]['title'] . "</option>";
                }
            }
            echo $out;
            ?>
        </select>
    </p>
    <p>Photo: <input type="file" name="image" value="<?php echo $result['image'];?>"></p>
    <?php
        if (isset($result['image']) AND $result['image']!='') {
            echo '<img src="/static/images/'.$result['image'].'" style = "width: 100px;">';
        }
    ?>
    <p> <input type="submit" name="submit" value="<?php echo $action;?>"></p>
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
    <a href="/admin">admin</a>
</form>
</body>
</html>