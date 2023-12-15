<html>
<body>
<form  method="post" action="delclass.php">
<label<label for="ClassID">Enter Class ID:</label>
<input type="text" name="ClassID" >
<input  type="Submit"  name="submit" value = "delete" >
</form>
<?php
        $link = mysqli_connect("localhost","root","","st alphonsus school");
        if ($link === false)
        {
           die("Connection failed; ");
        }
        if (isset($_POST['submit']))
        {
            $ClassID = $_POST['ClassID'];
            $sql = "DELETE FROM classes WHERE ClassID=$classID";
            if($link->query($sql) === TRUE)
            {
                echo "Record deleted Succesfully";
            }
            else
            {
                echo "Error updating record: " . $link->error;
            }
            $link->close();
        }
        ?>
</body>
<html>