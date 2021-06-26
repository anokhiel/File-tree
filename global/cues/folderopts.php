<?php
$l=scandir('root');
$m='';
foreach($l as $v){
    if(is_dir('root/'.$v) AND $v!='.' AND $v!='..'){
      $m.='<option>'.$v.'</option>';  
    }
}
echo $m;