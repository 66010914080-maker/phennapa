<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เพ็ญนภา เรืองชม (ตุ๊กตั๊ก)</title>
</head>

<body>
<h1>งาน i</h1>
<h1>เพ็ญนภา เรืองชม (ตุ๊กตั๊ก)</h1>

<form method="post" action="">
	ชื่อจังหวัด<input type="text" name="pname" autofocus required> <br>
    รูปภาพ <input type="file" name="pimage"> <br>
    ชื่อภาค
    <select name="rid">
<?php 
	include_once("connectdb.php");
	$sql3 = "SELECT * FROM `regions` ORDER BY `r_name` ASC";
	$rs3 = mysqli_query($conn, $sql3);
	while($data3 = mysqli_fetch_array($rs3)){
?>
	<option value="<?php echo $data3['r_id'];?>"><?php echo $data3['r_name'];?></option>
 <?php } ?>
 </select><br><br>
 
    <button type="submit" name="Submit">บันทึก</button>
</form>
<br>
<br>



<?php
	if(isset($_POST['Submit'])){
		include_once("connectdb.php");
		$rname = $_POST['rname'];
		$sql2 ="INSERT INTO `regions` VALUES (NULL, '{$rname}')";
		mysqli_query($conn, $sql2) or die ("insert ไม่ได้");
	}
?>
    <table border="1">
    <tr>
    	<th>รหัส</th>
        <th>ชื่อจังหวัด</th>
        <th>รูปภาพ</th>
        <th>ภาค</th>
    </tr>
    
<?php
	include_once("connectdb.php");
	$sql ="SELECT * FROM `provinces` AS p 
	INNER JOIN `regions` AS r
	ON p.r_id = r.r_id
	ORDER BY p.p_name ASC";
	$rs = mysqli_query($conn, $sql);
	
	while($data = mysqli_fetch_array($rs)){

?>
    
    <tr>
    	<th><?php echo $data['p_id'];?></th>
        <th><?php echo $data['p_name'];?></th>
        <th><img src="images/<?php echo $data['p_id'];?>.<?php echo $data['p_ext'];?>" width="120"></th>
        <th><?php echo $data['r_id'];?></th>
    </tr>
<?php } ?>
</table>
</body>
</html>