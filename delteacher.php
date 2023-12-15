<html>
<body>
<form  method="post" action="delteacher.php">
<label<label for="TeacherID">Enter Teacher ID:</label>
<input type="text" name="TeacherID" >
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
            $TeacherID = $_POST['TeacherID'];
            $sql = "DELETE FROM teacherS WHERE TeacherID=$TeacherID";
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