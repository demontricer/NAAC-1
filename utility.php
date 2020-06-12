<?php
  function getData($str)
  {
    if(isset($_POST[$str]))
       {
          $str1=$str;   
       }
    else if(isset($_GET[$str]))
       {
          $str1=$str;   
       }
    else
       {
          $str1='null';
       }
  }
?>
