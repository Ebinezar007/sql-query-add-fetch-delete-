<?php

$conn = new mysqli("localhost","root","","aaa");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect: " . $conn -> connect_error;
  exit();
}
  $url = explode("/",$_SERVER['REQUEST_URI']);
    $r=($url[2]);
      
      $sql = "SELECT *  FROM farm WHERE firstname = '$r' ";
      $e=($conn->query($sql));
      while($g=$e->fetch_object()){
                print_r($g);
            }

            echo $r;

?>