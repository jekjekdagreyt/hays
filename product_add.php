<?php
	$jsonCategory = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
	$categoryData = json_decode($jsonCategory,true);
	$category = $categoryData['records'];	
	
?>

<link rel="stylesheet" type="text/css" href="">

<form method="POST" action="process_create.php">
	<br>
	<br>
	<br>
	<br>
	<center><h1 class = "hala"> ADD PRODUCT </h1><center>
	<hr style ="width: 50%;">
	<br>
	<table>
		<tr>
			<td><h1 class = "tikalon">Name:</h1></td>
			<td><input class = "balakada"type="text" name="name"></td>
		</tr>
		<tr>
			<td><h1 class = "tikalon">Description: </h1></td>
			<td><input class = "balakada" type="text" name="description"></td>
		</tr>
		<tr>
			<td><h1 class = "tikalon">Price: </h1></td>
			<td><input class = "balakada" type="text" name="price"></td>
		</tr>
		<tr>
			<td><h1 class = "tikalon">Category: </h1></td>
			<td><select type="text" name="category">
					<option value="" selected> Categories </option>
				<?php
					foreach($category as $select)
					{
				?>
					<option value="<?php echo $select['id']; ?>"> <?php echo $select['name']; ?> </option>
				<?php
					}
				?>
			</select></td>
		</tr>
	</table>
	<input class = "confirm1" type = "submit" value = "Submit" name = "Submit"/>
	<?php
		if(isset($Submit)){
		$name = $_REQUEST['name'];
		$desc = $_REQUEST['description'];
		$price = $_REQUEST['price'];
		$cat = $_REQUEST['category'];
		
		if($name == "" && $desc == "" && $price == ""){
			$message = "Sorry you have inserted invalid information!";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}
	?>
</form>