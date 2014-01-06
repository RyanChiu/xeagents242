<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html>
<head>
<title><?php echo $title_for_layout; ?>
</title>
<?php
echo $this->Html->meta('icon', $this->Html->url('/../fav.png'));
/*for default whole page layout*/
echo $this->Html->css('main');

/*for jQuery*/
echo $this->Html->script('jQuery/Datepicker/jquery-1.3.2.min');

?>
</head>
<body bgcolor="#ffffff">
	<div class="wrapper">
		<!-- Start Border-->
		<div id="border">
			<!-- Start Header -->
			<div class="header">
				<div style="float:left;padding:0;">
					<p>&nbsp;</p>
					<?php echo $this->Html->image('main/LEFTTOPLOGO.jpg', array('style' => 'height:auto; border: 0px;')); ?>
				</div>
				<div id="divLogin" style="float:right;padding:0;width:265px;height:100%;text-align:right;padding:0;margin:0;">
					<div style="color:#fed652;font-weight:bold;font-size:16px;margin:9px 0 0 0;">
						Register<br/>
						<a href="#" style="font-weight:normal;font-size:12px;">(here)</a>
					</div>
				</div>
			</div>
			<!-- End Header -->
			<!-- Start Right Column -->
			<div id="rightcolumn">
				<!-- Start Main Content -->
				<div class="maincontent">
					<center>
						<b><font color="red"><?php echo $this->Session->flash(); ?> </font> </b>
					</center>
					<div class="content-top"></div>
					<div class="content-mid">
						<div style="float:left;width:65%;text-align:right;">
							<?php echo $content_for_layout; ?>
						</div>
						<div style="float:right;width:35%;">
							<?php echo $this->Html->image('main/RIGHTBEE.jpg', array('style' => 'height:90px;float:right;border:0px;margin-right:40px;')); ?>
						</div>
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
	
	<div style="width:1028px;margin:0 auto;font-size:12px;text-align:center;">
		<font color="#f7df80" style="BACKGROUND-COLOR:#000000"><strong>XE-Cams:&nbsp; Weekly Pay <font color="#ff0000">** </font>Link-1=Free Trial <font color="#ff0000" face="Arial Black">**</font>&nbsp; Agent gets paid as soon as card is approved <font color="#ff0000" face="Arial Black">**</font> No revokes <font color="#ff0000" face="Arial Black">**</font> NO dupes <font color="#ff0000" face="Arial Black">**</font> PayS&nbsp; canceled sales.</strong></font>
	</div>
	
</body>
</html>
