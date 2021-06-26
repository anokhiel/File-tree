<?php
if(file_exists($_POST['file'])){
    $curdir=substr(__DIR__,0,  strrpos(__DIR__,'/'));
    $curname=substr($curdir,strrpos($curdir,'/')+1);
    $pardir=substr($_POST['file'], strrpos($_POST['file'], $curname));
    $fileplace=str_replace($curname,'..', $pardir);
          echo(file_get_contents($fileplace));
    //echo('../'.substr($_POST['file'], strpos(substr(__DIR__,  strrpos(__DIR__,'/') )) ));
    
}else{
    echo('Файл не найден или не может быть воспроизведен');
}