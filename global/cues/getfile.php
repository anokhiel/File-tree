<?php
if(file_exists($_POST['file'])){
    echo(file_get_contents('../'.substr($_POST['file'], strrpos($_POST['file'],'/')+1 )));
    
}else{
    echo('Файл не найден или не может быть воспроизведен');
}