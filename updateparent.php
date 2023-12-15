<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Update Parent Details</title>
</head>

<body>
    <h2>Update Parent Details</h2>

    <form method="post" action="updateparent.php">
        <label for="ParentID">Enter Parent ID:</label>
        <input type="text" name="ParentID">

        <label for="ParentName">Enter Parent ParentName:</label>
        <input type="text" name="ParentName">

        <label for="Address">Enter Parent Address:</label>
        <input type="text" name="Address">

        <label for="Email">Enter Parent Email:</label>
        <input type="text" name="Email">

        <label for="Age">Enter Age:</label>
        <input type="text" name="Age">

        <label for="Phone">Enter Parent Phone:</label>
        <input type="text" name="Phone">

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
      $ParentID=$_POST['ParentID'];
      $ParentName=$_POST['ParentName'];
      $Address=$_POST['Address'];
      $Email=$_POST['Email'];
      $Age=$_POST['Age'];
      $Phone=$_POST['Phone'];
   $sql = "UPDATE parents SET ParentName='$ParentName',Address='$Address', Email='$Email', Age='$Age','$Phone' WHERE ParentID=$ParentID";
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