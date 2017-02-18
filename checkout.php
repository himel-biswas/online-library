<?php session_start();
if(isset($_SESSION['status']))
{
	 $unm = $_SESSION['unm'];
	$link=mysql_connect("localhost","root","")or die("Can't Connect...");		
	mysql_select_db("shop",$link) or die("Can't Connect to Database...");



$qr="select u_id from user  where u_unm ='$unm' ";		 
$result = mysql_query($qr);
    while ($row=mysql_fetch_array($result))
    {
       $id = $row['u_id'];
    }
     $_SESSION['UserID']=$id;
	
	 	$q="select * from user where u_id ='$id' ";
	 $res=mysql_query($q,$link) or die("Can't Execute Query...");

	mysql_close($link);}
?>

<!DOCTYPE html >

<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
		<script>
            
             </script>
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
							<h1 class="title">Product Information</h1>
							<div class="entry">
						
							<pre><?php
							//	print_r($_SESSION);
							?></pre>
						
							<form action="invoice.php" method="POST">
							<table width="100%" border="0">
								<tr >
									<td> <b>No
									<td> <b>Category
									<td> <b>Product
									<td> <b>Qty
									<td> <b>Rate
									<td> <b>Price
									
								</tr>
								<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
								<?php
									$tot = 0;
									$i = 1;
									if(isset($_SESSION['cart']))
									{

									foreach($_SESSION['cart'] as $id=>$x)
									{	
										echo '
											<tr>
											<Td> '.$i.'
											<td> '.$x['cat'].'
											<td> '.$x['nm'].'
											<td> '.$x['qty'].'
											<td> '.$x['rate'].'
											<td> '.($x['qty']*$x['rate']).'
											
										</tr>
										';
										
										$tot = $tot + ($x['qty']*$x['rate']);
										$i++;
									}
									}
								
								?>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
								
							<tr>
							<td colspan="6" align="right">
							<h4>Total:</h4>
							
							</td>
							<td> <h4><?php echo $tot; ?> </h4></td>
							</tr>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
							<Br>
								</table>						

								<br><br>
							<center>
							
							
							
							</center>
							
							
							
					<!-- end content -->
						<!-- start content 2 -->
			<h1 class="title"></h1>
			
				<h1 class="title">Customer Information</h1>
					<table border='1' WIDTH='100%'>
						<tr>
								<td WIDTH='10%'><b><u>NAME</u></b>
								<TD WIDTH='20%'><b><u>PHONE NUMBER</u></b>
								<TD WIDTH='20%'><b><u>EMAIL</u></b>
								<TD WIDTH='50%'><b><u>ADDRESS</u></b>
															
						</tr>
						<?php
							
							while($row=mysql_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$row['u_fnm'].'
										<td>'.$row['u_contact'].'
										<td>'.$row['u_email'].'
										<td><input type ="text" size="35" value="'.$row['u_city'].'" name ="address" >
												
									
									</tr>';
							}
						?>

					</TABLE>
				
			
	<!-- end content 2 -->
	<!-- start content 3-->
					
							<h1 class="title">Payment Method</h1>
							<div name = "m">
							<table>
							<tr>
							<td><input type="radio" name="pay" value="Cash on Delivery"  ></td><td><h3> Cash on Delivery </h3></td>
							</tr>
							<tr>
							<td><input type="radio" name="pay" value="Bkash"  ></td><td><h3> BKash </h3></td>
						     </tr>
							</table>
							</div>
							<input type ="submit" name ="confirm" value ="confirm">
							</form>
							<div class="entry">
							</div>
						</div>
					</div>
				</div>		
					<!-- end content 3-->		
					<!-- start sidebar -->
					<div id="sidebar">S
							<?php
								include("includes/search.inc.php");
							?>
					</div>
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
