<?php
echo $this->Form->create(null, array('url' => array('controller' => 'accounts', 'action' => 'login')));
?>
<table style="border:0;width:100%;margin-top:0px;">
	<tr>
		<td style="color:red;text-align:center;font-weight:bold;font-size:16px;">
			<div style="margin:0px 0px 6px 0px;">Log in</div>
		</td>
	</tr>
	<tr>
		<td align="left">
			<div style="float:left;color:black;width:85px;text-align:left;margin-left:130px;">
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
			<div style="float:left;color:black;width:85px;text-align:left;margin-left:130px;">
				<b>Password:</b>
			</div>
			<div style="float:left;">
			<?php
			echo $this->Form->input('Account.password', array('label' => '', 'style' => 'width:135px;', 'type' => 'password'));
			?>
			</div>
			<div style="float:left;margin-left:6px;">
			<?php
			echo $this->Form->submit('ENTER', array('style' => 'width:75px;'));
			?>
			</div>
			<script type="text/javascript">
			jQuery("#AccountUsername").focus();
			</script>
		</td>
	</tr>
	<tr>
		<td style="text-align:center;padding:8px 0 0 0;color:black;">
			Need help,Forget password:<br/><a href="mailto:support@xueseros.com">support@xueseros.com</a>
		</td>
	</tr>
	<tr>
		<td style="text-align:center;padding-top:8px;">
			  
		</td>
	</tr>
</table>
<?php
echo $this->Form->end();
?>
<table style="width:100%;border:0;">
<tr><td style="text-align:left;">
<div style="margin: 0px 15px 0px 15px">
	
</div>
</td></tr>
</table>

<script type="text/javascript">
for (var i = 0; i < 10; i++) {
	jQuery(".suspended-warning").animate({opacity: 'toggle'}, "slow");
}
</script>
