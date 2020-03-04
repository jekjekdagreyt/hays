<?php
	$id = $_GET['id'];
 	$json = file_get_contents('http://rdapi.herokuapp.com/product/read_one.php?id='.$id);
 	$data = json_decode($json,true);
 	$details = array('records' => $data);
 	$result = $details['records'];

?>

<link rel="stylesheet" type="text/css" href="">

	<br>
	<br>
	<br>
	<br>
		<div class = "hihi">
		<center><h1 class = "hijo"> PRODUCT DETAILS </h1></center>

		</div>
		<br>
	<div class = "paw">
	<table class = "huwewe">
		<tr>
			<td><h2 class = "yudep">Name:</h2></td>
			<td><h2 class = "yudepip"><?php echo $result['name']; ?></h2></td>
		</tr>
		<tr>
			<td><h2 class = "yudep">Description: </h2></td>
			<td><h2 class = "yudepip"><?php echo $result['description']; ?></h2></td>
		</tr>
		<tr>
			<td><h2 class = "yudep">Price: </h2></td>
			<td><h2 class = "yudepip"><?php echo $result['price']; ?></h2></td>
		</tr>
		<tr>
			<td><h2 class = "yudep">Category: </h2></td>
			<td><h2 class = "yudepip"><?php echo $result['category_name']; ?></h2></td>
		</tr>
	</table></div>
	<br>
	<div class = "bottomxx">
<a href="index.php?page=Update&id=<?php echo $id; ?>"><button class="confirm1" value="Update" type="submit">Update</button></a>
<a href="index.php?page=Delete&id=<?php echo $id; ?>"><button class="confirm1" value="Delete" type="submit">Delete</button></a>
</div>