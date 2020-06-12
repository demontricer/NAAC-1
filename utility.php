<?php
  function getData($connect,$str)
  {
    if(isset($_POST[$str]))
       {
          $str1=$_POST[$str];   
       }
    else if(isset($_GET[$str]))
       {
          $str1=$_GET[$str];   
       }
    else
       {
          $str1=NULL;
       }
    $str1=mysqli_real_escape_string($connect,$str1);
    $str1=htmlspecialchars($str1);
    return($str1);
  }
?>
