<?php
include 'DBConfig.php';

$result = mysqli_query($conn,"SELECT * FROM jobs");

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Job Name</th>
<th>Job Details</th>
<th>Client name</th>
<th>address</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['jobID'] . "</td>";
echo "<td>" . $row['jobName'] . "</td>";
echo "<td>" . $row['jobDetails'] . "</td>";
echo "<td>" . $row['jobClientName'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>