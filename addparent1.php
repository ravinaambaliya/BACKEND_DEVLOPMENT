<?php

$link = mysqli_connect ("localhost", "root","","st alphonsus school");

// Check connection 
if ($link === false) {
die("Connection failed: ");
}

if (isset($_POST['submit'])) {   /*  This checks if the form has been submitted. It verifies if the 'submit' key is set in the $_POST array.*/
 
    $ParentID = $_POST['ParentID'];
    $ParentName = $_POST['ParentName'];
    $PAddress = $_POST['PAddress'];
    $Email = $_POST['Email'];
    $Age = $_POST['Age'];
    $Phone = $_POST['Phone'];
    $StudentID = $_POST['StudentID'];


/*
mysqli_query() function accepts a string value
representing a query as one of the parameters
and, executes/performs the given query
on the database
*/
    $sql = "INSERT INTO parents (ParentID,ParentName,PAddress,Email,Phone,StudentID) VALUES ('$ParentID','$ParentName','$PAddress','$Email', '$Phone', '$StudentID')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }
 
}


?>