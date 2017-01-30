<?php
function calculate() {
	$u = $_POST['i'];

	calculateFor($u);
}

function calculateFor($u) {
	// (?=[a-z]{2})			first, two a-z letters
	// (?=.{3,26})			also, minimum 3, maximum 26 symbols (not lineends?)
	// (?=[^.]*\.?[^.]*$)	also, zero or more no-dots, an optional dot, zero or more no-dots, end
	// (?=[^_]*_?[^_]*$)	also, zero or more no-underscores, an optional underscore, zero or more no-underscores, end
	// [\w.]+$ 				all-in-all, one or more \w-characters or dots, end
	// /iD 					PCRE_CASELESS, PCRE_DOLLAR_ENDONLY ($ is real end)
	if (!preg_match('/^(?=[a-z]{2})(?=.{3,26})(?=[^.]*\.?[^.]*$)(?=[^_]*_?[^_]*$)[\w.]+$/iD',
	                $u))
	{
		return false;
	}
	else
	{
		return true;
	}
}

var_dump(calculateFor('Abigail'));

?>
