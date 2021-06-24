<?php
define('root','your/root/dir');
$folder=$_GET['folder']?root.'/'.$_GET['folder']:root;

$ar=json_encode(array('root'=>array(getfilelist($folder))));
print($ar);

function getfilelist($f, $ar=array()){
    
       $fa=  scandir($f);
      //var_dump($fa);
       $nar=explode('/',$f);
            $ar['value']=$f=='root'?$f:$nar[count($nar)-1];
    foreach($fa as $k=>$v){
        if(!is_dir($f.'/'.$v)){
            $ar['children'][]['value']="<span style=\"cursor:pointer; color:green\" onclick=\"showme('{$f}/$v')\">".$v.'</span>';
        }else{
            if($v !="." && $v !=".."){
                $l=array();
                     $ar['children'][]= getfilelist($f.'/'.$v, $l);
                }
                 
        }
         }
           return $ar;
}  
