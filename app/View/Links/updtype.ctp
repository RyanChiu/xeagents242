<h1>Update Type</h1>
<br/>
<?php
//echo print_r($results, true);
$userinfo = $this->Session->read('Auth.User.Account');
echo $this->Form->create(null, array('url' => array('controller' => 'links', 'action' => 'updtype')));
?>
<table style="width:100%">
	<caption>Fields marked with an asterisk (*) are required.</caption>
	<tr>
		<td width="15%">Type Name:</td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Type.typename', array('label' => '', 'style' => 'width:590px;'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr>
		<td width="15%">Type URL:</td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Type.url', array('label' => '', 'style' => 'width:590px;'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<!--
	<tr>
		<td width="15%">Payout:</td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Type.price', array('label' => '', 'style' => 'width:590px;'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	<tr>
		<td width="15%">Earning:</td>
		<td>
		<div style="float:left">
		<?php
		echo $this->Form->input('Type.earning', array('label' => '', 'style' => 'width:590px;'));
		?>
		</div>
		<div style="float:left"><font color="red">*</font></div>
		</td>
	</tr>
	-->
	<tr>
		<td>
		<?php
		echo 'Activated' . $this->Form->checkbox(
			'Type.status',
			array('style' => 'border:0px;width:16px;')
		);
		?>
		</td>
		<td>
		<?php echo $this->Form->submit('Update', array('style' => 'width:112px;')); ?>
		</td>
	</tr>
</table>
<?php
echo $this->Form->input('Type.id', array('type' => 'hidden'));
echo $this->Form->end();
?>
