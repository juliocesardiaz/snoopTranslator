<?php 
	class SnoopTranslator
	{
		function translate($phrase)
		{
			
			$input = explode(" ", $phrase);
			$output = array();
			foreach($input as $word) {
				$pos = -1;
				while(($pos = strpos($word, "s", $pos + 1)) !== false) {
					if(($pos != 0) && (!ctype_upper($word[$pos]))) {
						$word[$pos] = "z";
					}
				}
				array_push($output, $word);
			}
			return implode(" ", $output);
		}
	}
?>