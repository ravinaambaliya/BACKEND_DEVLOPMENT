<?php

$link = mysqli_connect ("localhost", "root","","st alphonsus school");

// Check connection 
if ($link === false) {
die("Connection failed: ");
}

if (isset($_POST['submit'])) {   /*  This checks if the form has been submitted. It verifies if the 'submit' key is set in the $_POST array.*/
 
    $StudentID = $_POST['StudentID'];
    $StudentName = $_POST['StudentName'];
    $LastName = $_POST['LastName'];
    $SAddress = $_POST['SAddress'];
    $ClassID = $_POST['ClassID'];
    $ParentID = $_POST['ParentID'];

/*
mysqli_query() function accepts a string value
representing a query as one of the parameters
and, executes/performs the given query
on the database
*/
    $sql = "INSERT INTO students (StudentID,StudentName,LastName,SAddress, ClassID, ParentID) VALUES ('$StudentID','$StudentName','$LastName','$SAddress', '$ClassID', '$ParentID')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }
 
}


?>