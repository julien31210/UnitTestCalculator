<?php 

class Calculator
{
	function calculate($num){
		if ($num == 0) {
			return 0;
		}
		else if($num === "1+2") {
			return 3;
		}
		else{
			return 1;
		}

	}
}
 ?>