<?php 
if(isset($add))
{
	$sql=mysqli_query($con,"select * from paintings where painting_no='$rno'");
	if(mysqli_num_rows($sql))
	{
	echo "This painting has been already added";	
	}		
	else
	{	
	$img=$_FILES['img']['name'];
	mysqli_query($con,"insert into paintings values('','$rno','$type','$price','$details','$img')");	
	move_uploaded_file($_FILES['img']['tmp_name'],"../img/paintings/".$_FILES['img']['name']);
	echo "Paintings added successfully";
	}
}
?>

<form method="post" enctype="multipart/form-data">
<table class="table table-bordered">
	
	<tr>	
		<th>Painting No</th>
		<td><input type="text" name="rno"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Painting Type</th>
		<td><input type="text" name="type"  class="form-control"/>
		</td>
	</tr>
	
	<tr>	
		<th>Price</th>
		<td><input type="text" name="price"  class="form-control"/>
		</td>
	</tr>
	
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
			<input type="submit" class="btn btn-primary" value="Add Painting" name="add"/>
		</td>
	</tr>
</table> 
</form>