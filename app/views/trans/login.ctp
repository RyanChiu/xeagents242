<center>
	<b><font color="red"><?php $session->flash('auth'); ?> </font> </b>
	<font color="red"><?php $session->flash(); ?> </font>
</center>
<?php
echo $form->create(null, array('controller' => 'trans', 'action' => 'login'));
?>
<table style="border: 0; width: 100%">
	<tr>
		<td></td>
		<td style="color:darkred;text-align:left;font-weight:bold;">
			<div style="margin-bottom:6px;">Affliate's log in</div>
		</td>
	</tr>
	<tr>
		<td align="right">
			<b><font color="white" size="2">Username/Password :</font> </b>
		</td>
		<td align="left">
			<div style="float:left;">
			<?php
			echo $form->input('Account.username', array('label' => '', 'style' => 'width:112px;'));
			?> 
			</div>
			<div style="float:left;color:white;padding:0 3px 0 3px;">
			/
			</div>
			<div style="float:left;">
			<?php
			echo $form->input('Account.password', array('label' => '', 'style' => 'width:112px;', 'type' => 'password'));
			?>
			</div>
			<script type="text/javascript">
			jQuery("#AccountUsername").focus();
			</script>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td></td>
	</tr>
	<tr>
		<td align="right">
			<b><font color="white" size="2">Code verification :</font></b>
		</td>
		<td align="left">
			<div style="float: left; margin-right: 10px;">
				<?php
				echo $form->input(
					'Account.vcode', 
					array(
						'label' => '', 
						'style' => 'width:112px;', 
						'div' => array('style' => 'margin-top:8px;')
					)
				);
				?>
			</div>
			<div style="float: left;">
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
								array('style' => 'width:100px; height:35; border: 1px solid #222222;', 'id' => 'imgVcodes', 'onclick' => 'javascript:__chgVcodes();')
						),
						'#',
						array('title' => 'Click to try another one.(By entering this code you help yourself prevent spam and fake login.)'),
						false, false
				);
				?>
			</div>
			<div style="float: left;">
				<div id="playPhpcaptcha">
					<object type="application/x-shockwave-flash"
						data="../img/securimage_play.swf?bgcol=#ffffff&amp;icon_file=../img/audio_icon.png&amp;audio_file=<?php
							echo $html->url(array('controller' => 'trans', 'action' => 'playPhpcaptcha')); 
						?>"
						style="width: 35px; height: 35px; border: 1px solid #666666; margin-top: 1px; margin-left: 2px;">
						<param name="movie"
							value="../img/securimage_play.swf?bgcol=#ffffff&amp;icon_file=../img/audio_icon.png&amp;audio_file=<?php
								echo $html->url(array('controller' => 'trans', 'action' => 'playPhpcaptcha')); 
							?>"/>
					</object>
				</div>
			</div>
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td style="color: #dddddd;">Example: 9x4=36, please enter 36.</td>
	</tr>
	<tr>
		<td></td>
		<td>
		<div style="float:left;">
		<?php
		echo $form->submit('login-button.png', array('style' => 'border:0px;width:128px;height:36px;'));
		?>
		</div>
		<div style="float:left;margin-left:12px;padding-top:9px;">
		<?php
		echo $html->link(
				'<b><font size="1">(Lost password?)</font></b>',
				array('controller' => 'trans', 'action' => 'forgotpwd'),
				null, false, false
		);
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td align="center" colspan="2">
			
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
