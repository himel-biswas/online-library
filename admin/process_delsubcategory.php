<?php

	if(empty($_POST['subcatnm']))
		{
			echo "No Selected Category";
			
		}
		else
		{
	
			$link=mysql_connect("localhost","root","") or die("Wrong connection");
			
			mysql_select_db("shop",$link);
			
			$cid=$_POST['subcatnm'];
			
			$q="delete from subcat where subcat_id = $cid";
			
			mysql_query($q,$link) or die("Can't Execute DELETE SUB CATEGORY....");	
			
			$q = "delete from book where b_subcat = ".$cid;
			mysql_query($q,$link);
			
			header("location:category.php");
		}
?>
	
	