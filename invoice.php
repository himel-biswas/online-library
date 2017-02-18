<?php session_start();
     
$link=mysql_connect("localhost","root","")or die("Can't Connect...");
			
	mysql_select_db("shop",$link) or die("Can't Connect to Database...");
	
/*	 $unm = $_SESSION['unm'];
	 $uid = $_SESSION['UserID'];
									$i = 1;
									$pay=$_POST['pay'];
									if(isset($_SESSION['cart']))
									{

									foreach($_SESSION['cart'] as $id=>$x)
									{	
										 				
			$query="insert into sell_info(pcat,product,qty,rate,tk,billSystem,cus_id)
			  values('".$x['cat']."','".$x['nm']."','".$x['qty']."','".$x['rate']."','".($x['qty']*$x['rate'])."','$pay','$uid')";
		mysql_query($query,$link) or die($query."Can't Connect to Query...");	
									}
									}
*/
								

	mysql_close($link);
?>			
<!DOCTYPE html>

<html>
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
					
					<fieldset ">
				
						<div class="post">
							<h1 class="title">Invoice </h1>
							<div class="entry">
						
							<pre><?php
							//	print_r($_SESSION);
							?></pre>
						
							<form action="process_cart.php" method="POST">
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
							
							<tr>
							<td colspan="6" align="left">
							<h4 >       Signature</h4>
							<p>......................</p>
							</td>
							</tr>
					
							
							
							<Br>
								</table>						

						
							<center>
							</center>
							</form>
							
							</div>
							
						</div>
						
			
</fieldset>
					
					
						</div>
					<!-- end content -->
					
					<!-- start sidebar -->
					<div id="sidebar">
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