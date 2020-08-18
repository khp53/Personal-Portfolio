<?php 
if(isset($add))
{
	$sql=mysqli_query($con,"select * from about where about_id='$id'");
	if(mysqli_num_rows($sql))
	{
	echo "This about has been already added";	
	}		
	else
	{	
	$img=$_FILES['img']['name'];
	mysqli_query($con,"insert into about values('$id','$details','$img')");	
	move_uploaded_file($_FILES['img']['tmp_name'],"../img/about/".$_FILES['img']['name']);
	echo "about added successfully";
	}
}
?>

<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	<tr>	
		<th>Details</th>
		<td><textarea name="details"  class="form-control"></textarea>
		</td>
	</tr>
	
	<tr>	
		<th>Images</th>
		<td><input type="file" name="img"  class="form-control"/>
		</td>
	</tr>
	
	<tr>
		<td colspan="2">
			<input type="submit" class="btn btn-primary" value="Add About" name="add"/>
		</td>
	</tr>
</table> 
</form>