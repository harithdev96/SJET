<style>
img{max-width:200px;}
td{
padding:5px;
}
tr{
padding:5px;
}
</style>
<?php include("navbar.php");
	include("db_sjet.php");?>

<div id="main" style="min-height:410px;">
    <div id="content1">
      <h3><strong>SJET</strong> <strong>EXECUTIVE</strong> <strong>MEMBERS (present)</strong> </h3>
      <table width="853" height="199" align="center">
        <tr>
          
	<?php 
		$sql1="SELECT * FROM TRUSTEE WHERE position_trust='Chairman' ";
		$result1 = mysqli_query($conn,$sql1);
		if(mysqli_num_rows($result1) > 0)
				{
					echo '<td width="280" valign="top"><p align="left" style="color:#36474B; font-weight:bold"><strong>&nbsp;&nbsp;&nbsp;&nbsp;Chairman</strong></p>';
					$row1 = mysqli_fetch_assoc($result1);
					


?>
              <div align="left"><img src="<?php echo $row1['photo_path']; ?>" alt="" width="auto" height="150" align="center"/> </div>
            <p><?php echo "<a href='$row1[webpage]' target='_blank'>$row1[name]</a>";?> <br />
              <?php echo $row1["position_college"]; ?><br />
              Phone: <?php echo $row1["phone_num"]; ?> <br/>
              Email: <a href="mailto:<?php echo $row1["email"]; ?>"><span class="style2"><?php echo $row1["email"]; ?></span></a> </p>
            <p></p></td>


          
	<?php } $sql2="SELECT * FROM TRUSTEE WHERE position_trust='Secretary' ";
		$result2 = mysqli_query($conn,$sql2);
		if(mysqli_num_rows($result2) > 0)
				{
	echo '<td width="268" valign="top"><p style="color:#36474B; font-weight:bold"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Secretary</strong></p>';
					$row2 = mysqli_fetch_assoc($result2);
					

   ?>
           <div align="left"><img src="<?php echo $row2['photo_path']; ?>" alt="" width="auto" height="150"  /> </div>
            <p><?php echo "<a href='$row2[webpage]'>$row2[name]</a>";?><br />
              <?php echo $row2['position_college']; ?><br />
              Phone: <?php echo $row2['phone_num']; ?> <br />
            Email: <a href="mailto:<?php echo $row2['email']; ?>"><span class="style2"><?php echo $row2['email']; ?></span></a> </p></td>

<?php }
	$sql3="SELECT * FROM TRUSTEE WHERE position_trust='Joint Secretary' ";
	$result3 = mysqli_query($conn,$sql3);
		if(mysqli_num_rows($result3) > 0)
				{
					$row3 = mysqli_fetch_assoc($result3);
?>
          <td width="195" valign="top"><p align="center" style="color:#36474B; font-weight:bold"><strong>Joint  Secretary</strong></p>

              <div align="left"><img src="<?php echo $row3['photo_path']; ?>" alt="" width="auto" height="150" /> </div>
            <p><?php echo "<a href='$row3[webpage]'>$row3[name]</a>";?><br />
              <?php echo $row3['position_college']; ?><br />
              Phone: <?php echo $row3['phone_num']; ?><br />
              Email: <a href="mailto:<?php echo $row3['email']; ?>" class="style2"><?php echo $row3['email']; ?></a> </p></td>
        </tr>
	<?php } ?>

<?php 
		$sql1="SELECT * FROM TRUSTEE WHERE position_trust='Treasurer' ";
		$result1 = mysqli_query($conn,$sql1);
		if(mysqli_num_rows($result1) > 0)
				{
					echo '<td width="280" valign="top"><p align="left" style="color:#36474B; font-weight:bold"><strong>Treasurer</strong></p>';
					$row1 = mysqli_fetch_assoc($result1);
					


?>
              <div align="left"><img src="<?php echo $row1['photo_path']; ?>" alt="" width="auto" height="150" align="center"/> </div>
            <p><?php echo "<a href='$row1[webpage]'>$row1[name]</a>";?> <br />
              <?php echo $row1['position_college']; ?><br />
              Phone: <?php echo $row1['phone_num']; ?> <br/>
              Email: <a href="mailto:<?php echo $row1['email']; ?>"><span class="style2"><?php echo $row1['email']; ?></span></a> </p>
            <p></p></td>


          
	<?php } ?>
      </table>
	<p class="style3" style="color:#36474B; font-weight:bold"> Members</p>
	 

<?php 
	$sql4="SELECT * FROM TRUSTEE WHERE position_trust='Members' ";
	$result4 = mysqli_query($conn,$sql4);
	echo "<table width='837'  border='0' align='center'>";
	while($row4 = mysqli_fetch_assoc($result4))
	{	

		$row5 = mysqli_fetch_assoc($result4);

		$row6 = mysqli_fetch_assoc($result4);		
	
	echo "<tr>";
		echo "<td> <div align='left'><img src=".$row4['photo_path'] ." alt='' width='auto' height='150' /> </div></td>";		
		if($row5)
		{echo "<td> <div align='left'><img src=".$row5['photo_path'] ." alt='' width='auto' height='150' /> </div></td>";}
		else{echo "<td></td>";}
		if($row6)
		{echo "<td> <div align='left'><img src=".$row6['photo_path'] ." alt='' width='auto' height='150' /> </div></td>";}
		else{echo "<td></td>";}		
		echo "</tr>";

		echo "<tr>";
		echo "<td><p><a href = '$row4[webpage]'>". $row4['name'] . "</a></td>";
		if($row5)
		{echo "<td><p><a href = '$row5[webpage]'>". $row5['name'] . "</a></td>";}
		if($row6)
		{echo "<td><p><a href = '$row6[webpage]'>". $row6['name'] . "</a></td>";}
		echo "</tr>";
              	
		echo "<tr>";
		echo "<td>". $row4['position_college']. "</td>";
		if($row5)
		{echo "<td>". $row5['position_college']. "</td>";}
		if($row6)	             	
		{echo "<td>". $row6['position_college']. "</td>";}
		echo "</tr>";

		echo "<tr>";		
		echo "<td>Phone: " . $row4['phone_num'] ."</td>";
		if($row5)
		{echo "<td>Phone: " . $row5['phone_num'] ."</td>";}
		if($row6)
		{echo "<td>Phone: " . $row6['phone_num'] ."</td>";}
             	echo "</tr>";

		echo "<tr>";
		echo "<td>Email: <a href='mailto:". $row4['email'] . " class='style2'>". $row4['email']."</a> </p></td>";
		if($row5)
		{echo "<td>Email: <a href='mailto:". $row5['email'] . " class='style2'>". $row5['email']."</a> </p></td>";}
		if($row6)
		{echo "<td>Email: <a href='mailto:". $row6['email'] . " class='style2'>". $row6['email']."</a> </p></td>";}
		echo "</tr>";	
	}
 echo "</table>";
?>
