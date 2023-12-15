<html>
<body>
<form  method="post" action="delparent.php">
<label<label for="ParentID">Enter Parent ID:</label>
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
            $ParentID = $_POST['ParentID'];
            $sql = "DELETE FROM parentS WHERE ParentID=$ParentID";
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