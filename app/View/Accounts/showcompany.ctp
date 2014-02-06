<?php 
$userinfo = $this->Session->read('Auth.User.Account');
?>

<table style="width:100%;border:0;">
	<tr>
		<td width="222">Office Name : </td>
		<td>
		<div style="float:left">
		<?php
		echo $rs['ViewCompany']['officename'];
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td colspan="2"><h1>Personal information</h1></td>
	</tr>
	<tr>
		<td>First Name : </td>
		<td>
		<div style="float:left">
		<?php
		echo $rs['ViewCompany']['man1stname'];
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td>Middle Name : </td>
		<td>
		<div style="float:left">
		<?php
		echo $rs['ViewCompany']['manmidname'];
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td>Last Name : </td>
		<td>
		<div style="float:left">
		<?php
		echo $rs['ViewCompany']['manlastname'];
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td>Email : </td>
		<td>
		<div style="float:left">
		<?php
		echo $rs['ViewCompany']['manemail'];
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td>Username for this Office : </td>
		<td>
		<div style="float:left">
		<?php
		echo $rs['ViewCompany']['username'];
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td>Address, street name &amp; # : </td>
		<td>
		<div style="float:left">
		<?php
		echo $rs['ViewCompany']['street'];
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td>City : </td>
		<td>
		<div style="float:left">
		<?php
		echo $rs['ViewCompany']['city'];
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td>Province &amp; Zip : </td>
		<td>
		<div style="float:left">
		<?php
		echo $rs['ViewCompany']['state'];
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td>Country : </td>
		<td>
		<div style="float:left">
		<?php
		echo $cts[$rs['ViewCompany']['country']];
		?>
		</div>
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
		echo $rs['ViewCompany']['bankname'];
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td>Bank Address : </td>
		<td>
		<div style="float:left">
		<?php
		echo $rs['ViewCompany']['bankaddr'];
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td>Bank City : </td>
		<td>
		<div style="float:left">
		<?php
		echo $rs['ViewCompany']['bankcity'];
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td>Bank Province &amp; Zip code : </td>
		<td>
		<div style="float:left">
		<?php
		echo $rs['ViewCompany']['bankprovince'];
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td>Bank Country : </td>
		<td>
		<div style="float:left">
		<?php
		echo $cts[$rs['ViewCompany']['bankcountry']];
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td>SWIFT Code : </td>
		<td>
		<div style="float:left">
		<?php
		echo $rs['ViewCompany']['bankswift'];
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td>Account Name : </td>
		<td>
		<div style="float:left">
		<?php
		echo $rs['ViewCompany']['bankaccountname'];
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td>Account# : </td>
		<td>
		<div style="float:left">
		<?php
		echo $rs['ViewCompany']['bankaccountnum'];
		?>
		</div>
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
		echo $rs['ViewCompany']['agents'];
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td>Other websites you are selling now : </td>
		<td>
		<div style="float:left">
		<?php
		echo $rs['ViewCompany']['otherwebs'];
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td>How many sales a day? </td>
		<td>
		<div style="float:left">
		<?php
		echo $rs['ViewCompany']['salesaday'];
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td>I will do my best to send clean sales : </td>
		<td>
		<div style="float:left">
		<?php
		echo $rs['ViewCompany']['dobestornot'] == 1 ? "yes" : "no";
		?>
		</div>
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
		echo $rs['ViewCompany']['immsg'];
		?>
		</div>
		</td>
	</tr>
	<tr>
		<td>
		<label id="labelUAS">Status</label>
		</td>
		<td>
		<?php
		echo ($rs['ViewCompany']['status'] == -1 ? "not approved" : ($rs['ViewCompany']['status'] == 0 ? "suspended" : "activated"));
		?>
		</td>
	</tr>
</table>