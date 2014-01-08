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
					<?php echo $this->Html->image('main/LEFTTOPLOGO.jpg', array('style' => 'height:auto; border: 0px;')); ?>
				</div>
				<div style="float: right; padding: 0px 0px 0px 0px;">
					<p>&nbsp;</p>
				</div>
			</div>
			<!-- End Header -->
			<!-- Start Navigation Bar -->
			<div id="nav-bar">
				<!--the level menu -->
				<div id="moonmenu" class="halfmoon">
					<ul>
						<?php
						if ($role != -1) {//means everyone
							$menuitemscount++;
							//if cur route matches this menu item, then set the number to inform the js code
							if (strpos($this->request->here, 'accounts') === false) {
							} else {
								$curmenuidx = $menuitemscount - 1;
							}
						?>
						<li>
						<?php
						echo $this->Html->link('<span><font>HOME</font></span>',
							array('controller' => 'accounts', 'action' => 'index'),
							array('escape' => false), 
							false
						);
						?>
						</li>
						<?php
						}
						?>
						<?php
						if ($role == 0) {//means an administrator
							$menuitemscount++;
							//if cur route matches this menu item, then set the number to inform the js code
							if (strpos($this->request->here, 'addnews') === false
									&& strpos($this->request->here, 'updalerts') === false) {
							} else {
								$curmenuidx = $menuitemscount - 1;
							}
						?>
						<li>
						<?php
						echo $this->Html->link('<span><font>NEWS</font></span>',
							array('controller' => 'accounts', 'action' => 'addnews'),
							array('rel' => 'dropmenu_admin_news', 'escape' => false),
							false
						);
						?>
						</li>
						<?php
						}
						?>
						<?php
						if ($role == 0) {//means an administrator
							$menuitemscount++;
							//if cur route matches this menu item, then set the number to inform the js code
							if (strpos($this->request->here, 'lstcompanies') === false
									&& strpos($this->request->here, 'updcompany') === false
									&& strpos($this->request->here, 'regcompany') === false) {
							} else {
								$curmenuidx = $menuitemscount - 1;
							}
						?>
						<li>
						<?php
						echo $this->Html->link('<span><font>OFFICE</font></span>',
							array('controller' => 'accounts', 'action' => 'lstcompanies', 'id' => -1),
							array('rel' => 'dropmenu_admin_company', 'escape' => false),
							false
						);
						?>
						</li>
						<?php
						}
						?>
						<?php
						if ($role == 0) {//means an administrator
							$menuitemscount++;
							//if cur route matches this menu item, then set the number to inform the js code
							if (strpos($this->request->here, 'lstagents') === false && strpos($this->request->here, 'updagent') === false
									&& strpos($this->request->here, 'regagent') === false) {
							} else {
								$curmenuidx = $menuitemscount - 1;
							}
						?>
						<li>
						<?php
						echo $this->Html->link('<span><font>AGENT</font></span>',
							array('controller' => 'accounts', 'action' => 'lstagents', 'id' => -1),
							array('rel' => 'dropmenu_admin_agent', 'escape' => false),
							false
						);
						?>
						</li>
						<?php
						}
						?>
						<?php
						if ($role == 1) {//means an office
							$menuitemscount++;
							//if cur route matches this menu item, then set the number to inform the js code
							if (strpos($this->request->here, 'lstagents') === false && strpos($this->request->here, 'updagent') === false
									&& strpos($this->request->here, 'regagent') === false
									&& strpos($this->request->here, 'requestchg') === false
									&& strpos($this->request->here, 'lstchatlogs') === false) {
							} else {
								$curmenuidx = $menuitemscount - 1;
							}
						?>
						<li>
						<?php
						echo $this->Html->link('<span><font>AGENT</font></span>',
							array('controller' => 'accounts', 'action' => 'lstagents', 'id' => $userinfo['id']),
							array('rel' => 'dropmenu_com_agent', 'escape' => false),
							false);
						?>
						</li>
						<?php
						}
						?>
						<?php
						if ($role == 0) {//means an administrator
							$menuitemscount++;
							//if cur route matches this menu item, then set the number to inform the js code
							if (strpos($this->request->here, 'lstnewmembers') === false) {
							} else {
								$curmenuidx = $menuitemscount - 1;
							}
						?>
						<li>
						<?php
						echo $this->Html->link('<span><font>NEW MEMBERS</font></span>',
							array('controller' => 'accounts', 'action' => 'lstnewmembers'),
							array('escape' => false), 
							false);
						?>
						</li>
						<?php
						}
						?>
						<?php
						if ($role != -1) {//means everyone
							$menuitemscount++;
							//if cur route matches this menu item, then set the number to inform the js code
							if (strpos($this->request->here, 'lstlinks') === false
								&& strpos($this->request->here, 'lstsites') === false && strpos($this->request->here, 'addsite') === false
								&& strpos($this->request->here, 'updsite') === false
								&& strpos($this->request->here, 'lsttypes') === false && strpos($this->request->here, 'updtype') === false) {
							} else {
								$curmenuidx = $menuitemscount - 1;
							}
						?>
						<li>
						<?php
						echo $this->Html->link('<span><font>LINKS</font></span>',
							array('controller' => 'links', 'action' => 'lstlinks'),
							array('rel' => ($role == 0 ? 'dropmenu_links' : ''), 'escape' => false),
							false
						);
						?>
						</li>
						<?php
						}
						?>
						<?php
						if ($role != -1) {//menas everyone
							$menuitemscount++;
							//if cur route matches this menu item, then set the number to inform the js code
							if (strpos($this->request->here, 'stats') === false) {
							} else {
								$curmenuidx = $menuitemscount - 1;
							}
						?>
						<li>
						<?php
						echo $this->Html->link('<span><font>STATS</font></span>',
							array('controller' => 'stats', 'action' => 'statscompany', 'clear' => -2),
							array('escape' => false), 
							false
						);
						?>
						</li>
						<?php
						}
						?>

						<?php
						if ($role != -1) {//means everyone
							$menuitemscount++;
							//if cur route matches this menu item, then set the number to inform the js code
							if (strpos($this->request->here, 'addchatlogs') === false
								&& strpos($this->request->here, 'lstchatlogs') === false
								&& strpos($this->request->here, 'lstlogins') === false
								&& strpos($this->request->here, 'lstclickouts') === false) {
							} else {
								$curmenuidx = $menuitemscount - 1;
							}
						?>
						<li>
						<?php
						echo $this->Html->link('<span><font>LOGS</font></span>',
							"#",
							array('rel' => 'dropmenu_logs', 'escape' => false),
							false
						);
						?>
						</li>
						<?php
						}
						?>

						<?php
						if ($role == 1 || $role == 2) {//means an office or an agent
							$menuitemscount++;
							//if cur route matches this menu item, then set the number to inform the js code
							if (strpos($this->request->here, 'contactus') === false) {
							} else {
								$curmenuidx = $menuitemscount - 1;
							}
						?>
						<li>
						<?php
						echo $this->Html->link('<span><font>GET HELP</font></span>',
							array('controller' => 'accounts', 'action' => 'contactus'),
							array('escape' => false), 
							false
						);
						?>
						</li>
						<?php
						}
						?>
						<?php
						if ($role == 0) {//means an administrator
							$menuitemscount++;
							//if cur route matches this menu item, then set the number to inform the js code
							if (strpos($this->request->here, 'updadmin') === false) {
							} else {
								$curmenuidx = $menuitemscount - 1;
							}
						?>
						<li>
						<?php
						echo $this->Html->link('<span><font>PROFILE</font></span>',
							array('controller' => 'accounts', 'action' => 'updadmin'),
							array('escape' => false), 
							false
						);
						?>
						</li>
						<?php
						}
						?>
						<?php
						if ($role == 1) {//means an office
							$menuitemscount++;
							//if cur route matches this menu item, then set the number to inform the js code
							if (strpos($this->request->here, 'updcompany') === false) {
							} else {
								$curmenuidx = $menuitemscount - 1;
							}
						?>
						<li>
						<?php
						echo $this->Html->link('<span><font>PROFILE</font></span>',
							array('controller' => 'accounts', 'action' => 'updcompany', 'id' => $userinfo['id']),
							array('escape' => false), 
							false
						);
						?>
						</li>
						<?php
						}
						?>
						<?php
						if ($role == 2) {//means an agent
							$menuitemscount++;
							//if cur route matches this menu item, then set the number to inform the js code
							if (strpos($this->request->here, 'updagent') === false) {
							} else {
								$curmenuidx = $menuitemscount - 1;
							}
						?>
						<li>
						<?php
						echo $this->Html->link('<span><font>PROFILE</font></span>',
							array('controller' => 'accounts', 'action' => 'updagent', 'id' => $userinfo['id']),
							array('escape' => false), 
							false
						);
						?>
						</li>
						<?php
						}
						?>
						<?php
						if (in_array($userinfo['id'], array(1, 2))) {//HARD CODE: means an administrator whoes id is 1 or 2
							$menuitemscount++;
							//if cur route matches this menu item, then set the number to inform the js code
							if (strpos($this->request->here, 'toolbox') === false) {
							} else {
								$curmenuidx = $menuitemscount - 1;
							}
						?>
						<li>
						<?php 
						echo $this->Html->link('<span><font>HOW TO SELL</font></span>',
							"#",
							array('rel' => 'dropmenu_toolbox_admin', 'escape' => false),
							false
						);
						?>
						</li>
						<?php 
						} else {
							$menuitemscount++;
							//if cur route matches this menu item, then set the number to inform the js code
							if (strpos($this->request->here, 'toolbox') === false) {
							} else {
								$curmenuidx = $menuitemscount - 1;
							}
						?>
						<li>
						<?php 
						echo $this->Html->link('<span><font>HOW TO SELL</font></span>',
							"#",
							array('rel' => 'dropmenu_toolbox_normal', 'escape' => false),
							false
						);
						?>
						</li>
						<?php 
						}
						?>
						<li>
						<?php
						echo $this->Html->link('<span><font>LOGOUT</font></span>',
							array('controller' => 'accounts', 'action' => 'logout'),
							array('escape' => false), 
							false
						);
						?>
						</li>
					</ul>
				</div>
				<!--admin drop down menu -->
				<?php
				if ($role == 0) {//means an administrator
				?>
				<div id="dropmenu_admin_news" class="dropmenudiv_e"
					style="width: 70px;">
					<?php
					echo $this->Html->link('<font><b>Alerts</b></font>',
						array('controller' => 'accounts', 'action' => 'updalerts'),
						array('escape' => false), 
						false
					);
					?>
				</div>
				<div id="dropmenu_links" class="dropmenudiv_e" style="width: 120px;">
					<?php
					echo $this->Html->link('<font><b>Link</b></font>',
						array('controller' => 'links', 'action' => 'lstlinks'),
						array('escape' => false), 
						false
					);
					/**
					 * HARD CODE:
					 * avoid admin whose id is not 1 nor 2 to access the item
					 */
					if (in_array($userinfo['id'], array(1, 2))) {
						echo $this->Html->link('<font><b>Config Site</b></font>',
							array('controller' => 'links', 'action' => 'lstsites'),
							array('escape' => false), 
							false
						);
					}
					?>
				</div>
				<div id="dropmenu_admin_agent" class="dropmenudiv_e"
					style="width: 130px;">
					<?php
					echo $this->Html->link('<font><b>Manage Agent</b></font>',
						array('controller' => 'accounts', 'action' => 'lstagents', 'id' => -1),
						array('escape' => false), 
						false
					);
					?>
				</div>
				<div id="dropmenu_admin_company" class="dropmenudiv_e"
					style="width: 135px;">
					<?php
					echo $this->Html->link('<font><b>Manage Office</b></font>',
						array('controller' => 'accounts', 'action' => 'lstcompanies', 'id' => -1),
						array('escape' => false), 
						false
					);
					?>
				</div>
				<div id="dropmenu_toolbox_admin" class="dropmenudiv_e"
					style="width: 130px;">
					<?php
					echo $this->Html->link('<font><b>Update XE-cams</b></font>',
						array('controller' => 'accounts', 'action' => 'updtoolbox', 'site' => 7),
						array('escape' => false), 
						false
					);
					echo $this->Html->link('<font><b>Update XEDating</b></font>',
						array('controller' => 'accounts', 'action' => 'updtoolbox', 'site' => 2),
						array('escape' => false), 
						false
					);
					?>
				</div>
				<?php
				}
				?>
				<!--office drop down menu -->
				<?php
				if ($role == 1) {// means an office
				?>
				<div id="dropmenu_com_agent" class="dropmenudiv_e"
					style="width: 130px;">
					<?php
					echo $this->Html->link('<font><b>Manage Agent</b></font>',
						array('controller' => 'accounts', 'action' => 'lstagents', 'id' => $userinfo['id']),
						array('escape' => false), 
						false
					);
					?>
				</div>
				<?php
				}
				?>
				<!--agent drop down menu -->

				<!--office and agent drop down menu -->
				<?php
				/**
				 * HARD CODE:
				 * means an office or an agent, or admin whose id is not 1 nor 2 
				 */
				if ($role == 1 || $role == 2 || !in_array($userinfo['id'], array(1, 2))) {
				?>
				<div id="dropmenu_toolbox_normal" class="dropmenudiv_e"
					style="width: 130px;">
					<?php
					echo $this->Html->link('<font><b>XE-cams</b></font>',
						array('controller' => 'accounts', 'action' => 'toolbox', 'site' => 7),
						array('escape' => false), 
						false
					);
					echo $this->Html->link('<font><b>XEDating</b></font>',
						array('controller' => 'accounts', 'action' => 'toolbox', 'site' => 2),
						array('escape' => false), 
						false
					);
					?>
				</div>
				<?php 
				}
				?>

				<!--everyone drop down menu -->
				<div id="dropmenu_logs" class="dropmenudiv_e" style="width: 135px;">
					<?php
					if ($role == 2) {
						echo $this->Html->link('<font><b>Submit Chat Log</b></font>',
							array('controller' => 'accounts', 'action' => 'addchatlogs'),
							array('escape' => false), 
							false
						);
					}
					echo $this->Html->link('<font><b>Chat Log</b></font>',
						array('controller' => 'accounts', 'action' => 'lstchatlogs', 'id' => -1),
						array('escape' => false), 
						false
					);
					echo $this->Html->link('<font><b>Click Log</b></font>',
						array('controller' => 'links', 'action' => 'lstclickouts', 'id' => -1),
						array('escape' => false), 
						false
					);
					if ($role != 2) {
						echo $this->Html->link('<font><b>Login Log</b></font>',
							array('controller' => 'accounts', 'action' => 'lstlogins', 'id' => -1),
							array('escape' => false), 
							false
						);
					}
					?>
				</div>
				<!--5th drop down menu -->
			</div>
			<!-- End Navigation Bar -->
			<!-- Start Left Column -->
			<!-- Start Right Column -->
			<div id="rightcolumn">
				<!-- Start Main Content -->
				<div class="maincontent">
					<center>
						<b><font color="red"><?php echo $this->Session->flash(); ?> </font> </b>
					</center>
					<div class="content-top">
						<div style="float: right; text-align: right;">
							<?php
							//echo $this->Html->image('iconLips.png', array('width' => '40px'));
							?>
						</div>
						<div
							style="float: right; text-align: right; padding: 6px 20px 0px 0px;">
							<input type="text" value="" id="iptClock"
								style="width: 240px; text-align: right; border: 0px; background: transparent; font-family: Arial; font-weight: bold; color: #ffffff;"
								readonly="readonly"
								onmouseover="jQuery('#divTimezoneTip').slideDown();"
								onmouseout="jQuery('#divTimezoneTip').slideUp();" />
						</div>
						<div
							style="float: right; margin: 6px 6px 0px 0px; display: none; color: white;"
							id="divTimezoneTip">
							<script language="javascript">
				        	document.write("Your timezone: " + calculate_time_zone() + "");
				        	</script>
						</div>
						<script language="javascript">
			        	function __zShowClock() {
			        		var now = new Date();
				        	now.setHours(now.getHours() - 5);
				        	var nowStr = now.toUTCString();
				        	nowStr = nowStr.replace("GMT", "EDT"); //for firefox browser
				        	nowStr = nowStr.replace("UTC", "EDT"); //for IE browser
			        		jQuery("#iptClock").val(nowStr);
			        		setTimeout("__zShowClock()", 1000);
			        	}
			        	__zShowClock();
				        </script>
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
				<font size="1" color="white">
				<b>XuesEros, 2333 Dean Path, Edinburgh, EH3 7DX , UK</b>
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

	<!-- for "agent must read" -->
	<?php
	if (in_array($userinfo['role'], array(0, 1, 2)) && !$this->Session->check('switch_pass')) {
	?>
	<div style="display: none">
		<a id="attentions_link" href="#attentions_for_agents">show attentions</a>
	</div>
	<div style="display: none">
		<div id="attentions_for_agents" style="width: 800px;">
		<!--  
		<p class="p-blink" style="font:italic bolder 24px/100% Georgia;color:red;margin:0px 0px 6px 0px;">
		ATTENTION, EVERYONES: 
		</p>
		-->
			<script type="text/javascript" language="javascript">
			/*//we just don't blink the title of the alerts here
			colors = new Array(6);
			colors[0] = "#ff0000";
			colors[1] = "#ff2020";
			colors[2] = "#ff4040";
			colors[3] = "#ff6060";
			colors[4] = "#ff8080";
			colors[5] = "#ffffff";
			var clr_i = 0;
			function __blinkIt() {
				if (clr_i < colors.length) {
					jQuery(".p-blink").css("color", colors[clr_i]);
					clr_i++;
					setTimeout("__blinkIt()", 200);
				} else {
					clr_i = 0;
					setTimeout("__blinkIt()", 1200);
				}
			}
			__blinkIt();
			*/
			</script>
			<p style="padding: 3px 3px 3px 3px;">
				<?php
				echo !empty($alerts) ? $alerts : '';
				?>
			</p>
			<!--  
			<hr style="margin: 6px 0px 6px 0px" />
			<hr style="margin: 6px 0px 6px 0px" />
			-->
			<?php
			if (false && !empty($excludedsites)) {
			?>
			<p style="font-weight: bold; font-size: 14px; color: red;">
				YOUR
				<?php echo '"' . implode("\", \"", $excludedsites) . '"'; ?>
				LINKS HAVE BEEN SUSPENDED, PLEASE CONTACT <a
					href="mailto:SUPPORT@XUESEROS.COM"><font color="red">XUESEROS
						SUPPORT</font> </a> FOR MORE INFO.<br /> <a
					href="mailto:support@PayDirtDollars.com"><font color="red">SUPPORT@XUESEROS.COM</font>
				</a>
			</p>
			<div style="margin: 12px 2px 2px 2px; font-weight: bolder;">REASONS
				FOR TEMPORARY SUSPENSION</div>
			<p style="font-size: 14px; color: red;">
				1.SENDING LOW QUALITY SALES, CUSTOMERS WHO DO NOT SPEND MONEY ON THE
				SITE.<br /> <br /> 2.TOO MANY SALES, ON THE SAME SITE, SAME DAY. WE
				NEED TO MAKE SURE AGENT IS NOT GETTING IN ANY TROUBLE.3 OR MORE
				SALES, CAN BE FLAGGED, AGENT MAYBE CHEATING. IF HE IS SELLING TOO
				FAST.<br /> <br /> 3.LYING TO THE CUSTOMER THAT THE SITE IS FREE.<br />
				<br /> 4.TELLING CUSTOMER YOU WILL MEET HIM.<br />
			</p>
			<?php
			}
			?>

			<p style="text-align: center; margin: 9px 0px 0px 9px;">
				<?php
				echo $this->Html->link('<font style="font-weight:bold;">Enter</font>',
					"#",
					array('onclick' => 'javascript:jQuery.fancybox.close();jQuery.post(\'' 
						. $this->Html->url(array("controller" => "accounts", "action" => "pass")) 
						. '\', function(data) {});',
						'escape' => false
					),
					false
				);
				?>
			</p>
		</div>
	</div>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			jQuery("a#attentions_link").fancybox({
				'type': 'inline',
				'overlayOpacity': 0.6,
				'overlayColor': '#0A0A0A',
				'modal': true
			});
			jQuery("a#attentions_link").click();
		});
	</script>
	<?php
	}
	?>

	<!-- for tab menu -->
	<script type="text/javascript">
		//SYNTAX: tabdropdown.init("menu_id", [integer OR "auto"])
		tabdropdown.init("moonmenu", <?php echo $curmenuidx; ?>);
	</script>

	<?php
		echo $this->Js->writeBuffer(); 
	?>
</body>
</html>
