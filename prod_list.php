<?php
	$json = file_get_contents('http://rdapi.herokuapp.com/product/read.php');
 	$data = json_decode($json,true);

	$search = (isset($_POST['search']) && $_POST['search'] != '') ? $_POST['search'] : '';

	if(isset($search)){
	$prodsearch = file_get_contents('http://rdapi.herokuapp.com/product/search.php?s='.$search);
	$rec = json_decode($prodsearch,true);

	$list = $rec['records'];
	
 }else{
	$list = $data['records'];
	$message = "Sorry you have inserted invalid information!";
	echo "<script type='text/javascript'>alert('$message');</script>";
 }
 
?>
<br>
<br>
<div class = "heh">
<center><h1 class = "zz">PRODUCT LIST</h1></center>
<form class = "nge" method = "POST" action="index.php?page=Product">	
	<input class="search" type="text" name ="search">
	<input class="submit" type="submit" name="submit" value="Search..">
</form>
</div>
<div class = "downy">

<center><table class = "hatdog">
		<tr>
			<td class = "hahatd1"> <b class = "Tite">Name</b> </td>
			<td class = "hahatd1"> <b class = "Tite">Price</b> </td>
			<td class = "hahatd1"> <b class = "Tite">Description</b> </td>
			<td class = "hahatd1"> <b class = "Tite">Category</b> </td>
		</tr>
<?php 
	foreach($list as $result)
	{
?>
		<tr class = "ops">
			<td ><b class = "huwaw"><a class = "huwaw" href="index.php?page=Details&id=<?php echo $result['id'];?>"> <?php echo $result['name']; ?> </a></b><hr> </td>
      		<td><b class = "linte"><?php echo $result['price'];?></b><hr></td>
     		<td ><b class = "linte"><?php echo $result['description']; ?></b><hr> </td>
      		<td ><b class = "linte"><?php echo $result['category_name'];?></b><hr> </td>
		</tr>
<?php
	}
?>
</table></center>
	</div>
<br>
<br>
<br>