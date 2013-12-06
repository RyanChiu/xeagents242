<?php
//echo '<br/>';
//echo print_r($data, true);
$userinfo = $this->Session->read('Auth.User.Account');
$action = 'regagent';
$title = 'A New Agent';
if ($userinfo['role'] == 1) {
	$action = 'requestchg';
	$title = 'Request For New Agent';
}
?>
<h1><?php echo $title; ?></h1>
<?php
echo $this->Form->create(
	null, 
	array(
		'url' => array('controller' => 'accounts', 'action' => $action), 
		'id' => 'frmReg'
	)
);
if ($userinfo['role'] == 1) {
	echo $this->Form->input('Requestchg.role', array('type' => 'hidden', 'value' => '2'));
	echo $this->Form->input('Requestchg.type', array('type' => 'hidden', 'value' => 'reg'));
	echo $this->Form->input('Requestchg.from', array('type' => 'hidden', 'value' => $curcom['Company']['manemail']));
	echo $this->Form->input('Requestchg.offiname', array('type' => 'hidden', 'value' => $curcom['Company']['officename']));
}
?>
<table style="width:100%;border:0;">
	<caption>Fields marked with an asterisk (*) are required.</caption>
	<tr>
		<td width="248">Office : </td>
		<td>
		<div style="float:left">
		<?php
		if ($userinfo['role'] == 0) {// means an administrator
			echo $this->Form->input('Agent.companyid',
				array('type' => 'select', 'options' => $cps,
					'label' => '', 'style' => 'width:390px;'
				)
			);
		} else if ($userinfo['role'] == 1) {// means an office
			echo $this->Form->input('Agent.companyshadow',
				array(
					'label' => '',
					'style' => 'width:390px;border:0px;background:transparent;',
					'readonly' => 'readonly',
					'value' => $cps[$userinfo['id']]
				)
			);
			echo $this->Form->input('Agent.companyid', array('type' => 'hidden', 'value' => $userinfo['id']));
		}
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
		<!--  
		<td rowspan="16" align="center"><?php //echo $this->Html->image('iconDollarsKey.png', array('width' => '160')); ?></td>
		-->
	</tr>
	<tr>
		<td>First Name : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Agent.ag1stname', array('label' => '', 'style' => 'width:390px;'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr>
		<td>Last Name : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Agent.aglastname', array('label' => '', 'style' => 'width:390px;'));
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
		echo $this->Form->input('Agent.email', array('label' => '', 'style' => 'width:390px;'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr>
		<td>
		<div style="float:left">Username : </div>
		<div style="float:left; display: none;">
		<?php
		echo '('
			. $this->Form->checkbox(
				'Account.auto',
				array(
					//'checked' => 'checked',
					'style' => 'border:0px;width:16px;'
				)
			)
			. 'Auto-generated)';
		?>
		</div>
		</td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Account.username', array('label' => '', 'style' => 'width:390px;'));
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
		echo $this->Form->input('Account.password', array('label' => '', 'style' => 'width:390px;', 'type' => 'password'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr>
		<td>Confirm Password : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Account.originalpwd', array('label' => '', 'style' => 'width:390px;', 'type' => 'password'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr>
		<td>Street Name &amp; Number : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Agent.street', array('label' => '', 'style' => 'width:390px;'));
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td>City : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Agent.city', array('label' => '', 'style' => 'width:390px;'));
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td>State &amp; Zip : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Agent.state', array('label' => '', 'style' => 'width:390px;'));
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td>Country : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->select('Agent.country', $cts, array('style' => 'width:390px;'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr>
		<td>Instant Messenger Contact : <br/><small>(AIM, Yahoo, Skype, MSN, ICQ</small></td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Agent.im', array('label' => '', 'style' => 'width:390px;'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr>
		<td>Cell NO. : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Agent.cellphone', array('label' => '', 'style' => 'width:390px;'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
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
				'value' => $selsites
			)
		);
		?>
		</td>
	</tr>
	<tr>
		<td>
		<?php
		echo $this->Form->input('Account.status', array('type' => 'hidden', 'value' => '-1'));//the default status if unapproved
		?>
		</td>
		<td>
		<?php
		if ($userinfo['role'] == 0 || $userinfo['role'] == 1) {//means an administrator or an office
			echo $this->Form->submit('Add & New',
				array(
					'default' => 'default',
					'div' => array('style' => 'float:left;margin-right:15px;'),
					'style' => 'width:112px;',
					'onclick' => 'javascript:__changeAction(\'frmReg\', \''
						. $this->Html->url(array('controller' => 'accounts', 'action' => 'regagent', 'id' => -1))
						. '\');' 
				)
			);
			echo $this->Form->submit('Add',
				array(
					'div' => array('style' => 'float:left;margin-right:15px;'),
					'style' => 'width:112px;',
					'onclick' => 'javascript:__changeAction(\'frmReg\', \''
						. $this->Html->url(array('controller' => 'accounts', 'action' => 'regagent'))
						. '\');'
				)
			);
		}
		/*
		if ($userinfo['role'] == 1) {
			echo $this->Form->submit('Send Request',
				array('div' => array('style' => 'float:left;margin-right:15px;'))
			);
		}
		*/
		?>
		</td>
	</tr>
</table>
<script type="text/javascript"> 
jQuery(":checkbox").attr({style: "border:0px;width:16px;vertical-align:middle;"});
jQuery("#AccountUsername").keyup(function(){
	//this.value = this.value.replace('/^[a-z]{1,3}\d{0,4}_{0,1}\d{0,2}$/i', '');
	this.value = this.value.toUpperCase();
});
function dimUsernameInput() {
	if (jQuery("#AccountAuto").attr("checked") == true) {
		jQuery("#AccountUsername").attr('disabled','disabled');
	} else {
		jQuery("#AccountUsername").removeAttr('disabled');
	}
}
dimUsernameInput();
jQuery("#AccountAuto").click(function(){
	dimUsernameInput();
});
</script>
<?php
echo $this->Form->input('Account.role', array('type' => 'hidden', 'value' => '2'));//the value 2 as being an agent
echo $this->Form->input('Account.regtime', array('type' => 'hidden', 'value' => ''));//should be set to current time when saving into the DB
echo $this->Form->input('Account.online', array('type' => 'hidden', 'value' => '0'));// the value 0 means "offline"
echo $this->Form->input('Agent.id', array('type' => 'hidden'));
echo $this->Form->end();
?>