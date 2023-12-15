<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Update Teacher Details</title>
</head>

<body>
    <h2>Update Teacher Details</h2>

    <form method="post" action="updateTeacher.php">
        <label for="TeacherID">Enter Teacher ID:</label>
        <input type="text" name="TeacherID">

        <label for="TeacherName">Enter Teacher TeacherName:</label>
        <input type="text" name="TeacherName">

        <label for="Address">Enter Teacher Address:</label>
        <input type="text" name="Address">

        <label for="Phone">Enter Teacher Phone:</label>
        <input type="text" name="Phone">

        <label for="Age">Enter Age:</label>
        <input type="text" name="Age">

        <label for="Salary">Enter Salary:</label>
        <input type="text" name="Salary">

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
      $TeacherID=$_POST['TeacherID'];
      $TeacherName=$_POST['TeacherName'];
      $Address=$_POST['Address'];
      $Phone=$_POST['Phone'];
      $Age=$_POST['Age'];
      $Salary=$_POST['Salary'];
    
   $sql = "UPDATE teachers SET TeacherName='$TeacherName',Address='$Address', Phone='$Phone', Age='$Age', Salary='$Salary', ClassID='ClassID' WHERE TeacherID=$TeacherID";
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