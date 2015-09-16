<form>
<table>
<tr>
<th>First name</th>
<th>Last name</th>
<th>Job title</th>
</tr>
<?php
$x = 0;
foreach ($vars['people'] as $person) {
		$this->showView('person', array('person' => $person, 'x' => $x++));
}
?>
</table>
<input type="submit" value="OK" />
</form>
