<?php
for($i=1;$i<=100;$i++){
  if($i%2==0 && $i%6!=0){
    echo '<span style="color:red">'. $i . '</span>';
  }
  elseif($i%2==1){
    echo '<span style="color:blue">'. $i . '</span>';
  }
  elseif($i%6==0){
    echo '<span style="color:green">'. $i . '</span>';
  }
}
