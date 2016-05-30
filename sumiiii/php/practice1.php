<html>
<title>test</title>
<body>
<?php
for($num=1;$num<=100;$num++){
  if($num%6==0 and $num%2==0){
  echo "<font color=\"green\">$num</font>";
  }
  elseif($num%2==0){
  echo "<font color=\"red\">$num</font>";
  }
  else{
  echo "<font color=\"blue\">$num</font>";
  }



}
?>
</body>
</html>
