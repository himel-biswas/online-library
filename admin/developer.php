<?php session_start();?>

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
						<div class="post">
							<h1 class="title"></h1>
							<div class="entry">
							
								<table  align="center" width="100%">
										<tr  bgcolor="#EEE9F3">
										
										
									<td align="center" width="100%"><b>Developer Team</b></td>
										</tr>
										
										<tr><td><br><br></td></tr>
								<tr>
									<td >
												<strong><font color="#433" size="2">Information about developers:</font></strong><br><br>
														<U><B>Biswas,Himel:</B></U><BR><br>
														<UL>
														<LI>Id No.<font color="purple">  12-20126-1</font></LI>
														</UL>
														 
														<U><B>Md Sabbir Ahmed </B></U><BR>		<br>		
														<UL>
														<LI>Id No.<font color="purple">  12-21152-1</font></LI>
														</UL>


												</strong>										
												<div style="text-align: center;">					
												<font style="font-size: 20px;" >This is a Online bookstore for our Webtech summer 2015-16 final project</font><br><br><br><font color="purple"> Used in: PHP,MYSQL,HTML,CSS,JAVA SCRIPT,AJAX,XML,XAMPP,.</font> 
									</div>
									</td>
								</tr>
								</table>
							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					
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
