<style>
table {
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
}
th{
padding:10px;
}

td{

text-align:center;
padding:10px;
}
tr{

margin-top:10px;
}
</style>
<?php 
include ('navbar.php');
include ('db_sjet.php');
?>
<div style="background-color:#FFF;padding:20px;min-height:410px;">
<?php
	$qry ="SELECT * FROM DONATORS ORDER BY donator_id DESC";
	$result = mysqli_query($conn,$qry);
echo "<table ><tr>
	<th >  </th>
	<th>Name</th>
	<th>Current Position </th>
	<th>Email</th>
	<th>Phone</th>
	<th>Other Information</th>
	<th>Amount Donated(Rs)</th>
	<th> Year</th>
		</tr>";
	if(mysqli_num_rows($result) > 0)
	{

	while($row = mysqli_fetch_assoc($result)){
 echo "<tr>
	<td class='no_border'><div align='left'><img src='$row[donator_photo_path]' alt='' width='125' height='125'  /> </div></td>
		<td>$row[donator_name] </td>
		<td>$row[current_position]</td>
                <td><a href='mailto: $row[donator_email]'><span class='style2'>$row[donator_email]</span></a></td>
		 <td> $row[donator_mobile]</td>
		 <td> $row[other_info]</td>
	      <td> <span class='style2'>$row[donator_amount]</span></td>
		<td> $row[donator_year]</td>


 </tr>";
}
echo "</table";
	}
	else
	{
	echo "No document available!";
	}
?>
</div>
