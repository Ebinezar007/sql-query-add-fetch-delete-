<?php

$conn = new mysqli("localhost","root","","aaa");

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect: " . $conn -> connect_error;
  exit();
}
  $url = explode("/",$_SERVER['REQUEST_URI']);
    $r=($url[1]);
    $w=($url[2]);
    
    
  $sql = "INSERT INTO farm (firstname, lastname) 
  VALUES ('$r','$w')";
  if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


// Return date/time info of a timestamp; then format the output
$mydate=getdate(date("U"));
echo "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year]";
           

?>