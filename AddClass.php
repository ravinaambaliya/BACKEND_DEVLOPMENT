<?php

$link = mysqli_connect ("localhost", "root","","st alphonsus school");

// Check connection 
if ($link === false) {
die("Connection failed: ");
}

if (isset($_POST['submit'])) {   /*  This checks if the form has been submitted. It verifies if the 'submit' key is set in the $_POST array.*/
 
    $ClassID = $_POST['ClassID'];
    $ClassName = $_POST['ClassName'];
    $TeacherID = $_POST['TeacherID'];
    $StudentID = $_POST['StudentID'];
    $CapacityOfClass = $_POST['CapacityOfClass'];
    

/*
mysqli_query() function accepts a string value
representing a query as one of the parameters
and, executes/performs the given query
on the database
*/
    $sql = "INSERT INTO classes (ClassID,ClassName,TeacherID,StudentID,CapacityOfClass) VALUES ('$ClassID','$ClassName', '$StudentID','$ClassID','$CapacityOfClass')";
   if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }
 
}


?>