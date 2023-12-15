<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Update Student Details</title>
</head>

<body>
    <h2>Update Student Details</h2>

    <form method="post" action="updatestudent.php">
        <label for="StudentID">Enter Student ID:</label>
        <input type="text" name="StudentID">

        <label for="StudentName">Enter Student StudentName:</label>
        <input type="text" name="StudentName">

        <label for="LastName">Enter Student LastName:</label>
        <input type="text" name="LastName">

        <label for="SAddress">Enter Student Address:</label>
        <input type="text" name="SAddress">

        <label for="ClassID">Enter ClassID:</label>
        <input type="text" name="ClassID">

        <input type="submit" name="submit" value="Update">
    </form>

<?php
  $link = mysqli_connect("localhost","root","","st alphonsus school");
  if ($link === false)
   {
      die("Connection failed; ");
   }
   if (isset($_POST['submit']))
   {
      $StudentID=$_POST['StudentID'];
      $StudentName=$_POST['StudentName'];
      $LastName=$_POST['LastName'];
      $SAddress=$_POST['SAddress'];
      $ClassID=$_POST['ClassID'];
   $sql = "UPDATE students SET StudentName='$StudentName',LastName='$LastName', SAddress='$SAddress', ClassID='$ClassID' WHERE StudentID=$StudentID";
if($link->query($sql) === True){
echo "record updated successfully";
} else {
    echo "Error updating record: " . $link->error;
}
$link->close();
   }
   ?>

</body>
</html>