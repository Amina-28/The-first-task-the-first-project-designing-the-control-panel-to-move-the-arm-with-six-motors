<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Motors_Control";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

 $Motor1 = $_POST['Motor1'];
 $Motor2 = $_POST['Motor2'];
 $Motor3 = $_POST['Motor3'];
 $Motor4 = $_POST['Motor4'];
 $Motor5 = $_POST['Motor5'];
 $Motor6 = $_POST['Motor6'];




}

    // Create connection
    $conn= mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}



{
    if(isset($_POST['save'])) {

$my1_query = "INSERT INTO motor_value (Motor1,Motor2,Motor3,Motor4,Motor5,Motor6) VALUES ('$Motor1', '$Motor2', '$Motor3','$Motor4','$Motor5','$Motor6' )";
if (mysqli_query($conn, $my1_query)) {
    echo "'Successfully saved.";
 } else {
    echo "Error: " . $my1_query . "<br>" . mysqli_error($conn);
 

 }
}

}
   

   

   
{
    if(isset($_POST['on'])) {
      
       
           $my2_query =" UPDATE  motor_value SET isOn=1 ";
   
           if (mysqli_query($conn, $my2_query)) {
            echo "'Successfully saved.";
        } else {
            echo "Error: " . $my2_query . "<br>" . mysqli_error($conn);
         
           }
        }
   
   }



   mysqli_close($conn);
   
   ?>
   