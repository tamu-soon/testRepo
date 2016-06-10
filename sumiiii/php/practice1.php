<html>
<title>test</title>
  <body>
    <?php
    for($num=1;$num<=100;$num++){
      if($num%6==0 and $num%2==0){
        echo '<span style="color:green;">'. $num.'</span>';
      }
      elseif($num%2==0){
        echo '<span style="color:red;">'. $num.'</span>';
      }
      else{
        echo '<span style="color:blue;">'. $num.'</span>';
      }
    }
    ?>
  </body>
</html>
