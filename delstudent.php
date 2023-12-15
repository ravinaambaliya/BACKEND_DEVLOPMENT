<html>
<body>
<form  method="post" action="delstudent.php">
<label<label for="StudentID">Enter Student ID:</label>
<input type="text" name="StudentID" >
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
            $StudentID = $_POST['StudentID'];
            $sql = "DELETE FROM studentS WHERE StudentID=$StudentID";
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