<?php
	session_start();
	include("mysql_connect.inc.php");//連接資料庫
	
	$user=$_SESSION["user_name"];
	$get_name=htmlspecialchars($_POST["version_name"]);
	$p=$_SESSION["project_name"];
	$var_carousel=file_get_contents('lesscode/carousel.less');
	$var_carousel=htmlspecialchars($var_carousel,ENT_QUOTES);
	$var_carousel=html_entity_decode($var_carousel);
	
	$var_alert=file_get_contents('lesscode/alert.less');
	$var_alert=htmlspecialchars($var_alert,ENT_QUOTES);
	$var_alert=html_entity_decode($var_alert);

			
	$sql = "INSERT INTO `less_list`(`person_name`,`project_name`,`version_name`,`less_carousel`,`less_alerts`) VALUES ('$user','$p','$get_name','$var_carousel','$var_alert')";
	if (mysqli_query($db, $sql)) 
	{
		echo "<br> New record created successfully";
	} 
	else
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($db);
	}
	
	$sql3="SELECT * FROM less_list ORDER BY less_id DESC LIMIT 1";
	
	$result=mysqli_query($db,$sql3);
 
	$row = mysqli_fetch_assoc($result); 
	$id=$row['less_id'];
	echo $id;
	$sql2 = "INSERT INTO css_list (css_id,person_name,project_name,version_name) VALUES('$id','$row[person_name]','$row[project_name]','$row[version_name]')";
	
	if (mysqli_query($db, $sql2)) 
	{
		echo "<br> New record created successfully";
	} 
	else
	{
		echo "Error: " . $sql2 . "<br>" . mysqli_error($db);
	}
	mysqli_close($db);
	
	
	//mysqli_query($db,$sql)or die ("無法更新".mysql_error()); //執行sql語法
	header("location:modify.php");
?>
	