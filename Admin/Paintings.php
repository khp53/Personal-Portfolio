<script>
	function delPaintings(id)
	{
		if(confirm("You want to delete this Painting Catalog?"))
		{
		window.location.href='delete_Painting.php?id='+id;	
		}
	}
</script>
<table class="table table-bordered table-striped table-hover">
	<h1>Painting Details</h1><hr>
	<tr>
	<td colspan="8"><a href="dashboard.php?option=add_painting" class="btn btn-primary">Add New Paintings</a></td>
	</tr>
	<tr style="height:40">
		<th>Sr No</th>
		<th>Image</th>
		<th>Painting No</th>
		<th>TYpe</th>
		<th>Price</th>
		<th>Details</th>
		<th>Update</th>
		<th>Delete</th>
	</tr>
<?php 
$i=1;
$sql=mysqli_query($con,"select * from paintings");
while($res=mysqli_fetch_assoc($sql))
{
$id=$res['painting_id'];	
$img=$res['image'];
$path="../img/paintings/$img";
?>
<tr>
		<td><?php echo $i;$i++; ?></td>
		<td><img src="<?php echo $path;?>" width="50" height="50"/></td>
		<td><?php echo $res['painting_no']; ?></td>
		<td><?php echo $res['type']; ?></td>
		<td><?php echo $res['price']; ?></td>
		<td><?php echo $res['details']; ?></td>

		<td><a href="dashboard.php?option=update_painting&id=<?php echo $id; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>

		
		<td><a href="#" onclick="delPaintings('<?php echo $id; ?>')"><span class="glyphicon glyphicon-remove" style='color:red'></span></a></td>
	</tr>	
<?php 	
}
?>	
	
</table>