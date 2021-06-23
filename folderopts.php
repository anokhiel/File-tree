<?php
$l=scandir('root');
$m='';
foreach($l as $v){
    if(is_dir('root/'.$v) && $v!='.' && $v!='..'){
      $m.='<option>'.$v.'</option>';  
    }
}
echo $m;