
<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "bot";
    $conn=mysqli_connect('localhost','root','');
    mysqli_select_db($con, 'bot');

      if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>
<?php
