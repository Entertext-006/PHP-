<?php
$host="localhost";
$database="joins";
$user="root";
$password="root08";

$conn= mysqli_connect($host,$user,$password,$database);
if(!$conn){
	die("connect failed: ".$conn->connect_error);
}else{
	echo "db connected";
}
$sql="SELECT employees.id,employees.name,departments.department_name from employees right join departments on employees.deparment_id=departments.id";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
	echo "<table border='1'>
	<tr>
	<th>ID</th>
	<th>Employee name</th>
	<th>Department</th>
	</tr>";
	while($row = mysqli_fetch_assoc($result)) {
		echo "<tr>
		    <td>{$row['id']}</td>
			<td>{$row['department_name']}</td>
			<td>". ($row['name'] ? 
			$row['name'] : 'No Employee').
			"</td>
			</tr>";
	}
	echo "</table>";
}else{
	echo "No records";
}
?>