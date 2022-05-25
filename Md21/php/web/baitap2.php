<?php

   if( $_SERVER ['REQUEST_METHOD']== 'POST'){
  echo '<pre>';
 print_r( $_REQUEST );
    echo '</pre>';
    // $username=$_REQUEST['username'];
    //  $love=$_REQUEST['love'];
    //  $number=$_REQUEST['number'];
    
    
     
    
    
     };
    ?>
<form action="" method="post">
    Inventment Amount:
    <input type="text" name="username" id="username">
    <br>
    Yearly Interest Rate:
    <input type="text" name="love " id="">
    <br>
    Number of Years:
    <input type="text" name="number" id="">
    <br>
    <input type="submit" value="sumbit">
</form> 