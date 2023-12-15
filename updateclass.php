<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Update Class Details</title>
</head>

<body>
    <h2>Update Class Details</h2>

    <form method="post" action="updateclass.php">
        <label for="ClassID">Enter Class ID:</label>
        <input type="text" name="ClassID">

        <label for="ClassName">Enter Class ClassName:</label>
        <input type="text" name="ClassName">

        <label for="CapacityOfClass">Enter Class CapacityOfClass:</label>
        <input type="text" name="CapacityOfClass">

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
      $ClassID=$_POST['ClassID'];
      $ClassName=$_POST['ClassName'];
      $CapacityOfClass=$_POST['CapacityOfClass'];
      $sql = "UPDATE classes SET ClassName='$ClassName',CapacityOfClass='$CapacityOfClass', WHERE ClassID=$ClassID";
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