<center>
	<b><font color="red"><?php $session->flash('auth'); ?> </font> </b>
	<font color="red"><?php $session->flash(); ?> </font>
</center>
<?php
echo $form->create(null, array('controller' => 'trans', 'action' => 'login'));
?>
<table style="float:right;border:0;width:260px;margin-top:25px;">
	<tr>
		<td style="color:#fed652;text-align:center;font-weight:bold;font-size:16px;">
			<div style="margin-bottom:6px;">Log in</div>
		</td>
	</tr>
	<tr>
		<td align="left">
			<div style="float:left;color:white;padding:0 3px 0 3px;">
				<b>User:</b>
			</div>
			<div style="float:left;">
			<?php
			echo $form->input('Account.username', array('label' => '', 'style' => 'width:65px;'));
			?> 
			</div>
			<div style="float:left;color:white;padding:0 3px 0 3px;">
				<b>Pass:</b>
			</div>
			<div style="float:left;">
			<?php
			echo $form->input('Account.password', array('label' => '', 'style' => 'width:65px;', 'type' => 'password'));
			?>
			</div>
			<script type="text/javascript">
			jQuery("#AccountUsername").focus();
			</script>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td>
			<div style="float:left;color:white;padding:10px 3px 0 3px;">
				<b>Code:</b>
			</div>
			<div style="float:left; margin-right:10px;">
				<?php
				echo $form->input(
					'Account.vcode', 
					array(
						'label' => '', 
						'style' => 'width:65px;', 
						'div' => array('style' => 'margin-top:8px;')
					)
				);
				?>
			</div>
			<div style="float:left;">
				<script type="text/javascript">
				function __chgVcodes() {
					document.getElementById("imgVcodes").src =
						"<?php echo $html->url(array('controller' => 'trans', 'action' => 'phpcaptcha')); ?>"
						+ "?" + Math.random();
				}
				</script>
				<?php
				echo $html->link(
					$html->image(array('controller' => 'trans', 'action' => 'phpcaptcha'),
						array('style' => 'width:100px;border:1px solid #222222;', 'id' => 'imgVcodes', 'onclick' => 'javascript:__chgVcodes();')
					),
					'#',
					array('title' => 'Click to try another one.(By entering this code you help yourself prevent spam and fake login.)'),
					false, false
				);
				?>
			</div>
		</td>
	</tr>
	<tr>
		<td>
		<div style="float:left;">
		<?php
		echo $form->submit('login-button.png', array('style' => 'border:0px;width:160px;height:45px;'));
		?>
		</div>
		<div style="float:left;margin-left:12px;padding-top:15px;">
		<?php
		echo $html->link(
				'<b><font size="1">(Lost pwd?)</font></b>',
				array('controller' => 'trans', 'action' => 'forgotpwd'),
				null, false, false
		);
		?>
		</div>
		</td>
	</tr>
</table>
<?php
echo $form->end();
?>

<div style="margin: 0px 15px 0px 15px">
	<?php
	echo $this->element('frauddefblock');
	?>
</div>

<script type="text/javascript">
for (var i = 0; i < 10; i++) {
	jQuery(".suspended-warning").animate({opacity: 'toggle'}, "slow");
}
</script>
