<?php
$conn = mysqli_connect("localhost","root","root08","dwad");
if($conn)
{
    echo"db connected\n";
}
else{
    echo"db not connected";
}
if(isset($_POST['b1']))
{
    $Student_id=$_POST['t1'];
    $Student_name=$_POST['t2'];
    $Student_age=$_POST['t3'];
    $Student_email=$_POST['t4'];
    $qrl="insert into student
	values('$Student_id','$Student_name','$Student_age','$Student_email')";
    if(mysqli_query($conn,$qrl))
    {
        echo "data inserted successfully";
    }
    else
    {
        echo "data not inserted";
    }
}
elseif(isset($_POST['b2']))
{
    $qr2="select * from student";
    $r=mysqli_query($conn,$qr2);
    echo "<table border='1'>
    <tr>
    <th>StudentID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Email</th>
    </tr>";
    while ($s = mysqli_fetch_array($r))
    {
        echo "<tr>";
        echo "<td>" . $s['Student_id'] . "</td>";
        echo "<td>" . $s['Student_name'] . "</td>";
        echo "<td>" . $s['Student_age'] . "</td>";
        echo "<td>" . $s['Student_email'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
elseif(isset($_POST['b3']))
{
    $Student_id=$_POST['t1'];
    $qrl="delete from student where Student_id=$Student_id";
    if(mysqli_query($conn,$qrl))
    {
        echo "data deleted successfully";
    }
    else
    {
        echo "data not deleted";
    }
}
elseif(isset($_POST['b4']))
{
    $Student_id=$_POST['t1'];
    $Student_name=$_POST['t2'];
    $Student_age=$_POST['t3'];
    $Student_email=$_POST['t4'];
    $qrl="update student set Student_name='$Student_name', Student_age='$Student_age', Student_email='$Student_email' where Student_id='$Student_id'";
    if(mysqli_query($conn,$qrl))
    {
        echo "data updated successfully";
    }
    else
    {
        echo "data not updated";
    }
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Student Details</title>
</head>
<body>
    <h1>Enter details:</h1><br>
    <form method="post">
    StudentID: <input type="text" name="t1"><br>
    Name: <input type="text" name="t2"><br>
    Age: <input type="text" name="t3"><br>
    Email: <input type="text" name="t4"><br>
    <input type="submit" name="b1" value="Insert">
    <input type="submit" name="b2" value="Display">
    <input type="submit" name="b3" value="Delete">
    <input type="submit" name="b4" value="Update">
</form>
</body>
</html>

