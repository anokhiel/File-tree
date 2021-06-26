<?php
$folder=substr(__DIR__, 0, strrpos(__DIR__,'/') );

$ar=json_encode(array('root'=>array(getfilelist($folder))));
print($ar);
//file_put_contents('JSON/'.$folder,$ar);


function getfilelist($f, $ar=array()){
    
       $fa=  scandir($f);
      //var_dump($fa);
       $nar=explode('/',$f);
            $ar['value']=$f=='root'?$f:$nar[count($nar)-1];
    foreach($fa as $k=>$v){
        if($v=='cues'){continue;}
        if($v=='index.html'){continue;}
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
