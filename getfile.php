<?php
if(file_exists($_POST['file'])){
    echo(file_get_contents($_POST['file']));
    
}else{
    echo('Файл не найден или не может быть воспроизведен');
}