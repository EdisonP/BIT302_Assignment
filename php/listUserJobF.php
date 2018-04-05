<?php
include 'DBConfig.php';
$jobClientID = $_SESSION['SESS_USER'];
$result = mysqli_query($conn,"SELECT * FROM jobs WHERE  jobClientID = '$jobClientID'");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Job Name</th>
<th>Job Details</th>
<th>Address</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['jobID'] . "</td>";
echo "<td>" . $row['jobName'] . "</td>";
echo "<td>" . $row['jobDetails'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>