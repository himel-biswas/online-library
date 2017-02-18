<?php 
session_start();
$link=mysql_connect("localhost","root","")or die("Can't Connect...");
			
	mysql_select_db("shop",$link) or die("Can't Connect to Database...");
	$q="select * from sell_info";
	 $res=mysql_query($q,$link) or die("Can't Execute Query...");

	mysql_close($link);
	?>

<!DOCTYPE html>

<html >
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>
<body>
<!-- start header -->
<div id="header">
	<div id="menu">
		<?php
			include("includes/menu.inc.php");
		?>
	</div>
</div>
<div id="logo-wrap">
<div id="logo">
		<?php
			include("includes/logo.inc.php");
		?>
</div>
</div>
<!-- end header -->
<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title"> Sell Information</h1>
			<div class="entry">
				
					<table border='1' WIDTH='100%'>
						<tr>
								<td WIDTH='5%'><b><u>NO</u></b>
								<TD WIDTH='10%'><b><u>Category</u></b>
								<TD WIDTH='35%'><b><u>Book Name</u></b>
								<TD WIDTH='15%'><b><u>Quantity</u></b>
								<TD WIDTH='15%'><b><u>Taka</u></b>
								<TD WIDTH='15%'><b><u>Payment Method</u></b>
								<TD WIDTH='15%'><b><u>Customer Id</u></b>
								<TD WIDTH='15%'><b><u>DELETE</u></b>
							
						</tr>
						<?php
							$count=1;
							while($row=mysql_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$count.'
										<td>'.$row['id'].'
										<td>'.$row['product'].'
										<td>'.$row['qty'].'
										<td>'.$row['tk'].'
										<td>'.$row['billSystem'].'
										<td>'.$row['cus_id'].'
										<td><a href="process_del_contact.php?sid='.$row['id'].'"><img src="images/drop.png" ></a>
												
									
									</tr>';
									$count++;
							}
						?>

					</TABLE>
				
			</div>
			
		</div>
		
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
			<?php
				include("includes/footer.inc.php");
			?>
</div>
<!-- end footer -->
</body>
</html>
