<h1>A New Office</h1>
<?php
$userinfo = $this->Session->read('Auth.User.Account');
echo $this->Form->create(
	null, 
	array(
		'url' => array('controller' => 'accounts', 'action' => 'regcompany'),
		'id' => 'frmReg'
	)
);

$username = __rndStr(6);
?>
<table style="width:100%;border:0;">
	<caption>Fields marked with an asterisk (*) are required.</caption>
	<tr <?php echo ($partial ? "style='display:none'" : ""); ?>>
		<td width="222">Office Name : </td>
		<td>
		<div style="float:left">
		<?php 
		echo $this->Form->input('Company.officename', array('label' => '', 'value' => ($partial ? $username : ""), 'style' => 'width:360px;'));
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
	<tr <?php echo ($partial ? "style='display:none'" : ""); ?>>
		<td>Username for this Office : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Account.username', array('label' => '', 'value' => ($partial ? $username : ""), 'style' => 'width:360px;'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr <?php echo ($partial ? "style='display:none'" : ""); ?>>
		<td>Password : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Account.password', array('label' => '', 'value' => ($partial ? $username : ""), 'style' => 'width:360px;', 'type' => 'password'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr <?php echo ($partial ? " style='display:none'" : ""); ?>>
		<td>Confirm password : </td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Account.originalpwd', array('label' => '', 'value' => ($partial ? $username : ""), 'style' => 'width:360px;', 'type' => 'password'));
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
		<div style="float:left"><font color="red">*</font></div>
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
		<div style="float:left"><font color="red">*</font></div>
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
		<div style="float:left"><font color="red">*</font></div>
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
	<tr style="<?php echo ($partial ? "display:none" : ""); ?>">
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
		if (!$partial) {
			echo $this->Form->submit('Add & New',
				array(
					'default' => 'default',
					'div' => array('style' => 'float:left;margin-right:15px;'),
					'style' => 'width:112px;',
					'onclick' => 'javascript:__changeAction("frmReg", "'
						. $this->Html->url(array('controller' => 'accounts', 'action' => 'regcompany', 'id' => -1))
						. '");' 
				)
			);
		}
		echo $this->Form->submit($partial ? 'Register' : 'Add',
			array(
				'div' => array('style' => 'float:left;margin-right:15px;'),
				'style' => 'width:112px;',
				'onclick' => 'javascript:__changeAction("frmReg", "'
					. $this->Html->url(array('controller' => 'accounts', 'action' => 'regcompany'))
					. '");'
			)
		);
		?>
		</td>
	</tr>
</table>
<script type="text/javascript">
jQuery(":checkbox").attr({style: "border:0px;width:16px;vertical-align:middle;"});
</script>
<?php
echo $this->Form->input('Account.role', array('type' => 'hidden', 'value' => '1'));//the value 1 as being an office
echo $this->Form->input('Account.regtime', array('type' => 'hidden', 'value' => ''));//should be set to current time when saving into the DB
echo $this->Form->input('Account.online', array('type' => 'hidden', 'value' => '0'));// the value 0 means "offline"
echo $this->Form->input('Company.id', array('type' => 'hidden'));
echo $this->Form->end();
?>

<script type="text/javascript">
	jQuery("#frmReg").validate({
		rules: {
			"data[Company][officename]": "required",
			"data[Company][man1stname]": "required",
			"data[Company][manlastname]": "required",
			"data[Company][street]": "required",
			"data[Company][city]": "required",
			"data[Company][state]": "required",
			"data[Company][country]": "required",
			"data[Company][manemail]": {
				required: true,
				email: true
			},
			"data[Company][bankname]": "required",
			"data[Company][bankaddr]": "required",
			"data[Company][bankcity]": "required",
			"data[Company][bankprovince]": "required",
			"data[Company][bankcountry]": "required",
			"data[Company][bankswift]": "required",
			"data[Company][bankaccountname]": "required",
			"data[Company][bankaccountnum]": "required",
			"data[Company][agents]": {
				required: true,
				digits: true
			},
			"data[Company][otherwebs]": "required",
			"data[Company][salesaday]": {
				required: true,
				number: true
			},
			"data[Company][dobestornot]": "required",
			"data[Company][immsg]": "required"
		},
		messages: {
			"data[Company][officename]": "Please enter company name.",
			"data[Company][man1stname]": "Please enter your 1st name.",
			"data[Company][manlastname]": "Please enter your last name.",
			"data[Company][street]": "Please enter your address.",
			"data[Company][city]": "Please enter your city.",
			"data[Company][state]": "Please enter your province & zip code.",
			"data[Company][country]": "Please enter your country.",
			"data[Company][manemail]": "Please enter a valid email address.",
			"data[Company][bankname]": "Please enter your bank name.",
			"data[Company][bankaddr]": "Please enter your bank address.",
			"data[Company][bankcity]": "Please enter your bank city.",
			"data[Company][bankprovince]": "Please enter your bank province & zip code.",
			"data[Company][bankcountry]": "Please enter your bank country.",
			"data[Company][bankswift]": "Please entry your SWIFT code.",
			"data[Company][bankaccountname]": "Please entry your account name.",
			"data[Company][bankaccountnum]": "Please entry your account number.",
			"data[Company][agents]": {
				required: "Please enter how many agents you have.",
				digits: "Please enter valid digits."
			},
			"data[Company][otherwebs]": "Please enter your other selling website(s).",
			"data[Company][salesaday]": {
				required: "Please enter how many sales made per day.",
				number: "Please enter valid number."
			},
			"data[Company][dobestornot]": "Please make your choice.",
			"data[Company][immsg]": "Please enter your contact info & questions."
		}
	});
</script>