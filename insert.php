<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "demo");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$fav_color = mysqli_real_escape_string($link, $_REQUEST['fav_color']);
$pets = mysqli_real_escape_string($link, $_REQUEST['pets']);
 
// attempt insert query execution
$sql = "INSERT INTO persons (name, fav_color, pets) VALUES ('$name', '$fav_color', '$pets')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>