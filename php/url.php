<?php

function verifyUrl($URL) {
		$pattern = "_(^|[\s.:;?\-\]<\(])(http://[-\w;/?:@&=+$\|\_.!~*\|'()\[\]%#,☺]+[\w/#](\(\))?)(?=$|[\s',\|\(\).:;?\-\[\]>\)])_i";
      if(preg_match($pattern, $URL)) {
        return true;
      } else{
        return false;
      }
  }

?>