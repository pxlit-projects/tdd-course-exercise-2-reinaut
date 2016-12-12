<?php
function calculate() {
	$u = $_POST['i'];

	calculateFor($u);
}

function calculateFor($u) {
	if (!preg_match('/^(?=[a-z]{2})(?=.{4,26})(?=[^.]*\.?[^.]*$)(?=[^_]*_?[^_]*$)[\w.]+$/iD',
	                $u))
	{
	 return false;
	}
	else
	{
	 return true;
	}
}

echo calculateFor('Abigail');

?>
