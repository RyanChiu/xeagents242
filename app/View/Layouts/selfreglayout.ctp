<?php
$userinfo = $this->Session->read('Auth.User.Account');
$role = -1;//means everyone
if ($userinfo) {
	$role = $userinfo['role'];
}

$menuitemscount = 0;
$curmenuidx = 0;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">
<html>
<head>
<title><?php echo $title_for_layout; ?></title>
<?php
echo $this->Html->meta('icon', $this->Html->url('/../fav.png'));
/*for default whole page layout*/
echo $this->Html->css('main');

/*for tables*/
echo $this->Html->css('tables');

/*for jQuery datapicker*/
echo $this->Html->css('jQuery/Datepicker/green');
echo $this->Html->script('jQuery/Datepicker/jquery-1.3.2.min');
echo $this->Html->script('jQuery/Datepicker/jquery-ui-1.7.custom.min');

?>

<?php 
/*for self-developed zToolkits*/
echo $this->Html->script('zToolkits');

/*for DropDownTabs*/
//echo $this->Html->css('DropDownTabs/glowtabs');
echo $this->Html->css('DropDownTabs/halfmoontabs');
echo $this->Html->script('DropDownTabs/dropdowntabs');

/*for TinyDropdown*/
echo $this->Html->css('TinyDropdown/style');
echo $this->Html->script('TinyDropdown/script');

/*for CKEditor*/
echo $this->Html->script('ckeditor/ckeditor');

/*for fancybox*/
echo $this->Html->css('fancybox/jquery.fancybox-1.3.3', null, array('media' => 'screen'));
echo $this->Html->script('fancybox/jquery.fancybox-1.3.3.pack');

/*for validate*/
echo $this->Html->script("validate/jquery.validate");

/*for AJAX*/
echo $this->Html->script('ajax/prototype');
echo $this->Html->script('ajax/scriptaculous');

echo $scripts_for_layout;

?>
</head>
<body bgcolor="#ffffff">
	<div class="wrapper">
		<!-- Start Border-->
		<div id="border">
			<!-- Start Header -->
			<div class="header">
				<div style="float:left;width:100%;padding:0px 0px 0px 6px;">
					<p>&nbsp;</p>
					<?php echo $this->Html->image('main/LEFTTOPLOGO.jpg', array('style' => 'width:655px;height:auto;border:0px;')); ?>
					<div style="float:right;">
					<?php
					echo $this->Html->link("HOME", array("controller" => "accounts", "action" => "index"), array("style" => "color:black;font-weight:bold;"));  
					?>
					</div>
				</div>
				<div style="float: right; padding: 0px 0px 0px 0px;">
					<p>&nbsp;</p>
				</div>
			</div>
			<!-- End Header -->
			<!-- Start Navigation Bar -->
			<div style="font-weight:bold;font-size:23px;color:black;padding:0 0 6px 16px;">
				Affiliate marketing program.<br/>
                Thank you for becoming XuesEros partner!
			</div>
			<!-- End Navigation Bar -->
			<!-- Start Left Column -->
			<!-- Start Right Column -->
			<div id="rightcolumn">
				<!-- Start Main Content -->
				<div class="maincontent">
					<center>
						<b><font color="red" style="margin:6px 0 0 0;font-size:28px;"><?php echo $this->Session->flash(); ?> </font> </b>
					</center>
					<div class="content-top">
						
					</div>
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
				<font size="1" color="black">
				<b>XuesEros, 2333 Dean Path, Edinburgh, EH3 7DX , UK</b>
				</font>
			</div>
			<div style="float:right;">
			<font size="1" color="black"><b>Copyright &copy; 2012 xueseros All
					Rights Reserved.&nbsp;&nbsp;</b> </font>
			</div>
		</div>
		<!-- End Footer -->
	</div>
	
	<div style="width:1028px;margin:0 auto;font-size:12px;text-align:center;">
		<font color="black" style="BACKGROUND-COLOR:#ffcc00"><strong>XE-Cams:&nbsp; Weekly Pay <font color="#ff0000">** </font>Link-1=Free Trial <font color="black" face="Arial Black">**</font>&nbsp; Agent gets paid as soon as card is approved <font color="#ff0000" face="Arial Black">**</font> No revokes <font color="#ff0000" face="Arial Black">**</font> NO dupes <font color="#ff0000" face="Arial Black">**</font> PayS&nbsp; canceled sales.</strong></font>
	</div>

	<?php
		echo $this->Js->writeBuffer(); 
	?>
</body>
</html>
