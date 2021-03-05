<?php
/**
 * category page template
 */

//var_dump($cat);
$out ='';
$out .='<div>';
$out .='<h4>Категория: '.$cat['title'].'</h4>';
$out .='<p>'.$cat['description'].'</p>';
$out .='</div>';
echo $out;
//var_dump($result);
$out = '';
for ($i = 0; $i < count($result); $i++) {
    $out .='<div>';
    $out .='<h4>'.$result[$i]['title'].'</h4>';
    $out .='<p>'.$result[$i]['descr_min'].'</p>';
    $out .='<img src="/static/images/'.$result[$i]['image'].'" width=200>';
    $out .='<div><a href="/article/'.$result[$i]['url'].'">Читать полностью</a></div>';
    $out .='</div>';
}
echo $out;