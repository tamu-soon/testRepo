<html>
<title>test</title>
  <body>
    <?php
    for($num=1;$num<=100;$num++){
      if($num%6==0 and $num%2==0){
        $color=green;
      }
      elseif($num%2==0){
        $color=red;
      }
      else{
        $color=blue;
      }
      echo '<span style="color:'.$color.';">'.$num.'</span>';
    }
    ?>
  </body>
</html>
