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
			<div style="margin:18px 0px 6px 0px;">Log in</div>
		</td>
	</tr>
	<tr>
		<td align="left">
			<div style="float:left;color:white;width:85px;text-align:left;">
				<b>Username:</b>
			</div>
			<div style="float:left;">
			<?php
			echo $form->input('Account.username', array('label' => '', 'style' => 'width:135px;'));
			?> 
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div style="float:left;color:white;white;width:85px;text-align:left;">
				<b>Password:</b>
			</div>
			<div style="float:left;">
			<?php
			echo $form->input('Account.password', array('label' => '', 'style' => 'width:135px;', 'type' => 'password'));
			?>
			</div>
			<script type="text/javascript">
			jQuery("#AccountUsername").focus();
			</script>
		</td>
	</tr>
	<tr>
		<td>
			
		</td>
	</tr>
	<tr>
		<td>
			
		</td>
	</tr>
	<tr>
		<td>
			<div style="float:left;width:85px;text-align:left;margin-left:0px;padding-top:5px;">
			<?php
			echo $html->link(
				'<b><font size="1">(Forget pwd?)</font></b>',
				array('controller' => 'trans', 'action' => 'forgotpwd'),
				null, false, false
			);
			?>
			</div>
			<div style="float:left;width:135px;height:25px;">
			<?php
			echo $form->submit('Login', array('style' => 'width:80px;'));
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
