<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "outdoors");
$first_name= $_POST["first_name"];
$last_name= $_POST["last_name"];
$email= $_POST["email"];
$phone= $_POST["phone"];
$services= $_POST["services"];
$activities= $_POST["activities"];

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO client (first_name, last_name, email , phone, services, activities) VALUES ('$first_name' , '$last_name', '$email' , '$phone', '$services', '$activities')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

?>