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
<input type="submit" value="Load" />
<input type="submit" value="OK" />
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="/ajax.js"></script>
