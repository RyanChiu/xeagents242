<?php
echo $this->Form->create(null, array('url' => array('controller' => 'accounts', 'action' => 'login')));
?>
<table style="float:right;border:0;width:345px;margin-top:0px;">
	<tr>
		<td style="color:#fed652;text-align:center;font-weight:bold;font-size:16px;">
			<div style="margin:0px 0px 6px 0px;">Log in</div>
		</td>
	</tr>
	<tr>
		<td align="left">
			<div style="float:left;color:white;width:85px;text-align:left;">
				<b>Username:</b>
			</div>
			<div style="float:left;">
			<?php
			echo $this->Form->input('Account.username', array('label' => '', 'style' => 'width:135px;'));
			?> 
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div style="float:left;color:white;width:85px;text-align:left;">
				<b>Password:</b>
			</div>
			<div style="float:left;">
			<?php
			echo $this->Form->input('Account.password', array('label' => '', 'style' => 'width:135px;', 'type' => 'password'));
			?>
			</div>
			<script type="text/javascript">
			jQuery("#AccountUsername").focus();
			</script>
		</td>
	</tr>
	<tr>
		<td>
			<div style="float:left;color:white;width:85px;text-align:left;"><b>Code:</b></div>
			<div style="float:left;">
			<?php
			echo $this->Form->input('Account.vcode', 
				array('label' => '', 'style' => 'width:135px;', 'div' => array('style' => 'margin:0 3px 5px 0;'))
			);
			?>
			</div>
			<div style="float:left;">
			<script type="text/javascript">
			function __chgVcodes() {
				document.getElementById("imgVcodes").src =
					"<?php echo $this->Html->url(array('controller' => 'accounts', 'action' => 'phpcaptcha')); ?>"
					+ "?" + Math.random();
			}
			</script>
			<?php
			echo $this->Html->link(
				$this->Html->image(array('controller' => 'accounts', 'action' => 'phpcaptcha'),
					array(
						'id' => 'imgVcodes',
						'style' => 'width:105px;height:23px;margin-right:3px;', 
						'onclick' => 'javascript:__chgVcodes();'
					)
				),
				'#', 
				array(
					'title' => 'Click to try another one.(By entering this code you help yourself prevent spam and fake login.)',
					'escape' => false
				),
				false
			);
			?>
			</div>
		</td>
	</tr>
	<tr>
		<td>
			<div style="float:left;width:85px;text-align:left;margin-left:0px;padding-top:5px;">
			<?php
			/*
			echo $this->Html->link(
				'(Forget pwd?)',
				array('controller' => 'accounts', 'action' => 'forgotpwd'),
				array('style' => 'font-size:11px;font-weight:bold;'), false
			);
			*/
			?>
			</div>
			<div style="float:left;width:135px;height:25px;">
			<?php
			echo $this->Form->submit('ENTER', array('style' => 'width:135px;'));
			?>
			</div>
		</td>
	</tr>
	<tr>
		<td style="text-align:center;padding:8px 0 0 0;color:white;">
			Need help,Forget password:<br/><a href="mailto:support@xueseros.com">support@xueseros.com</a>
		</td>
	</tr>
</table>
<?php
echo $this->Form->end();
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
