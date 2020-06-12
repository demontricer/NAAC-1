<?php
  function utility($str)
  {
    if(isset($_POST[$str]) || isset($_GET[$str]))
       {
          $str1=$str;   
       }
    else
       {
          $str1='null';
       }
  }
?>
