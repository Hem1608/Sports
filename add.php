<?php
include('config.php');
if(!isset($_FILES['image']['tmp_name']))
	{
		echo "test";
	}
	else
	{
	//$file=$_FILES['image']['tmp_name'];
	//$image= addslashes(file_get_contents($file));
	
	//$image_name= addslashes($_FILES['image']['name']);
			
	//	move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);
			
		//	$na="test123.jpg";
//move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" .  $_FILES["image"][$na]);
			
			
			
			
$location="images/portfolio/sports/" . $_FILES["image"]["name"];
			$caption=$_POST['category'];
			$n=$_POST['name'];
			$save=mysql_query("INSERT INTO sportsimages (url, category,name) VALUES ('$location','$caption','$n')");
			header("location: admin.php");
			exit();					
	}
?>
