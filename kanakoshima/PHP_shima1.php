<?php
  echo gooday ;
  $s = 0 ;
    for ($s = 0; $s < 101; $s++){
      if ($s % 6 == 0)
        echo "<span style='color:green'> $s<br> </span>" ;
      else if ($s % 2 == 1)
        echo "<span style='color:red'> $s<br> </span>" ;
      else
        echo "<span style='color:blue'> $s<br> </span>" ;
    }
?>
