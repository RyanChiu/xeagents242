<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html>
<head>
<title><?php echo $title_for_layout; ?>
</title>
<?php

/*for default whole page layout*/
echo $html->css('main');

/*for jQuery*/
echo $javascript->link('jQuery/Datepicker/jquery-1.3.2.min');

/*for cufon*/
echo $javascript->link('cufon/cufon-yui');
echo $javascript->link('cufon/Chiller_400.font');

echo $scripts_for_layout;

?>
<script type="text/javascript">
	Cufon.replace(".header");
</script>
</head>
<body bgcolor="#ffffff">
	<div class="wrapper">
		<!-- Start Border-->
		<div id="border">
			<!-- Start Header -->
			<div class="header">
				<div style="float: left; padding: 0px 0px 0px 6px;">
					<p>&nbsp;</p>
					<?php echo $html->image('main/LEFTTOPLOGO.jpg', array('style' => 'height:90px; border: 0px;')); ?>
				</div>
				<div style="float: right; padding: 0px 0px 0px 0px;">
					
				</div>
			</div>
			<!-- End Header -->
			<!-- Start Right Column -->
			<div id="rightcolumn">
				<!-- Start Main Content -->
				<div class="maincontent">
					<center>
						<b><font color="red"><?php $session->flash(); ?> </font> </b>
					</center>
					<div class="content-top"></div>
					<div class="content-mid">

						<?php echo $content_for_layout; ?>

					</div>
					<div class="content-bottom"></div>
				</div>
				<!-- End Main Content -->
			</div>
			<!-- End Right Column -->
		</div>
		<!-- End Border -->
		<!-- Start Footer -->
		<div id="footer">
			<div style="float:left;">
				<font size="1" color="white">
				<b>XuesEros, RPG Companies INC 2333 Dean Path, Edinburgh, EH3 7DX , UK</b>
				</font>
			</div>
			<div style="float:right;">
			<font size="1" color="white"><b>Copyright &copy; 2012 xueseros All
					Rights Reserved.&nbsp;&nbsp;</b> </font>
			</div>
		</div>
		<!-- End Footer -->
	</div>
	
	<!-- To avoid delays, initialize Cufón before other scripts at the bottom -->
	<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
