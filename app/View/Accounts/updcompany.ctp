<h1>Update Office</h1>
<?php
$userinfo = $this->Session->read('Auth.User.Account');
echo $this->Form->create(
	null, 
	array(
		'url' => array('controller' => 'accounts', 'action' => 'updcompany')
	)
);
?>
<table style="width:100%;border:0;">
	<caption>Fields marked with an asterisk (*) are required.</caption>
	<tr>
		<td width="222">Office Name : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Company.officename', array('label' => '', 'style' => 'width:360px;'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
		<!--  
		<td rowspan="15" align="center"><?php //echo $this->Html->image('iconGiveDollars.png', array('width' => '160')); ?></td>
		-->
	</tr>
	<tr>
		<td colspan="2"><h1>Personal information</h1></td>
	</tr>
	<tr>
		<td>First Name : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Company.man1stname', array('label' => '', 'style' => 'width:360px;'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr>
		<td>Middle Name : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Company.manmidname', array('label' => '', 'style' => 'width:360px;'));
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td>Last Name : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Company.manlastname', array('label' => '', 'style' => 'width:360px;'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr>
		<td>Email : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Company.manemail', array('label' => '', 'style' => 'width:360px;'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr>
		<td>Username for this Office : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Account.username', array('label' => '', 'style' => 'width:360px;'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr>
		<td>Password : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Account.password', array('label' => '', 'style' => 'width:360px;', 'type' => 'password'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr>
		<td>Confirm password : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Account.originalpwd', array('label' => '', 'style' => 'width:360px;', 'type' => 'password'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr>
		<td>Address, street name &amp; # : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Company.street', array('label' => '', 'style' => 'width:360px;'));
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td>City : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Company.city', array('label' => '', 'style' => 'width:360px;'));
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td>Province &amp; Zip : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Company.state', array('label' => '', 'style' => 'width:360px;'));
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td>Country : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->select('Company.country', $cts, array('style' => 'width:360px;'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr>
		<td colspan="2"><h1>Bank wire information</h1></td>
	</tr>
	<tr>
		<td>Bank Name : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Company.bankname', array('label' => '', 'style' => 'width:360px;'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr>
		<td>Bank Address : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Company.bankaddr', array('label' => '', 'style' => 'width:360px;'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr>
		<td>Bank City : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Company.bankcity', array('label' => '', 'style' => 'width:360px;'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr>
		<td>Bank Province &amp; Zip code : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Company.bankprovince', array('label' => '', 'style' => 'width:360px;'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr>
		<td>Bank Country : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->select('Company.bankcountry', $cts, array('style' => 'width:360px;'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr>
		<td>SWIFT Code : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Company.bankswift', array('label' => '', 'style' => 'width:360px;'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr>
		<td>Account Name : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Company.bankaccountname', array('label' => '', 'style' => 'width:360px;'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr>
		<td>Account# : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Company.bankaccountnum', array('label' => '', 'style' => 'width:360px;'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr>
		<td colspan="2"><h1>Other information</h1></td>
	</tr>
	<tr>
		<td>Number of Agents : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Company.agents', array('label' => '', 'style' => 'width:360px;'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr>
		<td>Other websites you are selling now : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Company.otherwebs', array('label' => '', 'rows' => 3, 'cols' => 43));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr>
		<td>How many sales a day? </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Company.salesaday', array('label' => '', 'style' => 'width:360px;'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr>
		<td>I will do my best to send clean sales : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->select(
			'Company.dobestornot', 
			array(1 => "yes", 2 => "no"), 
			array('label' => '', 'style' => 'width:160px;', 'value' => 1)
		);
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr>
		<td colspan="2"><h1>Your Instant Contact info &amp; questions</h1></td>
	</tr>
	<tr>
		<td></td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Company.immsg', array('label' => '', 'rows' => 6, 'cols' => 43));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr>
		<td>Agent Notes : </td>
		<td>
		<?php
		echo $this->Form->input('Company.agentnotes', array('label' => '', 'rows' => '9', 'cols' => '60'));
		?>
		</td>
	</tr>
	<tr>
		<td>Associated Sites: </td>
		<td>
		<?php
		$selsites = array_diff($sites, $exsites);
		$selsites = array_keys($selsites);
		echo $this->Form->select('SiteExcluding.siteid',
			$sites,
			array(
				'multiple' => 'checkbox',
				'disabled' => 'false',
				'value' => $selsites
			)
		);
		if ($userinfo['role'] != 0) {//means not an administrator
		?>
			<div id="msgbox_nochange" style="display:none;float:left;background-color:#ffffcc;">
			<font color="red">
			Sorry, you can't do this.If you want to, please contact your administrator.
			</font>
			</div>
			<script type="text/javascript">
			jQuery(":checkbox").click(
				function () {
					jQuery("#msgbox_nochange").show("normal");
					return false;
				}
			);
			jQuery("#msgbox_nochange").click(
				function () {
					jQuery(this).toggle("normal");
				}
			);
			</script>
		<?php	
		}
		?>
		</td>
	</tr>
	<tr>
		<td>
		<label id="labelUAS">Activated</label>
		<?php
		echo $this->Form->checkbox(
			'Account.status'
		);
		?>
		</td>
		<td>
		<?php
		echo $this->Form->submit('Update', array('style' => 'width:112px;'));
		?>
		</td>
	</tr>
</table>
<script type="text/javascript">
jQuery(":checkbox").attr({
	style: "border: 0px; width: 16px; margin-left: 2px; vertical-align: middle;"
});

jQuery("#AccountStatus").click(function() {
	if (jQuery("#AccountStatus").attr("checked")) {
		jQuery("#AccountStatus").val(1);
	} else {
		jQuery("#AccountStatus").val(0);
	}
});

if (jQuery("#AccountStatus").val() == "-1") {
	jQuery("#labelUAS").text("Approved");
	jQuery("#AccountStatus").attr("checked", false);
	jQuery("#AccountStatus").val(-1);
	jQuery("#AccountStatus_").val(-1);
} else {
	jQuery("#labelUAS").text("Activated");
}
</script>
<?php
echo $this->Form->input('Account.id', array('type' => 'hidden'));
echo $this->Form->input('Account.role', array('type' => 'hidden', 'value' => '1'));//the value 1 as being an office
echo $this->Form->input('Company.id', array('type' => 'hidden'));
echo $this->Form->end();
?>
